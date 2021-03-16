<!-- Start Footer -->
<footer class="footer">

  <!-- Start Footer Bottom -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="contact-us">
            <h3>CONTACT US</h3>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->street)->en}}
              @else
              {{json_decode($setting->street)->ar}}
              @endif
              <br /> {{trans('main.cairo')}}</p>
			<a href="tel:+1-760-284-3410"><i class="fa fa-phone" aria-hidden="true"></i>{{$setting->phone}}</a>
			<a href="mailto:contact@soulhealing.com"><i class="fa fa-envelope" aria-hidden="true"></i>{{$setting->email}}</a>
            <ul class="follow-us clearfix">
                <li><a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="{{$setting->insta}}" target="_blank"><i class="fa fa-insta" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="open-time">
            <h3>{{trans('main.opentime')}}</h3>
            <p><strong>{{trans('main.opentime')}}:</strong><br/>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->opendays)->en}}
              @else
              {{json_decode($setting->opendays)->ar}}
              @endif
			<p><strong>{{trans('main.vacation')}}:</strong><br/>
        @if(GetLanguage() == 'en')
        {{json_decode($setting->vacation1)->en}}
        @else
        {{json_decode($setting->vacation1)->ar}}
        @endif
        <br/>
        @if(GetLanguage() == 'en')
        {{json_decode($setting->vacation2)->en}}
        @else
        {{json_decode($setting->vacation2)->ar}}
        @endif
      </p>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="practice-area">
            <h3>{{trans('main.qlinks')}}</h3>
            <ul class="clearfix">
				<li><a href="/about"><i class="fa fa-arrow-right" aria-hidden="true"></i> {{ trans('main.about') }}</a></li>
				<li><a href="/contact"><i class="fa fa-arrow-right" aria-hidden="true"></i> {{ trans('main.contact') }}</a></li>
				<li><a href="/posts/index"><i class="fa fa-arrow-right" aria-hidden="true"></i> {{ trans('main.blog') }}</a></li>
				<li><a href="/vposts/index"><i class="fa fa-arrow-right" aria-hidden="true"></i> {{ trans('main.videos') }}</a></li>
				<li><a href="#" onclick='alert("إنتظروا الإصدار القادم بنعمة ربنا")'><i class="fa fa-arrow-right" aria-hidden="true"></i> {{ trans('main.terms') }}</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <h6 lass="practice-area">{{ trans('main.subscribe') }}</h6>
            <form>
                <div class="form-group relative">
                    <input type="text" class="form-control input-border txt-center" id="name" aria-describedby="name" placeholder="{{ trans('main.ur_name') }}"> <i class="far fa-user transform-v-center"></i>
                </div>
                <div class="form-group relative mt-25 ">
                    <input type="email" class="form-control input-border txt-center" id="email" aria-describedby="email" placeholder="{{ trans('main.ur_email') }}"> <i class="far fa-envelope transform-v-center"></i>
                </div>
                <div class="text-left text-md-right mt-30 footer-center">
                    <button type="submit" class="btn btn-small bg-yellow">{{ trans('main.subscribe_b') }}</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer Bottom -->

  <!-- Copy Rights -->
  <div class="copy-rights-section">
    <div class="container">
      <div class="row">
	     <p>© 2021 <a href="#" onclick='alert("Plz call 01273443918")'>Mario Adel</a> - All rights reserved</p>
	  </div>
	</div>
  </div>
  <!-- End Copy Rights -->
</footer>
<!-- End Footer -->
