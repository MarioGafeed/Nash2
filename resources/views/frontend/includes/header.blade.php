<!-- Start Header -->
<header>
  <!-- Start Header Middle -->
  <div class="container header-middle">
    <div class="row"> <span class="col-12 col-md-5 logo"><a href="/"><img src="{{ asset('uploads/'.$setting->logo) }}" class="img-responsive" alt=""></a></span>
      <div class="col-12 col-md-7 header-right-bottom">
          <!-- Start Header Right Top -->
           <div class="header-right-top">
               <a class="tel-number" href="tel:+20-012-73443-918"><i class="fa fa-phone" aria-hidden="true"></i> {{ $setting->phone }}</a>
               <a class="free-consultation_btn" href="/" onclick='alert("عذراً إنتظرونا في الإصدارات القادمة")'>{{trans('main.donate')}}</a>
           </div>
          <!-- End Header Right Top -->
          <!-- Start Navigation -->
          <nav class="navbar navbar-expand-md navbar-dark navbar-custom">
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
				  <li class="nav-item active">
					<a class="nav-link" href="/">{{trans('main.home')}}</a>
				  </li>
          <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  {{trans('main.videos')}}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach($vcats as $vcat)
					  <a class="dropdown-item" href="{{ url("/vcatposts/show/{$vcat->id}") }}">
              @if(GetLanguage() == 'en')
                  {{json_decode($vcat->title)->en}}
                  @else
                  {{json_decode($vcat->title)->ar}}
              @endif
            </a>
            @endforeach
					</div>
				  </li>

          <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  {{trans('main.blogs')}}
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           @foreach($pcats as $pcat)
					  <a class="dropdown-item" href="{{ url("/catposts/show/{$pcat->id}") }}">
              @if(GetLanguage() == 'en')
                {{json_decode($pcat->title)->en}}
              @else
                {{json_decode($pcat->title)->ar}}
              @endif
            </a>
            @endforeach
					</div>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="/about">{{trans('main.about')}}</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="/contact">{{trans('main.contact')}}</a>
				  </li>
          @if (GetLanguage() == 'en')
           <li class="nav-link">
              <a href="{{ url('/lang/ar') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAYAAAB24g05AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAAPwAAAD8BR5eJ4AAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAEOSURBVCiRpZHNSsNQEEbPTXOtoc1NmyhFK6ioCLXioq4UdOtz+Ia+g+7cFQURhYClikRtqGkTm8SFbkrSWHC23w9nZgTnnZR/jFYkiiRFJMX9+izBSRbZ6ks0BPcrEZ42np+g7SuOqiFi/xUOXji1Qtq+mo/ACSW2GvJsN9DkElEy4UH2qdeGOCOJV/4qJmhqJgsqpLNzzHLFpqEcTlpnKCugqZl/E/SiAU5osWkZGHINfxSwrgS3I4teNAA57ReZN6Zw+GlTW/XY3t0A4PHO5e2pzrX5DmK6IHtEAV3jAzXew70UuFeC6rhFtzLIhHNXAAhLCRfBDaXyjxwHE2I9Jz2rACDWBTHxrys/DPAN4YpPXyWy3BoAAAAASUVORK5CYII=" title="English" alt="English"> {{ ' عربي ' }} <i class="fa fa-globe"></i>
              </a>
          </li>
          @else
          <li class="nav-link">
              <a href="{{ url('/lang/en') }}"><span class="avia-bullet"></span><span class="avia-menu-text">
                  {{ ' English ' }} <i class="fa fa-globe"></i>
              </a>
          </li>
          @endif
				</ul>
			  </div>
			</nav>
          <!-- End Navigation -->
      </div>
    </div>
  </div>
  <!-- End Header Middle -->
</header>
<!-- End Header -->
