@extends('frontend.layout.app')

@section('content')


<!-- Start Banner -->
<div class="banner-outer">
  <div class="banner-image" style="background-image: url('{{ asset("uploads/{$setting->bannerimage}") }} ');">
    <div class="slide1">
      <div class="container">
        <div class="content animated fadeInLeft">
          <h1 class="animated fadeInLeft">
            @if(GetLanguage() == 'en')
            {{json_decode($setting->bannerredtxt1)->en}}
            @else
            {{json_decode($setting->bannerredtxt1)->ar}}
            @endif
          </h1>
          <p class="animated fadeInLeft">
            @if(GetLanguage() == 'en')
            {{json_decode($setting->bannerbluetxt)->en}}
            @else
            {{json_decode($setting->bannerbluetxt)->ar}}
            @endif
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Banner -->

<!-- Start About Section -->
<section class="about">
  <div class="container">
    <ul class="row our-links">
      <li class="col-12 col-md-4 clearfix equal-hight">
        <div class="box">
          <div class="icon"><img src="frontend/images/request-lawyer.png" class="img-responsive" alt="Request A Lawyer"></div>
          <div class="detail">
            <h3>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->firsttitletxt)->en}}
              @else
              {{json_decode($setting->firsttitletxt)->ar}}
              @endif
            </h3>
            <p>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->firstdesctxt)->en}}
              @else
              {{json_decode($setting->firstdesctxt)->ar}}
              @endif
            </p>
          </div>
        </div>
      </li>
      <li class="col-12 col-md-4 clearfix equal-hight">
        <div class="box">
          <div class="icon"><img src="frontend/images/case-investigation.png" class="img-responsive" alt="Case Investigation"></div>
          <div class="detail">
            <h3>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->secondtitletxt)->en}}
              @else
              {{json_decode($setting->secondtitletxt)->ar}}
              @endif
            </h3>
            <p>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->seconddesctxt)->en}}
              @else
              {{json_decode($setting->seconddesctxt)->ar}}
              @endif
            </p>
          </div>
        </div>
      </li>
      <li class="col-12 col-md-4 clearfix equal-hight">
        <div class="box">
          <div class="icon"><img src="frontend/images/search-directory.png" class="img-responsive" alt="Search Directory"></div>
          <div class="detail">
            <h3>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->thirdtitletxt)->en}}
              @else
              {{json_decode($setting->thirdtitletxt)->ar}}
              @endif
            </h3>
            <p>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->thirddesctxt)->en}}
              @else
              {{json_decode($setting->thirddesctxt)->ar}}
              @endif
             </p>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="container">
    <div class="row heading heading-icon">
      <h2>
        @if(GetLanguage() == 'en')
        {{json_decode($setting->testcentertxt2)->en}}
        @else
        {{json_decode($setting->testcentertxt2)->ar}}
        @endif
      </h2>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 left-block">
        <i>
          @if(GetLanguage() == 'en')
          {{json_decode($setting->aboutbluetxt)->en}}
          @else
          {{json_decode($setting->aboutbluetxt)->ar}}
          @endif
        </i>
        <p>
          @if(GetLanguage() == 'en')
          {{json_decode($setting->aboutblacktxt1)->en}}
          @else
          {{json_decode($setting->aboutblacktxt1)->ar}}
          @endif
        </p>
        <p>
          @if(GetLanguage() == 'en')
          {{json_decode($setting->aboutblacktxt2)->en}}
          @else
          {{json_decode($setting->aboutblacktxt2)->ar}}
          @endif
        </p>
        <a href="/about" class="know-more">{{trans('main.know_more')}} </a>
      </div>
      <div class="col-12 col-md-6 right-block">
        <img src="{{ asset('uploads/'.$setting->banneraboutimage) }}" class="img-responsive" alt="">
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->

