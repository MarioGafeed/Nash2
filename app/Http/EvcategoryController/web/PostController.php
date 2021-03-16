<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vcategory;
use App\Models\Pcategory;
use App\Models\Post;
use App\Models\PTaq;


class PostController extends Controller
{
   public function show($id)
   {
     $vcats               = Vcategory::select('id', 'title', 'image')->get();
     $pcats               = Pcategory::select('id', 'title')->get();
     $mypost              = Post::where('id', $id)->with('pcategory', 'user', 'ptaqs')->first();
     $postsHasSameTaqs    = Post::where('id', '!=', $mypost->id)->whereHas('ptaqs', function ($q) use($mypost){
       return $q->whereIn('ptaqs.id', $mypost->ptaqs->pluck('id')->ToArray());
     })->OrderBy('id', 'DESC')->limit(5)->get();
     // dd($postsHasSameTaqs);
     return view('frontend.posts.show', [
       'vcats'=>$vcats,
       'pcats'=>$pcats,
       'mypost'=>$mypost,
       'postsHasSameTaqs'=>$postsHasSameTaqs
     ]);
   }

   public function index()
   {
     $vcats               = Vcategory::select('id', 'title', 'image')->get();
     $pcats               = Pcategory::select('id', 'title', 'image', 'updated_at')->OrderBy('id', 'DESC')->get();

     // dd($postsHasSameTaqs);
     return view('frontend.posts.index', [
       'vcats'=>$vcats,
       'pcats'=>$pcats,
     ]);
   }
}
