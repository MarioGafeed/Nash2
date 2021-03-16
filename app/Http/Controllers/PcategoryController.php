<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PcategoriesRequest;
use App\DataTables\PcategoriesDataTable;
use App\Models\Pcategory;
use Helper;

class PcategoryController extends Controller
{
    private $viewPath = 'backend.pcategories';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PcategoriesDataTable $dataTable)
    {
        return $dataTable->render("{$this->viewPath}.index", [
            'title' => trans('main.show-all') . ' ' . trans('main.pcategories')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("{$this->viewPath}.create", [
            'title' => trans('main.add') . ' ' . trans('main.pcategories'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PcategoriesRequest $request)
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
        $requestAll['summary'] = json_encode([
          'en' => $request->summary_en,
          'ar' => $request->summary_ar,
        ]);


        if ($request->hasFile('image')) {
          $requestAll['image'] = Helper::Upload('pcategories', $request->file('image'), 'checkImages');
        }else {
          $requestAll['image'] = "pcategories/default.jpg";
        }

        $pcat = Pcategory::create($requestAll);

        session()->flash('success', trans('main.added-message'));
        return redirect()->route('pcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $pcat = Pcategory::where('id', $id)->with('class')->first();
        $pcat = Pcategory::findOrFail($id);
        $pcat['title_en']    = json_decode($pcat->title)->en;
        $pcat['title_ar']    = json_decode($pcat->title)->ar;
        $pcat['desc_en']     = json_decode($pcat->desc)->en;
        $pcat['desc_ar']     = json_decode($pcat->desc)->ar;
        $pcat['summary_en']  = json_decode($pcat->summary)->en;
        $pcat['summary_ar']  = json_decode($pcat->summary)->ar;

        return view("{$this->viewPath}.show", [
            'title' => trans('main.show') . ' ' . trans('main.pcategory') . ' : ' . $pcat->title_en . ' : ' . $pcat->title_ar,
            'show' => $pcat,
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
        $pcat = Pcategory::findOrFail($id);
        $pcat['title_en'] = json_decode($pcat->title)->en;
        $pcat['title_ar'] = json_decode($pcat->title)->ar;
        $pcat['desc_en'] = json_decode($pcat->desc)->en;
        $pcat['desc_ar'] = json_decode($pcat->desc)->ar;
        $pcat['summary_en'] = json_decode($pcat->summary)->en;
        $pcat['summary_ar'] = json_decode($pcat->summary)->ar;
        return view("{$this->viewPath}.edit", [
            'title' => trans('main.edit') . ' ' . trans('main.pcategory') . ' : ' . $pcat->title_en . ' : ' . $pcat->title_ar,
            'edit' => $pcat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PcategoriesRequest $request, $id)
    {
        $pcat = Pcategory::find($id);
        $pcat->title = json_encode([
          'en' => $request->title_en,
          'ar' => $request->title_ar,
        ]);
        $pcat->desc = json_encode([
          'en' => $request->desc_en,
          'ar' => $request->desc_ar,
        ]);
        $pcat->summary = json_encode([
          'en' => $request->summary_en,
          'ar' => $request->summary_ar,
        ]);
        $pcat->keyword = $request->keyword;
        if ($request->hasFile('image')) {
            $pcat->image = Helper::UploadUpdate($pcat->image ?? "", 'pcategories', $request->file('image'), 'checkImages');
        }
        $pcat->save();

        session()->flash('success', trans('main.updated'));
        return redirect()->route('pcategories.show', [$pcat->id]);
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
        $pcat = Pcategory::findOrFail($id);
        if (file_exists(public_path('uploads/' . $pcat->image))) {
            @unlink(public_path('uploads/' . $pcat->image));
        }
        $pcat->delete();

        if ($redirect) {
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('pcategories.index');
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
            return redirect()->route('pcategories.index');
        }
    }
}
