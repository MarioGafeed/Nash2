<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }

    public function donate()
    {
      return view('frontend.donate');
    }

    public function changeLang($lang)
    {
        if (in_array($lang, ['ar', 'en'])) {
            session()->put('lang', $lang);
        }

        return redirect()->back();
    }
}