<!-- Start We Are here Section -->
<section class="we-are-here" style="background-image: url('{{ asset("uploads/{$setting->banneraboutimage}") }} ');">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7 left-block">
        <div class="details">
          <h2>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->contactheadertxt)->en}}
            @else
            {{json_decode($setting->contactheadertxt)->ar}}
            @endif
          </h2>
          <h4>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->contactparatxt)->en}}
            @else
            {{json_decode($setting->contactparatxt)->ar}}
            @endif
          </h4>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->contactdesctxt)->en}}
            @else
            {{json_decode($setting->contactdesctxt)->ar}}
            @endif
          </p>
          <a class="free-btn" href="/contact">{{trans('main.consultation')}}</a>
        </div>
      </div>
      <div class="col-12 col-md-5 right-block cases-box">
        <div class="col-12 col-md-6">
          <div class="box">
            <div class="icon">
              <img src="frontend/images/sucess-cases.png" alt="" />
            </div>
            <span class="counter">1800</span>
            <div class="title">
              @if(GetLanguage() == 'en')
              {{json_decode($setting->contactsqaure1txt)->en}}
              @else
              {{json_decode($setting->contactsqaure1txt)->ar}}
              @endif
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="box">
            <div class="icon">
              <img src="frontend/images/clients-icon.png" alt="" />
            </div>
            <span class="counter">2000</span>
            <div class="title">
              @if(GetLanguage() == 'en')
              {{json_decode($setting->contactsqauretxt2)->en}}
              @else
              {{json_decode($setting->contactsqauretxt2)->ar}}
              @endif
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="box">
            <div class="icon">
              <img src="frontend/images/awards-icon.png" alt="" />
            </div>
            <span class="counter">600</span>
            <div class="title">
              @if(GetLanguage() == 'en')
              {{json_decode($setting->contactsqauretxt3)->en}}
              @else
              {{json_decode($setting->contactsqauretxt3)->ar}}
              @endif
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="box">
            <div class="icon">
              <img src="frontend/images/lawyers-icon.png" alt="" />
            </div>
            <span class="counter">69</span>
            <div class="title">
              @if(GetLanguage() == 'en')
              {{json_decode($setting->contactsqauretxt4)->en}}
              @else
              {{json_decode($setting->contactsqauretxt4)->ar}}
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End We Are here Section -->

<!-- Start Practice Area Section -->
<section class="practice-area padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
      <h2>{{trans('main.videos')}}</h2>
    </div>
    @foreach($vcats As $vcat)
    <ul class="row">
      <li class="col-12 col-md-4 equal-hight">
        <div class="inner"> <img src="{{ asset('uploads/'.$vcat->image) }}" alt="Intellectual Property">
          <h3>
            @if(GetLanguage() == 'en')
            {{json_decode($vcat->title)->en}}
            @else
            {{json_decode($vcat->title)->ar}}
            @endif
          </h3>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($vcat->summary)->en}}
            @else
            {{json_decode($vcat->summary)->ar}}
            @endif
          </p>
          <a class="read-more" href="{{ url("/vcatposts/show/{$vcat->id}") }}">{{trans('main.read_more')}}</a>
        </div>
      </li>
    </ul>
    @endforeach
  </div>
</section>
<!-- End Practice Area Section -->

