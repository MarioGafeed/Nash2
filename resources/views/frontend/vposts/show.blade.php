@extends('frontend.layout.app')

@section('content')


<!-- Start Banner -->

<div class="inner-banner" style="background-image: url('{{ asset("uploads/{$myvpost->image}") }} ');">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <h1><span>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->blogpagetxtblue)->en}}
            @else
            {{json_decode($setting->blogpagetxtblue)->ar}}
            @endif
          </span></h1>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->blogpagetxtdesc)->en}}
            @else
            {{json_decode($setting->blogpagetxtdesc)->ar}}
            @endif
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Banner -->

<!-- Start Blog Detail -->
<div class="container blog-wrapper padding-lg">
  <div class="row">
    <!-- Start Left Column -->
    <div class="col-sm-8 blog-left">
      <ul class="blog-listing detail">
        <li> <img src="{{ asset('uploads/'.$myvpost->image) }}" class="img-responsive" alt="">
          <h2>
            @if(GetLanguage() == 'en')
            {{json_decode($myvpost->title)->en}}
            @else
            {{json_decode($myvpost->title)->ar}}
            @endif
          </h2>
          <ul class="post-detail">
            <li><span class="icon-date-icon ico"></span><span class="bold">{{$myvpost->updated_at->format('d M')}}</span> {{$myvpost->updated_at->format('Y')}}</li>
            <li>{{trans('main.by')}} : <span class="bold">{{$myvpost->user->name}}</span></li>
            <li><span class="label">
              @if(GetLanguage() == 'en')
              {{json_decode($myvpost->vcategory->title)->en}}
              @else
              {{json_decode($myvpost->vcategory->title)->ar}}
              @endif
            </span></li>
          </ul>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($myvpost->desc)->en}}
            @else
            {{json_decode($myvpost->desc)->ar}}
            @endif
          </p>
          <div class="imp-quote">
            <p>
              <div class="container">
                <a href="{{ $myvpost->content  }}" class="laink-arrow btn-lg z-10 popup-video transform-center"> <i class="fas fa-play"></i> <iframe class="responsive-iframe" src="{{$myvpost->content}}"></iframe></a>

             </div>
            </p>
          </div>
          <p>
            {{$myvpost->keyword}}
          </p>
        </li>
      </ul>
    </div>
    <!-- End Left Column -->

    <!-- Start Right Column -->
    <div class="col-sm-4">
      <div class="blog-right">
        <div class="category">
          <h3>{{trans('main.category')}}</h3>
          <ul>
            @foreach($vcats As $vcat)
            <li><a href="#">
              @if(GetLanguage() == 'en')
              {{json_decode($vcat->title)->en}}
              @else
              {{json_decode($vcat->title)->ar}}
              @endif
               <span>{{$vcat->vposts->count()}}</span></a></li>
            @endforeach
          </ul>
        </div>
        <div class="recent-post">
          <h3>{{trans('main.relate_article')}}</h3>
          <ul>
            @foreach($vpostsHasSameTaqs As $vpostHasSameTaq)
            <li class="clearfix"> <a href="#">
              <div class="img-block"><img src="{{ asset('uploads/'.$vpostHasSameTaq->image) }}" class="img-responsive" alt=""></div>
              <div class="detail">
                <h4>
                  @if(GetLanguage() == 'en')
                  {{json_decode($vpostHasSameTaq->title)->en}}
                  @else
                  {{json_decode($vpostHasSameTaq->title)->ar}}
                  @endif
                </h4>
                <p><span class="icon-date-icon ico"></span><span>{{$vpostHasSameTaq->updated_at->format('d M')}}</span> {{$vpostHasSameTaq->updated_at->format('Y')}}</p>
              </div>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="tags">
          <h3>{{trans('main.tags')}}</h3>
          <ul class="tags-list clearfix">
            @foreach($vtaqs As $vatq)
            <li><a href="#">
              {{$vatq->name}}
            </a>
          </li>
          @endforeach
          </ul>
        </div>
      </div>
    </div>
    <!-- End Right Column -->
  </div>
</div>
<!-- End Blog Detail -->

@endsection
