@extends('frontend.layout.app')

@section('content')

<!-- Start Banner -->
<div class="inner-banner" style="background-image: url('{{ asset("uploads/{$setting->contact2pageimg}") }} ');">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <h1><span>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->contact2pagetxtblue)->en}}
            @else
            {{json_decode($setting->contact2pagetxtblue)->ar}}
            @endif
          </span>
          @if(GetLanguage() == 'en')
          {{json_decode($setting->contact2pagetxtred)->en}}
          @else
          {{json_decode($setting->contact2pagetxtred)->ar}}
          @endif
        </h1>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->contact2pagetxtdesc)->en}}
            @else
            {{json_decode($setting->contact2pagetxtdesc)->ar}}
            @endif
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Banner -->

<!-- Start Contact Us -->
<section class="contact-us padding-lg">
  <div class="container">
    @if(session('success'))
      <div class="col-lg-6 alert alert-success txt-center">
          {{ session('success') }}
      </div>
    @endif
    <div class="row">
	    <div class="col-sm-6 form-wrapper">
		    <h2>{{trans('main.touch')}}</h2>
			<form name="contactform" method="post" action="{{ url('contact/message/send') }}">
        @csrf
			  <div class="row input-row">
				<div class="col-sm-6">
				  <input name="name" type="text" placeholder="{{trans('main.name')}}" required>
          @if ($errors->has('name'))
              <span class="help-block" style="color:red;">
                  <strong class="help-block">{{ $errors->first('name') }}</strong>
              </span>
          @endif
				</div>
				<div class="col-sm-6">
				  <input name="subject" type="text" placeholder="{{trans('main.subject')}}" required>
				</div>
			  </div>
			  <div class="row input-row">
				<div class="col-sm-12">
				  <input name="email" type="text" placeholder="{{trans('main.email')}}" required>
          @if ($errors->has('email'))
              <span class="help-block" style="color:red;">
                  <strong class="help-block">{{ $errors->first('email') }}</strong>
              </span>
          @endif
				</div>
			  </div>
			  <div class="row input-row">
				<div class="col-sm-12">
				  <input name="phone" type="text" placeholder="{{trans('main.phone')}}*" required>
				</div>
			  </div>
			  <div class="row input-row">
				<div class="col-sm-12">
				  <textarea name="body" type="text" placeholder="{{trans('main.body')}}"></textarea>
          @if ($errors->has('body'))
              <span class="help-block txt-center" style="color:red;">
                  <strong class="help-block txt-center">{{ $errors->first('body') }}</strong>
              </span>
          @endif
				</div>
			  </div>
			  <div class="row">
				<div class="col-sm-12">
				  <input type="submit" name="submit" class="btn btn-success btn-send" value="{{trans('main.submit')}}">
				  <div class="msg"></div>
				</div>
			  </div>
			</form>
	    </div>
		<div class="col-sm-6 contact-info">
		   <h2>{{trans('main.contact_info')}}</h2>
		  <p><i class="fa fa-map-marker" aria-hidden="true"></i>
         @if(GetLanguage() == 'en')
         {{json_decode($setting->street)->en}}
         @else
         {{json_decode($setting->street)->ar}}
         @endif
       </p>
		   <p class="number-info"><i class="fa fa-phone" aria-hidden="true"></i> <span class="numbers"><a href="tel:+1-012-7344-3918">{{$setting->phone}}</a><br /> <a href="tel:+1-760-284-3410">{{$setting->phone}}</a></span></p>
		   <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:contact@soulshealing.org">{{$setting->email}}</a></p>
		   <div class="connect-with-us">
		      <h2>{{trans('main.banner_button1')}} : </h2>
			  <ul class="follow-us clearfix">
				<li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="{{$setting->insta}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			 </ul>
		   </div>
		</div>
	 </div>
  </div>
</section>
<!-- end Contact Us -->

<!-- Start Google Map -->
<div class="google-map">
  <div id="map">
    <iframe src="https://snazzymaps.com/embed/21734" width="100%" style="border:none;"></iframe>
  </div>
</div>
<!-- End Google Map -->

@endsection
