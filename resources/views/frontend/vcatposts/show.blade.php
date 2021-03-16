/@extends('frontend.layout.app')

@section('content')

<!-- Start Banner -->
<div class="inner-banner" style="background-image: url('{{ asset("uploads/{$setting->contactpageimg}") }} ');">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <h1><span>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->contactpagetxtblue)->en}}
            @else
            {{json_decode($setting->contactpagetxtblue)->ar}}
            @endif
          </span>
          @if(GetLanguage() == 'en')
          {{json_decode($setting->contactpagetxtred)->en}}
          @else
          {{json_decode($setting->contactpagetxtred)->ar}}
          @endif
        </h1>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($setting->contactpagetxtdesc)->en}}
            @else
            {{json_decode($setting->contactpagetxtdesc)->ar}}
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
      @foreach($vcatposts->vposts As $vpost)
      <li class="col-12 col-md-4 equal-hight">
        <div class="inner"> <img src="{{ asset('uploads/'.$vpost->image) }}" alt="Intellectual Property">
          <h3>
            @if(GetLanguage() == 'en')
            {{json_decode($vpost->title)->en}}
            @else
            {{json_decode($vpost->title)->ar}}
            @endif
          </h3>
          <p>
            @if(GetLanguage() == 'en')
            {{json_decode($vpost->desc)->en}}
            @else
            {{json_decode($vpost->desc)->ar}}
            @endif
          </p>
          <a class="read-more"href="{{ url("/vpost/show/{$vpost->id}") }}">{{trans('main.read_more')}}</a>
        </div>
      </li>
      @endforeach
    </ul>
	
  </div>
</section>
<!-- End Practice Area Section -->

@endsection
