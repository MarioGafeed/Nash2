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
        $setting['bannerredtxt1_en']  = json_decode($setting->bannerredtxt1)->en;
        $setting['bannerredtxt1_ar']  = json_decode($setting->bannerredtxt1)->ar;
        $setting['bannerbluetxt_en']  = json_decode($setting->bannerbluetxt)->en;
        $setting['bannerbluetxt_ar']  = json_decode($setting->bannerbluetxt)->ar;
        $setting['firsttitletxt_en']  = json_decode($setting->firsttitletxt)->en;
        $setting['firsttitletxt_ar']  = json_decode($setting->firsttitletxt)->ar;
        $setting['firstdesctxt_en']   = json_decode($setting->firstdesctxt)->en;
        $setting['firstdesctxt_ar']   = json_decode($setting->firstdesctxt)->ar;
        $setting['secondtitletxt_en']  = json_decode($setting->secondtitletxt)->en;
        $setting['secondtitletxt_ar']  = json_decode($setting->secondtitletxt)->ar;
        $setting['seconddesctxt_en']  = json_decode($setting->seconddesctxt)->en;
        $setting['seconddesctxt_ar']  = json_decode($setting->seconddesctxt)->ar;
        $setting['thirdtitletxt_en']  = json_decode($setting->thirdtitletxt)->en;
        $setting['thirdtitletxt_ar']  = json_decode($setting->thirdtitletxt)->ar;
        $setting['thirddesctxt_en']  = json_decode($setting->thirddesctxt)->en;
        $setting['thirddesctxt_ar']  = json_decode($setting->thirddesctxt)->ar;
        $setting['aboutbluetxt_en']   = json_decode($setting->aboutbluetxt)->en;
        $setting['aboutbluetxt_ar']   = json_decode($setting->aboutbluetxt)->ar;
        $setting['aboutblacktxt1_en'] = json_decode($setting->aboutblacktxt1)->en;
        $setting['aboutblacktxt1_ar'] = json_decode($setting->aboutblacktxt1)->ar;
        $setting['aboutblacktxt2_en'] = json_decode($setting->aboutblacktxt2)->en;
        $setting['aboutblacktxt2_ar'] = json_decode($setting->aboutblacktxt2)->ar;
        $setting['testcentertxt2_en'] = json_decode($setting->testcentertxt2)->en;
        $setting['testcentertxt2_ar'] = json_decode($setting->testcentertxt2)->ar;
        $setting['contactheadertxt_en'] = json_decode($setting->contactheadertxt)->en;
        $setting['contactheadertxt_ar'] = json_decode($setting->contactheadertxt)->ar;
        $setting['contactparatxt_en'] = json_decode($setting->contactparatxt)->en;
        $setting['contactparatxt_ar'] = json_decode($setting->contactparatxt)->ar;
        $setting['contactdesctxt_en'] = json_decode($setting->contactdesctxt)->en;
        $setting['contactdesctxt_ar'] = json_decode($setting->contactdesctxt)->ar;
        $setting['contactsqaure1txt_en'] = json_decode($setting->contactsqaure1txt)->en;
        $setting['contactsqaure1txt_ar'] = json_decode($setting->contactsqaure1txt)->ar;
        $setting['contactsqauretxt2_en'] = json_decode($setting->contactsqauretxt2)->en;
        $setting['contactsqauretxt2_ar'] = json_decode($setting->contactsqauretxt2)->ar;
        $setting['contactsqauretxt3_en'] = json_decode($setting->contactsqauretxt3)->en;
        $setting['contactsqauretxt3_ar'] = json_decode($setting->contactsqauretxt3)->ar;
        $setting['contactsqauretxt4_en'] = json_decode($setting->contactsqauretxt4)->en;
        $setting['contactsqauretxt4_ar'] = json_decode($setting->contactsqauretxt4)->ar;
        $setting['teamspantxt_en']       = json_decode($setting->teamspantxt)->en;
        $setting['teamspantxt_ar']       = json_decode($setting->teamspantxt)->ar;
        $setting['team1name_en']         = json_decode($setting->team1name)->en;
        $setting['team1name_ar']         = json_decode($setting->team1name)->ar;
        $setting['team2name_en']         = json_decode($setting->team2name)->en;
        $setting['team2name_ar']         = json_decode($setting->team2name)->ar;
        $setting['team3name_en']         = json_decode($setting->team3name)->en;
        $setting['team3name_ar']         = json_decode($setting->team3name)->ar;
        $setting['team4name_en']         = json_decode($setting->team4name)->en;
        $setting['team4name_ar']         = json_decode($setting->team4name)->ar;
        $setting['team1role_en']         = json_decode($setting->team1role)->en;
        $setting['team1role_ar']         = json_decode($setting->team1role)->ar;
        $setting['team2role_en']         = json_decode($setting->team2role)->en;
        $setting['team2role_ar']         = json_decode($setting->team2role)->ar;
        $setting['team3role_en']         = json_decode($setting->team3role)->en;
        $setting['team3role_ar']         = json_decode($setting->team3role)->ar;
        $setting['team4role_en']         = json_decode($setting->team4role)->en;
        $setting['team4role_ar']         = json_decode($setting->team4role)->ar;
        $setting['client1_en']           = json_decode($setting->client1)->en;
        $setting['client1_ar']           = json_decode($setting->client1)->ar;
        $setting['clientdesc1_en']       = json_decode($setting->clientdesc1)->en;
        $setting['clientdesc1_ar']       = json_decode($setting->clientdesc1)->ar;
        $setting['client2_en']           = json_decode($setting->client2)->en;
        $setting['client2_ar']           = json_decode($setting->client2)->ar;
        $setting['clientdesc2_en']       = json_decode($setting->clientdesc2)->en;
        $setting['clientdesc2_ar']       = json_decode($setting->clientdesc2)->ar;
        $setting['client3_en']           = json_decode($setting->client3)->en;
        $setting['client3_ar']           = json_decode($setting->client3)->ar;
        $setting['clientdesc3_en']       = json_decode($setting->clientdesc3)->en;
        $setting['clientdesc3_ar']       = json_decode($setting->clientdesc3)->ar;
        $setting['client4_en']           = json_decode($setting->client4)->en;
        $setting['client4_ar']           = json_decode($setting->client4)->ar;
        $setting['clientdesc4_en']       = json_decode($setting->clientdesc4)->en;
        $setting['clientdesc4_ar']       = json_decode($setting->clientdesc4)->ar;
        $setting['street_en']            = json_decode($setting->street)->en;
        $setting['street_ar']            = json_decode($setting->street)->ar;
        $setting['opendays_en']          = json_decode($setting->opendays)->en;
        $setting['opendays_ar']          = json_decode($setting->opendays)->ar;
        $setting['vacation1_en']         = json_decode($setting->vacation1)->en;
        $setting['vacation1_ar']         = json_decode($setting->vacation1)->ar;
        $setting['vacation2_en']         = json_decode($setting->vacation2)->en;
        $setting['vacation2_ar']         = json_decode($setting->vacation2)->ar;
        $setting['contactpagetxtblue_en']= json_decode($setting->contactpagetxtblue)->en;
        $setting['contactpagetxtblue_ar']= json_decode($setting->contactpagetxtblue)->ar;
        $setting['contactpagetxtred_en'] = json_decode($setting->contactpagetxtred)->en;
        $setting['contactpagetxtred_ar'] = json_decode($setting->contactpagetxtred)->ar;
        $setting['contactpagetxtdesc_en']= json_decode($setting->contactpagetxtdesc)->en;
        $setting['contactpagetxtdesc_ar']= json_decode($setting->contactpagetxtdesc)->ar;

        $setting['contact2pagetxtblue_en']= json_decode($setting->contact2pagetxtblue)->en;
        $setting['contact2pagetxtblue_ar']= json_decode($setting->contact2pagetxtblue)->ar;
        $setting['contact2pagetxtred_en'] = json_decode($setting->contact2pagetxtred)->en;
        $setting['contact2pagetxtred_ar'] = json_decode($setting->contact2pagetxtred)->ar;
        $setting['contact2pagetxtdesc_en']= json_decode($setting->contact2pagetxtdesc)->en;
        $setting['contact2pagetxtdesc_ar']= json_decode($setting->contact2pagetxtdesc)->ar;

        $setting['blogpagetxtblue_en']= json_decode($setting->blogpagetxtblue)->en;
        $setting['blogpagetxtblue_ar']= json_decode($setting->blogpagetxtblue)->ar;
        $setting['blogpagetxtdesc_en']= json_decode($setting->blogpagetxtdesc)->en;
        $setting['blogpagetxtdesc_ar']= json_decode($setting->blogpagetxtdesc)->ar;
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
        $setting->bannerredtxt1 = json_encode([
          'en' => $request->bannerredtxt1_en,
          'ar' => $request->bannerredtxt1_ar,
        ]);
        $setting->bannerbluetxt = json_encode([
          'en' => $request->bannerbluetxt_en,
          'ar' => $request->bannerbluetxt_ar,
        ]);
        $setting->firsttitletxt = json_encode([
          'en' => $request->firsttitletxt_en,
          'ar' => $request->firsttitletxt_ar,
        ]);
        $setting->firstdesctxt = json_encode([
          'en' => $request->firstdesctxt_en,
          'ar' => $request->firstdesctxt_ar,
        ]);
        $setting->secondtitletxt = json_encode([
          'en' => $request->secondtitletxt_en,
          'ar' => $request->secondtitletxt_ar,
        ]);
        $setting->seconddesctxt = json_encode([
          'en' => $request->seconddesctxt_en,
          'ar' => $request->seconddesctxt_ar,
        ]);
        $setting->thirdtitletxt = json_encode([
          'en' => $request->thirdtitletxt_en,
          'ar' => $request->thirdtitletxt_ar,
        ]);
        $setting->thirddesctxt = json_encode([
          'en' => $request->thirddesctxt_en,
          'ar' => $request->thirddesctxt_ar,
        ]);
        $setting->aboutbluetxt = json_encode([
          'en' => $request->aboutbluetxt_en,
          'ar' => $request->aboutbluetxt_ar,
        ]);
        $setting->aboutblacktxt1 = json_encode([
          'en' => $request->aboutblacktxt1_en,
          'ar' => $request->aboutblacktxt1_ar,
        ]);
        $setting->aboutblacktxt2 = json_encode([
          'en' => $request->aboutblacktxt2_en,
          'ar' => $request->aboutblacktxt2_ar,
        ]);
        $setting->testcentertxt2 = json_encode([
          'en' => $request->testcentertxt2_en,
          'ar' => $request->testcentertxt2_ar,
        ]);
        $setting->contactheadertxt = json_encode([
          'en' => $request->contactheadertxt_en,
          'ar' => $request->contactheadertxt_ar,
        ]);
        $setting->contactparatxt = json_encode([
          'en' => $request->contactparatxt_en,
          'ar' => $request->contactparatxt_ar,
        ]);
        $setting->contactdesctxt = json_encode([
          'en' => $request->contactdesctxt_en,
          'ar' => $request->contactdesctxt_ar,
        ]);
        $setting->contactsqaure1txt = json_encode([
          'en' => $request->contactsqaure1txt_en,
          'ar' => $request->contactsqaure1txt_ar,
        ]);
        $setting->contactsqauretxt2 = json_encode([
          'en' => $request->contactsqauretxt2_en,
          'ar' => $request->contactsqauretxt2_ar,
        ]);
        $setting->contactsqauretxt3 = json_encode([
          'en' => $request->contactsqauretxt3_en,
          'ar' => $request->contactsqauretxt3_ar,
        ]);
        $setting->contactsqauretxt4 = json_encode([
          'en' => $request->contactsqauretxt4_en,
          'ar' => $request->contactsqauretxt4_ar,
        ]);
        $setting->teamspantxt = json_encode([
          'en' => $request->teamspantxt_en,
          'ar' => $request->teamspantxt_ar,
        ]);
        $setting->team1name = json_encode([
          'en' => $request->team1name_en,
          'ar' => $request->team1name_ar,
        ]);
        $setting->team2name = json_encode([
          'en' => $request->team2name_en,
          'ar' => $request->team2name_ar,
        ]);
        $setting->team3name = json_encode([
          'en' => $request->team3name_en,
          'ar' => $request->team3name_ar,
        ]);
        $setting->team4name = json_encode([
          'en' => $request->team4name_en,
          'ar' => $request->team4name_ar,
        ]);
        $setting->team1role = json_encode([
          'en' => $request->team1role_en,
          'ar' => $request->team1role_ar,
        ]);
        $setting->team2role = json_encode([
          'en' => $request->team2role_en,
          'ar' => $request->team2role_ar,
        ]);
        $setting->team3role = json_encode([
          'en' => $request->team3role_en,
          'ar' => $request->team3role_ar,
        ]);
        $setting->team4role = json_encode([
          'en' => $request->team4role_en,
          'ar' => $request->team4role_ar,
        ]);
        $setting->team1fb = $request->team1fb;
        $setting->team2fb = $request->team2fb;
        $setting->team3fb = $request->team3fb;
        $setting->team4fb = $request->team4fb;
        $setting->team1tw = $request->team1tw;
        $setting->team2tw = $request->team2tw;
        $setting->team3tw = $request->team3tw;
        $setting->team4tw = $request->team4tw;
        $setting->team1in = $request->team1in;
        $setting->team2in = $request->team2in;
        $setting->team3in = $request->team3in;
        $setting->team4in = $request->team4in;
        $setting->client1 = json_encode([
          'en' => $request->client1_en,
          'ar' => $request->client1_ar,
        ]);
        $setting->clientdesc1 = json_encode([
          'en' => $request->clientdesc1_en,
          'ar' => $request->clientdesc1_ar,
        ]);
        $setting->team2role = json_encode([
          'en' => $request->team2role_en,
          'ar' => $request->team2role_ar,
        ]);
        $setting->client2 = json_encode([
          'en' => $request->client2_en,
          'ar' => $request->client2_ar,
        ]);
        $setting->clientdesc2 = json_encode([
          'en' => $request->clientdesc2_en,
          'ar' => $request->clientdesc2_ar,
        ]);
        $setting->client3 = json_encode([
          'en' => $request->client3_en,
          'ar' => $request->client3_ar,
        ]);
        $setting->clientdesc3 = json_encode([
          'en' => $request->clientdesc3_en,
          'ar' => $request->clientdesc3_ar,
        ]);
        $setting->client4 = json_encode([
          'en' => $request->client4_en,
          'ar' => $request->client4_ar,
        ]);
        $setting->clientdesc4 = json_encode([
          'en' => $request->clientdesc4_en,
          'ar' => $request->clientdesc4_ar,
        ]);
        $setting->street = json_encode([
          'en' => $request->street_en,
          'ar' => $request->street_ar,
        ]);
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->opendays = json_encode([
          'en' => $request->opendays_en,
          'ar' => $request->opendays_ar,
        ]);
        $setting->vacation1 = json_encode([
          'en' => $request->vacation1_en,
          'ar' => $request->vacation1_ar,
        ]);
        $setting->vacation2 = json_encode([
          'en' => $request->vacation2_en,
          'ar' => $request->vacation2_ar,
        ]);
        $setting->facebook= $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->youtube = $request->youtube;
        $setting->insta   = $request->insta;
        $setting->contactpagetxtblue = json_encode([
          'en' => $request->contactpagetxtblue_en,
          'ar' => $request->contactpagetxtblue_ar,
        ]);
        $setting->contactpagetxtred = json_encode([
          'en' => $request->contactpagetxtred_en,
          'ar' => $request->contactpagetxtred_ar,
        ]);
        $setting->contactpagetxtdesc = json_encode([
          'en' => $request->contactpagetxtdesc_en,
          'ar' => $request->contactpagetxtdesc_ar,
        ]);
        $setting->contact2pagetxtblue = json_encode([
          'en' => $request->contact2pagetxtblue_en,
          'ar' => $request->contact2pagetxtblue_ar,
        ]);
        $setting->contact2pagetxtred = json_encode([
          'en' => $request->contact2pagetxtred_en,
          'ar' => $request->contact2pagetxtred_ar,
        ]);
        $setting->contact2pagetxtdesc = json_encode([
          'en' => $request->contact2pagetxtdesc_en,
          'ar' => $request->contact2pagetxtdesc_ar,
        ]);
        $setting->blogpagetxtblue = json_encode([
          'en' => $request->blogpagetxtblue_en,
          'ar' => $request->blogpagetxtblue_ar,
        ]);
        $setting->blogpagetxtdesc = json_encode([
          'en' => $request->blogpagetxtdesc_en,
          'ar' => $request->blogpagetxtdesc_ar,
        ]);

        if ($request->hasFile('logo')) {
            $setting->logo = Helper::UploadUpdate($setting->logo ?? "", 'settings', $request->file('logo'), 'checkImages');
        }
        if ($request->hasFile('bannerimage')) {
            $setting->bannerimage = Helper::UploadUpdate($setting->bannerimage ?? "", 'settings', $request->file('bannerimage'), 'checkImages');
        }
        if ($request->hasFile('banneraboutimage')) {
            $setting->banneraboutimage = Helper::UploadUpdate($setting->banneraboutimage ?? "", 'settings', $request->file('banneraboutimage'), 'checkImages');
        }
        if ($request->hasFile('bannercontactimage')) {
            $setting->bannercontactimage = Helper::UploadUpdate($setting->bannercontactimage ?? "", 'settings', $request->file('bannercontactimage'), 'checkImages');
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
        if ($request->hasFile('event1img')) {
            $setting->event1img = Helper::UploadUpdate($setting->event1img ?? "", 'settings', $request->file('event1img'), 'checkImages');
        }
        if ($request->hasFile('event2img')) {
            $setting->event2img = Helper::UploadUpdate($setting->event2img ?? "", 'settings', $request->file('event2img'), 'checkImages');
        }
        if ($request->hasFile('event3img')) {
            $setting->event3img = Helper::UploadUpdate($setting->event3img ?? "", 'settings', $request->file('event3img'), 'checkImages');
        }
        if ($request->hasFile('event4img')) {
            $setting->event4img = Helper::UploadUpdate($setting->event4img ?? "", 'settings', $request->file('event4img'), 'checkImages');
        }
        if ($request->hasFile('event5img')) {
            $setting->event5img = Helper::UploadUpdate($setting->event5img ?? "", 'settings', $request->file('event5img'), 'checkImages');
        }
        if ($request->hasFile('event6img')) {
            $setting->event6img = Helper::UploadUpdate($setting->event6img ?? "", 'settings', $request->file('event6img'), 'checkImages');
        }
        if ($request->hasFile('event7img')) {
            $setting->event7img = Helper::UploadUpdate($setting->event7img ?? "", 'settings', $request->file('event7img'), 'checkImages');
        }
        if ($request->hasFile('contactpageimg')) {
            $setting->contactpageimg = Helper::UploadUpdate($setting->contactpageimg ?? "", 'settings', $request->file('contactpageimg'), 'checkImages');
        }
        if ($request->hasFile('contact2pageimg')) {
            $setting->contact2pageimg = Helper::UploadUpdate($setting->contact2pageimg ?? "", 'settings', $request->file('contact2pageimg'), 'checkImages');
        }
        if ($request->hasFile('blogpageimg')) {
            $setting->blogpageimg = Helper::UploadUpdate($setting->blogpageimg ?? "", 'settings', $request->file('blogpageimg'), 'checkImages');
        }
        $setting->save();

        session()->flash('success', trans('main.updated'));
        return redirect()->route('settings.show', [$setting->id]);
    }

}
