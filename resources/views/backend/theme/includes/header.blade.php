<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="{{ aurl('/') }}">
                <h3 class="logo-default" style="margin: 25px 10px 0;color:#fff">
                    {{trans('main.dashboard')}}
                </h3>
                {{-- <img src="{{asset('backend/assets/layouts/layout4/img/logo-light.png')}}" alt="logo"  /> --}}
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"> </li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> {{ auth()->user()->name }} </span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                            <img alt="" class="img-circle" style="width: 43px;" src="{{ShowImage(auth()->user()->image)}}" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                @if (GetLanguage() == 'en')
                                    <a href="{{ aurl('/lang/ar') }}">
                                        {{ ' عربي ' }}
                                    </a>
                                @else
                                    <a href="{{ aurl('/lang/en') }}">
                                        {{ ' English ' }}
                                    </a>
                                @endif
                            </li>
                            <li>
                                <a href="{{ aurl('/logout') }}">
                                    <i class="icon-key"></i> {{ trans('main.logout') }}
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- END USER LOGIN DROPDOWN -->
                </ul>

            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
