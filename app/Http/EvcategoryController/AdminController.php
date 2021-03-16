<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.home.index', [
            'title' => trans('main.dashboard')
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function changeLang($lang)
    {
        if (in_array($lang, ['ar', 'en'])) {
            session()->put('lang', $lang);
        }
        return redirect()->back();
    }
}
