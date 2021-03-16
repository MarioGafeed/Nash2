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

<!-- Start Practice Area Section -->
<section class="practice-area padding-lg">
  <div class="container">
    <ul class="row">
      @foreach($catposts->posts As $post)
      <li class="col-12 col-md-4 equal-hight">
        <div class="inner"> <img src="{{ asset('uploads/'.$post->image) }}" alt="Intellectual Property">
          <h3>
            @if(GetLanguage() == 'en')
            {{json_decode($post->title)->en}}
            @else
            {{json_decode($post->title)->ar}}
            @endif
          </h3>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($post->desc)->en}}
            @else
            {{json_decode($post->desc)->ar}}
            @endif
          </p>
          <a class="read-more"href="{{ url("/post/show/{$post->id}") }}">{{trans('main.read_more')}}</a>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</section>
<!-- End Practice Area Section -->

@endsection
