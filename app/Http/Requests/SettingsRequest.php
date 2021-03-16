<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
    /**
     * Determine if the Setting is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $return = [
            'Key'                       => 'NULL',
            'value'                     => 'NULL',
            'logo'                      => 'nullable|mimes:png|dimensions:width=356,height=81',
            'bannerimage'               => 'nullable|mimes:jpg|dimensions:width=1920,height=815',
            'banneraboutimage'          => 'nullable|mimes:jpg|dimensions:width=555,height=493',
            'bannercontactimage'        => 'nullable|mimes:jpg|dimensions:width=1920,height=551',
            'team1img'                  => 'nullable|mimes:jpg|dimensions:width=148,height=148',
            'team2img'                  => 'nullable|mimes:jpg|dimensions:width=148,height=148',
            'team3img'                  => 'nullable|mimes:jpg|dimensions:width=148,height=148',
            'team4img'                  => 'nullable|mimes:jpg|dimensions:width=148,height=148',
            'event1img'                 => 'nullable|mimes:png|dimensions:width=115,height=92',
            'event2img'                 => 'nullable|mimes:png|dimensions:width=115,height=92',
            'event3img'                 => 'nullable|mimes:png|dimensions:width=115,height=92',
            'event4img'                 => 'nullable|mimes:png|dimensions:width=115,height=92',
            'event5img'                 => 'nullable|mimes:png|dimensions:width=115,height=92',
            'event6img'                 => 'nullable|mimes:png|dimensions:width=115,height=92',
            'event7img'                 => 'nullable|mimes:png|dimensions:width=115,height=92',
            'bannerredtxt1'             => 'nullable|string',
            'bannerbluetxt'             => 'nullable|string',
            'firsttitletxt'             => 'nullable|string',
            'firstdesctxt'              => 'nullable|string',
            'secondtitletxt'            => 'nullable|string',
            'seconddesctxt'             => 'nullable|string',
            'thirdtitletxt'             => 'nullable|string',
            'thirddesctxt'              => 'nullable|string',
            'aboutbluetxt'              => 'nullable|string',
            'aboutblacktxt1'            => 'nullable|string',
            'aboutblacktxt2'            => 'nullable|string',
            'testcentertxt2'            => 'nullable|string',
            'contactheadertxt'          => 'nullable|string',
            'contactparatxt'            => 'nullable|string',
            'contactdesctxt'            => 'nullable|string',
            'contactsqaure1txt'         => 'nullable|string',
            'contactsqauretxt2'         => 'nullable|string',
            'contactsqauretxt3'         => 'nullable|string',
            'contactsqauretxt4'         => 'nullable|string',
            'teamspantxt'               => 'nullable|string',
            'team1name'                 => 'nullable|string',
            'team2name'                 => 'nullable|string',
            'team3name'                 => 'nullable|string',
            'team4name'                 => 'nullable|string',
            'team1role'                 => 'nullable|string',
            'team2role'                 => 'nullable|string',
            'team3role'                 => 'nullable|string',
            'team4role'                 => 'nullable|string',
            'team1fb'                   => 'nullable|string',
            'team2fb'                   => 'nullable|string',
            'team3fb'                   => 'nullable|string',
            'team4fb'                   => 'nullable|string',
            'team1tw'                   => 'nullable|string',
            'team2tw'                   => 'nullable|string',
            'team3tw'                   => 'nullable|string',
            'team4tw'                   => 'nullable|string',
            'team1in'                   => 'nullable|string',
            'team2in'                   => 'nullable|string',
            'team3in'                   => 'nullable|string',
            'team4in'                   => 'nullable|string',
            'client1'                   => 'nullable|string',
            'clientdesc1'               => 'nullable|string',
            'client2'                   => 'nullable|string',
            'clientdesc2'               => 'nullable|string',
            'client3'                   => 'nullable|string',
            'clientdesc3'               => 'nullable|string',
            'client4'                   => 'nullable|string',
            'clientdesc4'               => 'nullable|string',
            'street'                    => 'nullable|string',
            'phone'                     => 'nullable|string',
            'contactpageimg'            => 'nullable|mimes:jpg|dimensions:width=1920,height=600',
            'contactpagetxtblue'        => 'nullable|string',
            'contactpagetxtred'         => 'nullable|string',
            'contactpagetxtdesc'        => 'nullable|string',
            'contact2pageimg'           => 'nullable|mimes:jpg|dimensions:width=1920,height=600',
            'contact2pagetxtblue'       => 'nullable|string',
            'contact2pagetxtred'        => 'nullable|string',
            'contact2pagetxtdesc'       => 'nullable|string',
            'blogpageimg'               => 'nullable|mimes:jpg|dimensions:width=1920,height=600',
            'blogpagetxtblue'           => 'nullable|string',
            'blogpagetxtdesc'           => 'nullable|string',            
        ];



        return $return;
    }


    public function attributes()
    {
        return [
            'name'     => trans('main.name'),

        ];
    }
}
