<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ GetLanguage() }}" dir="{{ GetDirection() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>{{ trans('main.login') }}</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <meta content="Mario Adel" name="author" />

        {{-- <link rel="shortcut icon" href="favicon.ico" /> --}}

        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{asset('backend/base/css/main-'.GetDirection().'.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('backend/assets/pages/css/login.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="{{ url('/login') }}">
                <img style="width:100px" src="{{ asset('frontend/img/core-img/logo.jpg') }}" alt="" />
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            @if ($errors->count())
                <div class="alert alert-danger">
                    <button class="close" data-close="alert"></button>
                    <span> {{ trans('main.login_error') }} </span>
                </div>
            @endif
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ url('/login') }}" method="post">
                {{ csrf_field() }}
                <h3 style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }}  " class="form-title font-green">{{ trans('main.login') }}</h3>
                @if (GetLanguage() == 'en')
                    <a style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }} ; position: absolute;  {{ GetLanguage() != 'en' ? 'left' : 'right' }} : 30px; top: {{ $errors->count() ? '108px' : '37px' }}; text-decoration: none" href="{{ url('/lang/ar') }}">
                        {{ ' عربي ' }} <i class="fa fa-globe"></i>
                    </a>
                @else
                    <a style="float:  {{ GetLanguage() == 'en' ? 'left' : 'right' }} ; position: absolute;  {{ GetLanguage() != 'en' ? 'left' : 'right' }} : 30px; top: {{ $errors->count() ? '108px' : '37px' }}; text-decoration: none" href="{{ url('/lang/en') }}">
                        {{ ' English ' }} <i class="fa fa-globe"></i>
                    </a>
                @endif
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">{{ trans('main.email') }}</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="email" placeholder="{{ trans('main.email') }}" name="email" required />
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">{{ trans('main.password') }}</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" placeholder="{{ trans('main.password') }}" name="password" />
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">{{ trans('main.login') }}</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />{{ trans('main.remember') }}
                        <span></span>
                    </label>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <div class="copyright">
            <a target="_blank" href="https://www.facebook.com/megomalamego">
                @@Mario Adel
            </a>
         </div>
         <!--[if lt IE 9]>
         <script src="{{asset('backend/assets/global/plugins/respond.min.js')}}"></script>
         <script src="{{asset('backend/assets/global/plugins/excanvas.min.js')}}"></script>
         <script src="{{asset('backend/assets/global/plugins/ie8.fix.min.js')}}"></script>
         <![endif]-->

         <script src="{{asset('backend/base/js/main.min.js')}}" type="text/javascript"></script>

         <script src="{{asset('backend/base/js/sweetalert.min.js')}}" type="text/javascript"></script>

         @include('backend.theme.includes.messages')
     </body>
 </html>
