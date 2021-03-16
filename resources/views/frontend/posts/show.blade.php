@extends('frontend.layout.app')

@section('content')


<!-- Start Banner -->
<div class="inner-banner" style="background-image: url('{{ asset("uploads/{$mypost->image}") }} ');">
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
        <li> <img src="{{ asset('uploads/'.$mypost->image) }}" class="img-responsive" alt="">
          <h2>
            @if(GetLanguage() == 'en')
            {{json_decode($mypost->title)->en}}
            @else
            {{json_decode($mypost->title)->ar}}
            @endif
          </h2>
          <ul class="post-detail">
            <li><span class="icon-date-icon ico"></span><span class="bold">{{$mypost->updated_at->format('d M')}}</span> {{$mypost->updated_at->format('Y')}}</li>
            <li>{{trans('main.by')}} : <span class="bold">{{$mypost->user->name}}</span></li>
            <li><span class="label">
              @if(GetLanguage() == 'en')
              {{json_decode($mypost->pcategory->title)->en}}
              @else
              {{json_decode($mypost->pcategory->title)->ar}}
              @endif
            </span></li>
          </ul>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($mypost->desc)->en}}
            @else
            {{json_decode($mypost->desc)->ar}}
            @endif
          </p>
          <div class="imp-quote">
            <p>
              @if(GetLanguage() == 'en')
              {!! json_decode($mypost->content)->en !!}
              @else
              {!! json_decode($mypost->content)->ar !!}
              @endif
            </p>
          </div>
          <p>
            {{$mypost->keyword}}
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
            @foreach($pcats As $pcat)
            <li><a href="#">
              @if(GetLanguage() == 'en')
              {{json_decode($pcat->title)->en}}
              @else
              {{json_decode($pcat->title)->ar}}
              @endif
               <span>{{$pcat->posts->count()}}</span></a></li>
            @endforeach
          </ul>
        </div>
        <div class="recent-post">
          <h3>{{trans('main.relate_article')}}</h3>
          <ul>
            @foreach($postsHasSameTaqs As $postHasSameTaq)
            <li class="clearfix"> <a href="#">
              <div class="img-block"><img src="{{ asset('uploads/'.$postHasSameTaq->image) }}" class="img-responsive" alt=""></div>
              <div class="detail">
                <h4>
                  @if(GetLanguage() == 'en')
                  {{json_decode($postHasSameTaq->title)->en}}
                  @else
                  {{json_decode($postHasSameTaq->title)->ar}}
                  @endif
                </h4>
                <p><span class="icon-date-icon ico"></span><span>{{$postHasSameTaq->updated_at->format('d M')}}</span> {{$postHasSameTaq->updated_at->format('Y')}}</p>
              </div>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="tags">
          <h3>{{trans('main.tags')}}</h3>
          <ul class="tags-list clearfix">
            @foreach($ptaqs As $ptaq)
            <li><a href="#">
              {{$ptaq->name}}
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