<!-- Start Our Attorneys Section -->
<section class="our-attorneys padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
      <h2>{{trans('main.our_team')}}</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
        <div class="cnt-block equal-hight">
          <figure><img src="{{ asset('uploads/'.$setting->team1img) }}" class="img-responsive" alt=""></figure>
          <h3><a href="#">
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team1name)->en}}
            @else
            {{json_decode($setting->team1name)->ar}}
            @endif
          </a></h3>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team1role)->en}}
            @else
            {{json_decode($setting->team1role)->ar}}
            @endif
          </p>
          <ul class="follow-us clearfix">
            <li><a href="{{$setting->team1fb}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team1tw}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team1in}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
        <div class="cnt-block equal-hight">
          <figure><img src="{{ asset('uploads/'.$setting->team2img) }}" class="img-responsive" alt=""></figure>
          <h3><a href="#">
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team2name)->en}}
            @else
            {{json_decode($setting->team2name)->ar}}
            @endif
          </a></h3>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team2role)->en}}
            @else
            {{json_decode($setting->team2role)->ar}}
            @endif
          </p>
          <ul class="follow-us clearfix">
            <li><a href="{{$setting->team2fb}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team2tw}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team2in}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
        <div class="cnt-block equal-hight">
          <figure><img src="{{ asset('uploads/'.$setting->team3img) }}" class="img-responsive" alt=""></figure>
          <h3><a href="#">
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team3name)->en}}
            @else
            {{json_decode($setting->team3name)->ar}}
            @endif
          </a></h3>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team3role)->en}}
            @else
            {{json_decode($setting->team3role)->ar}}
            @endif
          </p>
          <ul class="follow-us clearfix">
            <li><a href="{{$setting->team3fb}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team3tw}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team3in}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
        <div class="cnt-block equal-hight">
          <figure><img src="{{ asset('uploads/'.$setting->team4img) }}" class="img-responsive" alt=""></figure>
          <h3><a href="#">
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team4name)->en}}
            @else
            {{json_decode($setting->team4name)->ar}}
            @endif
          </a></h3>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->team4role)->en}}
            @else
            {{json_decode($setting->team4role)->ar}}
            @endif
          </p>
          <ul class="follow-us clearfix">
            <li><a href="{{$setting->team4fb}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team4tw}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="{{$setting->team4in}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</section>
<!-- End Our Attorneys Section -->

<!-- Start Testimonial -->
<section class="testimonial padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
      <h2>{{trans('main.client_testimonial')}}</h2>
    </div>
    <div class="wrapper">
      <ul class="testimonial-slide">
        <li>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->clientdesc1)->en}}
            @else
            {{json_decode($setting->clientdesc1)->ar}}
            @endif
          </p>
          <p><span>-
            @if(GetLanguage() == 'en')
            {{json_decode($setting->client1)->en}}
            @else
            {{json_decode($setting->client1)->ar}}
            @endif
          </span></p> </li>
          <li>
            <p>
              @if(GetLanguage() == 'en')
              {{json_decode($setting->clientdesc2)->en}}
              @else
              {{json_decode($setting->clientdesc2)->ar}}
              @endif
              .</p>
            <p><span>-
              @if(GetLanguage() == 'en')
              {{json_decode($setting->client2)->en}}
              @else
              {{json_decode($setting->client2)->ar}}
              @endif
            </span></p> </li>
            <li>
              <p>
                @if(GetLanguage() == 'en')
                {{json_decode($setting->clientdesc3)->en}}
                @else
                {{json_decode($setting->clientdesc3)->ar}}
                @endif
                .</p>
              <p><span>-
                @if(GetLanguage() == 'en')
                {{json_decode($setting->client3)->en}}
                @else
                {{json_decode($setting->client3)->ar}}
                @endif
              </span></p> </li>
              <li>
                <p>
                  @if(GetLanguage() == 'en')
                  {{json_decode($setting->clientdesc4)->en}}
                  @else
                  {{json_decode($setting->clientdesc4)->ar}}
                  @endif
                  .</p>
                <p><span>-
                  @if(GetLanguage() == 'en')
                  {{json_decode($setting->client4)->en}}
                  @else
                  {{json_decode($setting->client4)->ar}}
                  @endif
                </span></p>
              </li>
            </ul>
            <div id="bx-pager"></div>
          </div>
        </div>
      </section>
      <!-- End Testimonial -->

      <!-- Start logos Section -->
      <section class="logos">
        <div class="container">
          <ul class="owl-carousel clearfix">
            <li><a href="#"><img src="{{ asset('uploads/'.$setting->event1img) }}" class="img-responsive" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('uploads/'.$setting->event2img) }}" class="img-responsive" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('uploads/'.$setting->event3img) }}" class="img-responsive" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('uploads/'.$setting->event4img) }}" class="img-responsive" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('uploads/'.$setting->event5img) }}" class="img-responsive" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('uploads/'.$setting->event6img) }}" class="img-responsive" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('uploads/'.$setting->event7img) }}" class="img-responsive" alt=""></a></li>
          </ul>
        </div>
      </section>
      <!-- End logos Section -->

      <!-- Start New & Events Section -->
      <section class="news-events padding-lg">
        <div class="container">
          <div class="row heading heading-icon">
            <h2>{{trans('main.blogs')}}</h2>
          </div>
          <div class="row">
            <div class="col-12 col-md-8 left-block">
              <div class="news-box">
                <figure>
                  <img src="{{ asset('uploads/'.$OnePost->image) }}" class="img-responsive" alt="">
                </figure>
                <div class="date"><span>{{$OnePost->updated_at->format('d') }}</span>{{$OnePost->updated_at->format('M Y')}}</div>
                <h2>
                  @if(GetLanguage() == 'en')
                  {{json_decode($OnePost->title)->en}}
                  @else
                  {{json_decode($OnePost->title)->ar}}
                  @endif
                 </h2>
                <div class="meta"><i class="fa fa-user" aria-hidden="true"></i>{{trans('main.by')}} {{$OnePost->user->name}}</div>
                <p>
                  @if(GetLanguage() == 'en')
                  {{json_decode($OnePost->desc)->en}}
                  @else
                  {{json_decode($OnePost->desc)->ar}}
                  @endif
                </p>
                <a href="{{ url("/post/show/{$OnePost->id}") }}" class="read-more">{{trans('main.know_more')}}</a>
              </div>
            </div>
            <div class="col-12 col-md-4 right-block">
              <ul class="news-listes">
                @foreach($limitpcats As $pcat)
                <li>
                  <figure>
                    <img src="{{asset('uploads/'.$pcat->image )}}" alt="" />
                  </figure>
                  <div class="news-list-details">
                    <h2>
                      @if(GetLanguage() == 'en')
                      {{json_decode($pcat->title)->en}}
                      @else
                      {{json_decode($pcat->title)->ar}}
                      @endif
                    </h2>
                    <div class="meta"><i class="fa fa-user" aria-hidden="true"></i>{{$pcat->posts->count()}} {{trans('main.posts')}}<span></div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End New & Events Section -->

@endsection
