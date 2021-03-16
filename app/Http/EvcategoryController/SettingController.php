<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SettingsRequest;
use App\Models\Setting;
use Spatie\Permission\Models\Role;
use Helper;

class SettingController extends Controller
{
    private $viewPath = 'backend.settings';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view("{$this->viewPath}.show", [
            'title' => trans('main.show') . ' ' . trans('main.settings') . ' : ' . $setting->sitename,
            'show' => $setting,
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
        $setting = Setting::findOrFail($id);
        return view("{$this->viewPath}.edit", [
            'title' => trans('main.edit') . ' ' . trans('main.Settings') . ' : ' . $setting->sitename,
            'edit' => $setting,
            'roles' => Role::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingsRequest $request, $id)
    {
        $setting = Setting::find($id);
        $setting->sitename             = $request->sitename;
        $setting->bannerslidertxt1     = $request->bannerslidertxt1;
        $setting->bannersliderspantxt  = $request->bannersliderspantxt;
        $setting->bannerslidertxt2     = $request->bannerslidertxt2;
        $setting->bannersliderptxt     = $request->bannersliderptxt;
        $setting->testcentertxt        = $request->testcentertxt;
        $setting->testptxt             = $request->testptxt;
        $setting->testyellowtxt        = $request->testyellowtxt;
        $setting->testcentertxt2       = $request->testcentertxt2;
        $setting->audioh4txt           = $request->audioh4txt;
        $setting->audioptxt            = $request->audioptxt;
        $setting->quoteh5txt           = $request->quoteh5txt;
        $setting->quoteh3txt           = $request->quoteh3txt;
        $setting->shootingspantxt      = $request->shootingspantxt;
        $setting->shootingh3txt        = $request->shootingh3txt;
        $setting->bannerslidertxt1     = $request->bannerslidertxt1;
        $setting->shootingptxt         = $request->shootingptxt;
        $setting->teamspantxt          = $request->teamspantxt;
        $setting->team1name            = $request->team1name;
        $setting->team2name            = $request->team2name;
        $setting->team3name            = $request->team3name;
        $setting->team4name            = $request->team4name;
        $setting->team1role            = $request->team1role;
        $setting->team2role            = $request->team2role;
        $setting->team3role            = $request->team3role;
        $setting->team4role            = $request->team4role;
        $setting->team1fb              = $request->team1fb;
        $setting->team2fb              = $request->team2fb;
        $setting->team3fb              = $request->team3fb;
        $setting->team4fb              = $request->team4fb;
        $setting->team1tw              = $request->team1tw;
        $setting->team2tw              = $request->team2tw;
        $setting->team3tw              = $request->team3tw;
        $setting->team4tw              = $request->team4tw;
        $setting->team1in              = $request->team1in;
        $setting->team2in              = $request->team2in;
        $setting->team3in              = $request->team3in;
        $setting->team4in              = $request->team4in;
        $setting->footertxt            = $request->footertxt;
        $setting->facebook             = $request->facebook;
        $setting->twitter              = $request->twitter;
        $setting->youtube              = $request->youtube;
        $setting->insta                = $request->insta;
        $setting->shootingvideo        = $request->shootingvideo;
        $setting->insta                = $request->insta;


        if ($request->hasFile('bannersliderimage')) {
            $setting->bannersliderimage = Helper::UploadUpdate($setting->bannersliderimage ?? "", 'settings', $request->file('bannersliderimage'), 'checkImages');
        }
        if ($request->hasFile('bannertestisliderimage')) {
            $setting->bannertestisliderimage = Helper::UploadUpdate($setting->bannertestisliderimage ?? "", 'settings', $request->file('bannertestisliderimage'), 'checkImages');
        }
        if ($request->hasFile('logosliderimg')) {
            $setting->logosliderimg = Helper::UploadUpdate($setting->logosliderimg ?? "", 'settings', $request->file('logosliderimg'), 'checkImages');
        }
        if ($request->hasFile('audioimg')) {
            $setting->audioimg = Helper::UploadUpdate($setting->audioimg ?? "", 'settings', $request->file('audioimg'), 'checkImages');
        }
        if ($request->hasFile('quoteimg')) {
            $setting->quoteimg = Helper::UploadUpdate($setting->quoteimg ?? "", 'settings', $request->file('quoteimg'), 'checkImages');
        }
        if ($request->hasFile('shootingimg')) {
            $setting->shootingimg = Helper::UploadUpdate($setting->shootingimg ?? "", 'settings', $request->file('shootingimg'), 'checkImages');
        }
        if ($request->hasFile('team1img')) {
            $setting->team1img = Helper::UploadUpdate($setting->team1img ?? "", 'settings', $request->file('team1img'), 'checkImages');
        }
        if ($request->hasFile('team2img')) {
            $setting->team2img = Helper::UploadUpdate($setting->team2img ?? "", 'settings', $request->file('team2img'), 'checkImages');
        }
        if ($request->hasFile('team3img')) {
            $setting->team3img = Helper::UploadUpdate($setting->team3img ?? "", 'settings', $request->file('team3img'), 'checkImages');
        }
        if ($request->hasFile('team4img')) {
            $setting->team4img = Helper::UploadUpdate($setting->team4img ?? "", 'settings', $request->file('team4img'), 'checkImages');
        }
        $setting->save();

        session()->flash('success', trans('main.updated'));
        return redirect()->route('settings.show', [$setting->id]);
    }

}
