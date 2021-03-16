<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vcategory;
use App\Models\Pcategory;
use App\Models\Post;

class CatpostController extends Controller
{
    public function show($id)
    {
       $vcats               = Vcategory::select('id', 'title', 'image')->get();
       $pcats               = Pcategory::select('id', 'title', 'image')->get();
       $pcatfirst           = Pcategory::where('id', $id)->select('id', 'title', 'image')->first();
       $catposts            = Pcategory::where('id', $id)->with('posts')->first();
       // dd($pcatfirst);
       // dd($catposts->posts);
       return view('frontend.catposts.show', [
         'vcats'=>$vcats,
         'pcats'=>$pcats,
         'pcatfirst'=>$pcatfirst,
         'catposts'=>$catposts
       ]);
    }
}
