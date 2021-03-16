<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VtaqsRequest;
use App\DataTables\VtaqsDataTable;
use App\Models\Vtaq;
use Helper;

class VtaqController extends Controller
{
    private $viewPath = 'backend.vtaqs';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VtaqsDataTable $dataTable)
    {
        return $dataTable->render("{$this->viewPath}.index", [
            'title' => trans('main.show-all') . ' ' . trans('main.vtaqs')
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
            'title' => trans('main.add') . ' ' . trans('main.vtaqs'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VtaqsRequest $request)
    {
        $requestAll = $request->all();
        $vtaq = Vtaq::create($requestAll);

        session()->flash('success', trans('main.added-message'));
        return redirect()->route('vtaqs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vtaq = Vtaq::findOrFail($id);

        return view("{$this->viewPath}.show", [
            'title' => trans('main.show') . ' ' . trans('main.vtaq') . ' : ' . $vtaq->name,
            'show' => $vtaq,
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
        $vtaq = Vtaq::findOrFail($id);
        return view("{$this->viewPath}.edit", [
            'title' => trans('main.edit') . ' ' . trans('main.vtaq') . ' : ' . $vtaq->name,
            'edit' => $vtaq
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VtaqsRequest $request, $id)
    {
        $vtaq = Vtaq::find($id);
        $vtaq->name = $request->name;
        $vtaq->save();

        session()->flash('success', trans('main.updated'));
        return redirect()->route('vtaqs.show', [$vtaq->id]);
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
        $vtaq = Vtaq::findOrFail($id);
        $vtaq->delete();
        if ($redirect) {
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('vtaqs.index');
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
            return redirect()->route('vtaqs.index');
        }
    }
}
