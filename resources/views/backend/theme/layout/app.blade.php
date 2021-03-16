<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ GetLanguage() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>{{ $title }}</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta content="width=device-width, initial-scale=1" name="viewport" />

        <meta content="Mario" name="author" />

        {{-- <link rel="shortcut icon" href="favicon.ico" /> --}}

        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link href="{{asset('backend/base/css/main-'.GetDirection().'.min.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('backend/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <style media="screen">
            body { font-family: 'Cairo', sans-serif !important; }

            .required::after { content:"*"; color: #f4516c; }

            .mt-15 { margin-top: 15px !important; }

            .mb-15 { margin-bottom: 15px !important; }

            .mb-0 { margin-bottom: 0 !important; }

            .mr-0 { margin-right: 0 !important; }

            .w-100 { width: 100% !important }

            .datepicker-dropdown {max-width: 200px;}

            select.form-control {height: 38px !important;}

            [v-cloak] { display: none; }

            .mt-checkbox>span:after {
                left: 6px;
                top: 2px;
                width: 5px;
                height: 10px;
                border: solid #888;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }

        </style>
        @yield('styles')

        @php
            $transFiles = cache('transFiles');
        @endphp

        <script>
            window.trans = @json($transFiles);
        </script>
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo" dir="{{ GetDirection() }}">
        <div id="app">
            <!-- BEGIN HEADER -->
            @include('backend.theme.includes.header')
            <!-- END HEADER -->

            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->


            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                @include('backend.theme.includes.sidebar')
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">

                        @if (count($errors->all()) > 0)
                            <div class="note note-danger">
                                <ul>
                                    @foreach ($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @yield('content')
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->

                {{--
                    Will Be Integrated in Future
                    <user-notifications></user-notifications>
                --}}
            </div>
            <!-- END CONTAINER -->

            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> {{ date('Y') }} &copy; Developed By
                    <a target="_blank" href="https://www.facebook.com/megomalamego">
                        @@Mario Adel
                    </a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->

        </div>

        <!--[if lt IE 9]>
        <script src="{{asset('backend/assets/global/plugins/respond.min.js')}}"></script>
        <script src="{{asset('backend/assets/global/plugins/excanvas.min.js')}}"></script>
        <script src="{{asset('backend/assets/global/plugins/ie8.fix.min.js')}}"></script>
        <![endif]-->

        <script src="{{asset('backend/base/js/main.min.js')}}" type="text/javascript"></script>

        <script src="{{asset('backend/base/js/sweetalert.min.js')}}" type="text/javascript"></script>

        <script src="{{ asset('backend/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>


        @include('backend.theme.includes.helperScripts')

        <script src="{{asset('backend/base/js/vue.min.js')}}" type="text/javascript"></script>

        @include('backend.theme.includes.messages')

        @yield('scripts')
    </body>
</html>
