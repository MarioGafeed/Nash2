<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VpostsRequest;
use App\DataTables\VpostsDataTable;
use App\Models\Vpost;
use App\Models\Vcategory;
use App\Models\Vtaq;
use Hash;
use Helper;

class VpostController extends Controller
{
    private $viewPath = 'backend.vposts';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(VpostsDataTable $dataTable)
    {
        return $dataTable->render("{$this->viewPath}.index", [
            'title' => trans('main.show-all') . ' ' . trans('main.vposts')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vcat = Vcategory::select('id', 'title')->get();
        $vtaq = Vtaq::all();
        return view("{$this->viewPath}.create", [
            'title' => trans('main.add') . ' ' . trans('main.vposts'),
            'vcat'  => $vcat,
            'vtaq'  => $vtaq,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VpostsRequest $request)
    {
        $requestAll = $request->all();

        $requestAll['title'] = json_encode([
          'en' => $request->title_en,
          'ar' => $request->title_ar,
        ]);
        $requestAll['desc'] = json_encode([
          'en' => $request->desc_en,
          'ar' => $request->desc_ar,
        ]);
        if ($request->hasFile('image')) {
          $requestAll['image'] = Helper::Upload('vposts', $request->file('image'), 'checkImages');
        }else {
          $requestAll['image'] = "vposts/default.jpg";
        }
        $requestAll['user_id'] = auth()->user()->id;
        $vpos = Vpost::create($requestAll);
      // dd($requestAll['vtaq_id']);

        if ($requestAll['vtaq_id'])
        {
          $vpos->vtaqs()->attach($requestAll['vtaq_id']);
        }

        session()->flash('success', trans('main.added-message'));
        return redirect()->route('vposts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vpos = Vpost::where('id', $id)->with('vcategory')->first();
        $vpos['title_en'] = json_decode($vpos->title)->en;
        $vpos['title_ar'] = json_decode($vpos->title)->ar;
        $vpos['desc_en']  = json_decode($vpos->desc)->en;
        $vpos['desc_ar']  = json_decode($vpos->desc)->ar;
        return view("{$this->viewPath}.show", [
            'title' => trans('main.show') . ' ' . trans('main.post') . ' : ' . $vpos->title,
            'show' => $vpos,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // With relationship
        $vpos = Vpost::where('id', $id)->with('vcategory', 'user', 'vtaqs')->first();
        $vcat = Vcategory::all();
        $vtaq = Vtaq::all();
        $vpos['title_en'] = json_decode($vpos->title)->en;
        $vpos['title_ar'] = json_decode($vpos->title)->ar;
        $vpos['desc_en'] = json_decode($vpos->desc)->en;
        $vpos['desc_ar'] = json_decode($vpos->desc)->ar;
        return view("{$this->viewPath}.edit", [
            'title' => trans('main.edit') . ' ' . trans('main.post') . ' : ' . $vpos->title,
            'edit' => $vpos,
            'vcat' => $vcat,
            'vtaq' => $vtaq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VpostsRequest $request, $id)
    {
        $vpos = Vpost::find($id);
        if (!$vpos) {
          return back();
        }
        $vpos->title = json_encode([
          'en' => $request->title_en,
          'ar' => $request->title_ar,
        ]);
        $vpos->desc = json_encode([
          'en' => $request->desc_en,
          'ar' => $request->desc_ar,
        ]);
        $vpos->content  = $request->content;
        $vpos->vcat_id  = $request->vcat_id;
        $vpos->keyword   = $request->keyword;
        $vpos->status = $request->status;
        $vpos->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $vpos->image = Helper::UploadUpdate($vpos->image ?? "", 'vposts', $request->file('image'), 'checkImages');
        }

        $vpos->save();
       if ($request->vtaq_id) {
        $vpos->vtaqs()->sync($request->vtaq_id);
         }
        session()->flash('success', trans('main.updated'));
        return redirect()->route('vposts.show', [$vpos->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  bool  $redirect
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $redirect = true)
    {
        $vpos = Vpost::findOrFail($id);
        if (file_exists(public_path('uploads/' . $vpos->image))) {
            @unlink(public_path('uploads/' . $vpos->image));
        }
        $vpos->delete();

        if ($redirect) {
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('vposts.index');
        }
    }


    /**
     * Remove the multible resource from storage.
     *
     * @param  array  $data
     * @return \Illuminate\Http\Response
     */
    public function multi_delete(Request $request)
    {
        if (count($request->selected_data)) {
            foreach ($request->selected_data as $id) {
                $this->destroy($id, false);
            }
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('vposts.index');
        }
    }
}
