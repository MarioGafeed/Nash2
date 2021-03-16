<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  protected $fillable = [
       'key', 'value', 'sitename','bannerbluetxt', 'firsttitletxt', 'firstdesctxt', 'secondtitletxt',
'seconddesctxt', 'thirdtitletxt', 'thirddesctxt', 'aboutbluetxt', 'aboutblacktxt1', 'aboutblacktxt2',
 'testcentertxt2', 'contactheadertxt', 'contactparatxt', 'contactdesctxt', 'contactsqaure1txt',
 'contactsqauretxt2', 'contactsqauretxt3', 'contactsqauretxt4', 'teamspantxt', 'team1name', 'team2name',
 'team3name', 'team4name', 'team1role', 'team2role', 'team3role', 'team4role', 'team1fb', 'team2fb',
 'team3fb', 'team4fb', 'team1tw', 'team2tw', 'team3tw', 'team4tw', 'team1in', 'team2in', 'team3in',
  'team4in', 'client1', 'clientdesc1', 'client2', 'clientdesc2', 'client3', 'clientdesc3', 'client4',
  'clientdesc4', 'street', 'phone', 'email', 'opendays', 'vacation1', 'vacation2', 'facebook', 'twitter',
  'youtube', 'insta', 'logo', 'bannerimage', 'banneraboutimage', 'bannercontactimage', 'team1img',
  'team2img', 'team3img', 'team4img', 'event1img', 'event2img', 'event3img', 'event4img', 'event5img',
   'event6img', 'event7img', 'contactpageimg', 'contactpagetxtblue', 'contactpagetxtred', 'contactpagetxtdesc',
   'contact2pageimg', 'contact2pagetxtblue', 'contact2pagetxtred', 'contact2pagetxtdesc', 'blogpageimg',
   'blogpagetxtblue', 'blogpagetxtdesc'

  ];
}
