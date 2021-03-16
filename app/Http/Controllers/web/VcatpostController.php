<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pcategory;
use App\Models\Vcategory;
use App\Models\Vpost;
use App\Models\Setting;


class VcatpostController extends Controller
{
    public function show($id)
    {
      $pcats                 = Pcategory::select('id', 'title', 'image')->get();
      $vcats                 = Vcategory::select('id', 'title', 'image')->get();
      $vcatfirst             = Vcategory::where('id', $id)->select('id', 'title', 'image')->first();
      $vcatposts             = Vcategory::where('id', $id)->with('vposts')->first();
      $setting               = Setting::findOrFail(1);

      return view('frontend.vcatposts.show', [
        'pcats'=>$pcats,
        'vcats'=>$vcats,
        'vcatfirst'=>$vcatfirst,
        'vcatposts'=>$vcatposts,
        'setting'=>$setting
      ]);
    }
}
