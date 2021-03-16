<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PtaqsRequest;
use App\DataTables\PtaqsDataTable;
use App\Models\Ptaq;
use Helper;

class PtaqController extends Controller
{
    private $viewPath = 'backend.ptaqs';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PtaqsDataTable $dataTable)
    {
        return $dataTable->render("{$this->viewPath}.index", [
            'title' => trans('main.show-all') . ' ' . trans('main.ptaqs')
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
            'title' => trans('main.add') . ' ' . trans('main.ptaqs'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PtaqsRequest $request)
    {
        $requestAll = $request->all();        
        $ptaq = Ptaq::create($requestAll);

        session()->flash('success', trans('main.added-message'));
        return redirect()->route('ptaqs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ptaq = Ptaq::findOrFail($id);

        return view("{$this->viewPath}.show", [
            'title' => trans('main.show') . ' ' . trans('main.ptaq') . ' : ' . $ptaq->name,
            'show' => $ptaq,
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
        $ptaq = Ptaq::findOrFail($id);
        return view("{$this->viewPath}.edit", [
            'title' => trans('main.edit') . ' ' . trans('main.ptaq') . ' : ' . $ptaq->name,
            'edit' => $ptaq
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PtaqsRequest $request, $id)
    {
        $ptaq = Ptaq::find($id);
        $ptaq->name = $request->name;
        $ptaq->save();

        session()->flash('success', trans('main.updated'));
        return redirect()->route('ptaqs.show', [$ptaq->id]);
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
        $ptaq = Ptaq::findOrFail($id);
        $ptaq->delete();

        if ($redirect) {
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('ptaqs.index');
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
            return redirect()->route('ptaqs.index');
        }
    }
}
