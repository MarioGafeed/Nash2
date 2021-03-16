@extends('backend.theme.layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-blue">{{$title}}</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{ route('settings.edit', [$show->id]) }}" data-toggle="tooltip" title="{{ trans('main.edit') }}  {{ trans('main.job') }}"> <i class="fa fa-edit"></i> </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="{{trans('main.full-screen')}}" title="{{trans('main.full-screen')}}"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>{{trans('main.sitename')}} : </strong>
                            {{ $show->sitename }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.logo')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->logo) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.bannerimage')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->bannerimage) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.bannerredtxt1')}} : </strong>
                            {{ $show->bannerredtxt1 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.bannerbluetxt')}} : </strong>
                            {{ $show->bannerbluetxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.firsttitletxt')}} : </strong>
                            {{ $show->firsttitletxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.firstdesctxt')}} : </strong>
                            {{ $show->firstdesctxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.secondtitletxt')}} : </strong>
                            {{ $show->secondtitletxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.seconddesctxt')}} : </strong>
                            {{ $show->seconddesctxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.thirdtitletxt')}} : </strong>
                            {{ $show->thirdtitletxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.thirdtitletxt')}} : </strong>
                            {{ $show->thirdtitletxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.banneraboutimage')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->banneraboutimage) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.aboutbluetxt')}} : </strong>
                            {{ $show->aboutbluetxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.aboutblacktxt1')}} : </strong>
                            {{ $show->aboutblacktxt1 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.aboutblacktxt2')}} : </strong>
                            {{ $show->aboutblacktxt2 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.testcentertxt2')}} : </strong>
                            {{ $show->testcentertxt2 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.bannercontactimage')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->bannercontactimage) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.contactheadertxt')}} : </strong>
                            {{ $show->contactheadertxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.contactparatxt')}} : </strong>
                            {{ $show->contactparatxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.contactdesctxt')}} : </strong>
                            {{ $show->contactdesctxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.contactsqaure1txt')}} : </strong>
                            {{ $show->contactsqaure1txt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.contactsqauretxt2')}} : </strong>
                            {{ $show->contactsqauretxt2 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.contactsqauretxt3')}} : </strong>
                            {{ $show->contactsqauretxt3 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.contactsqauretxt4')}} : </strong>
                            {{ $show->contactsqauretxt4 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.teamspantxt')}} : </strong>
                            {{ $show->teamspantxt }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team1img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->team1img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team2img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->team2img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team3img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->team3img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team4img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->team4img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team1name')}} : </strong>
                            {{ $show->team1name }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team2name')}} : </strong>
                            {{ $show->team2name }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team3name')}} : </strong>
                            {{ $show->team3name }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team4name')}} : </strong>
                            {{ $show->team4name }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team1role')}} : </strong>
                            {{ $show->team1role }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team2role')}} : </strong>
                            {{ $show->team2role }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team3role')}} : </strong>
                            {{ $show->team3role }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team4role')}} : </strong>
                            {{ $show->team4role }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team1fb')}} : </strong>
                            {{ $show->team1fb }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team2fb')}} : </strong>
                            {{ $show->team2fb }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team3fb')}} : </strong>
                            {{ $show->team3fb }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team4fb')}} : </strong>
                            {{ $show->team4fb }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team1tw')}} : </strong>
                            {{ $show->team1tw }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team2tw')}} : </strong>
                            {{ $show->team2tw }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team3tw')}} : </strong>
                            {{ $show->team3tw }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team4tw')}} : </strong>
                            {{ $show->team4tw }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team1in')}} : </strong>
                            {{ $show->team1in }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team2in')}} : </strong>
                            {{ $show->team2in }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team3in')}} : </strong>
                            {{ $show->team3in }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.team4in')}} : </strong>
                            {{ $show->team4in }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.client1')}} : </strong>
                            {{ $show->client1 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.clientdesc1')}} : </strong>
                            {{ $show->clientdesc1 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.client2')}} : </strong>
                            {{ $show->client2 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.clientdesc2')}} : </strong>
                            {{ $show->clientdesc2 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.client3')}} : </strong>
                            {{ $show->client3 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.clientdesc3')}} : </strong>
                            {{ $show->clientdesc3 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.client4')}} : </strong>
                            {{ $show->client4 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.clientdesc4')}} : </strong>
                            {{ $show->clientdesc4 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.event1img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->event1img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.event2img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->event2img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.event3img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->event3img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.event4img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->event4img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.event5img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->event5img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.event6img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->event6img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.event7img')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->event7img) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.street')}} : </strong>
                            {{ $show->street }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.phone')}} : </strong>
                            {{ $show->phone }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.email')}} : </strong>
                            {{ $show->email }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.opendays')}} : </strong>
                            {{ $show->opendays }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.vacation1')}} : </strong>
                            {{ $show->vacation1 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.vacation2')}} : </strong>
                            {{ $show->vacation2 }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.facebook')}} : </strong>
                            {{ $show->facebook }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.twitter')}} : </strong>
                            {{ $show->twitter }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.youtube')}} : </strong>
                            {{ $show->youtube }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.insta')}} : </strong>
                            {{ $show->insta }}
                            <br><hr>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
