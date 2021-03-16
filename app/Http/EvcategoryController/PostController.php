<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use App\DataTables\PostsDataTable;
use App\Models\Post;
use App\Models\Pcategory;
use App\Models\Ptaq;
use Hash;
use Helper;

class PostController extends Controller
{
    private $viewPath = 'backend.posts';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index(PostsDataTable $dataTable)
    {
        return $dataTable->render("{$this->viewPath}.index", [
            'title' => trans('main.show-all') . ' ' . trans('main.posts')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pcats = Pcategory::all();
        $ptaq  = Ptaq::all();
        return view("{$this->viewPath}.create", [
            'title' => trans('main.add') . ' ' . trans('main.posts'),
            'pcats' => $pcats,
            'ptaq'  => $ptaq,
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
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
        $requestAll['content'] = json_encode([
          'en' => $request->content_en,
          'ar' => $request->content_ar,
        ]);

        if ($request->hasFile('image')) {
          $requestAll['image'] = Helper::Upload('posts', $request->file('image'), 'checkImages');
        }else {
          $requestAll['image'] = "posts/default.jpg";
        }
        $requestAll['user_id'] = auth()->user()->id;
        $pos = Post::create($requestAll);
        if ($requestAll['ptaq_id'])
        {
          $pos->ptaqs()->attach($requestAll['ptaq_id']);
        }
        session()->flash('success', trans('main.added-message'));
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pos = Post::where('id', $id)->with('pcategory')->first();

        $pos['title_en'] = json_decode($pos->title)->en;
        $pos['title_ar'] = json_decode($pos->title)->ar;
        $pos['desc_en'] = json_decode($pos->desc)->en;
        $pos['desc_ar'] = json_decode($pos->desc)->ar;
        $pos['content_en'] = json_decode($pos->content)->en;
        $pos['content_ar'] = json_decode($pos->content)->ar;
        return view("{$this->viewPath}.show", [
            'title' => trans('main.show') . ' ' . trans('main.post') . ' : ' . $pos->title,
            'show' => $pos,
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
        $pos = Post::where('id', $id)->with('pcategory', 'user', 'ptaqs')->first();
        $pcats = Pcategory::all();
        $ptaq = Ptaq::all();
        $pos['title_en'] = json_decode($pos->title)->en;
        $pos['title_ar'] = json_decode($pos->title)->ar;
        $pos['desc_en'] = json_decode($pos->desc)->en;
        $pos['desc_ar'] = json_decode($pos->desc)->ar;
        $pos['content_en'] = json_decode($pos->content)->en;
        $pos['content_ar'] = json_decode($pos->content)->ar;
        return view("{$this->viewPath}.edit", [
            'title' => trans('main.edit') . ' ' . trans('main.post') . ' : ' . $pos->title,
            'edit' => $pos,
            'pcats' => $pcats,
            'ptaq' => $ptaq,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, $id)
    {
        $pos = Post::find($id);
        if (!$pos) {
          return back();
        }
        $pos->title = json_encode([
          'en' => $request->title_en,
          'ar' => $request->title_ar,
        ]);
        $pos->desc = json_encode([
          'en' => $request->desc_en,
          'ar' => $request->desc_ar,
        ]);
        $pos->content = json_encode([
          'en' => $request->content_en,
          'ar' => $request->content_ar,
        ]);
        $pos->pcat_id  = $request->pcat_id;
        $pos->keyword   = $request->keyword;
        $pos->status = $request->status;
        $pos->user_id = auth()->user()->id;

        if ($request->hasFile('image')) {
            $pos->image = Helper::UploadUpdate($pos->image ?? "", 'posts', $request->file('image'), 'checkImages');
        }else {
          $pos->image = $request->image;
        }

        $pos->save();
       if ($request->ptaq_id) {
        $pos->ptaqs()->sync($request->ptaq_id);
         }
        session()->flash('success', trans('main.updated'));
        return redirect()->route('posts.show', [$pos->id]);
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
        $pos = Post::findOrFail($id);
        if (file_exists(public_path('uploads/' . $pos->image))) {
            @unlink(public_path('uploads/' . $pos->image));
        }
        $pos->delete();

        if ($redirect) {
            session()->flash('success', trans('main.deleted-message'));
            return redirect()->route('posts.index');
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
            return redirect()->route('posts.index');
        }
    }
}
