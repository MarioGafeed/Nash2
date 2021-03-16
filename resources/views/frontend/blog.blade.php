@extends('frontend.layout.app')

@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 style="text-align: right;"> اسم الدرس: {{ $data->title }} </h2>
                        <h2 style="text-align: right;"> رقم الدرس: {{ $data->myorder }} </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="{{ asset('frontend/img/core-img/curve-5.png') }}" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

<!-- ***** Blog Details Area Start ***** -->
<section class="blog-details-area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-details-content">
                    <!-- Post Details Text -->
                    <div class="post-details-text">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10" style="text-align: right;">
                                {!! $data->content !!}
                            </div>
                            <div class="col-12 col-lg-10" style="text-align: right;">
                                <h3> اسئلة الدرس </h3>
                                <hr>
                                @if ($data->questions->count())
                                    <form action="{{ url('/sendAnswers') }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="lesson_id" value="{{ $data->id }}">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>{{ trans('main.question') }}</th>
                                                    <th>{{ trans('main.answers') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data->questions as $q)
                                                    <tr>
                                                        <td>{{ $q->title }}</td>
                                                        <td>
                                                            <select class="form-control" name="answers[{{ $q->id }}]">
                                                                <option value=""> اختر الاجابة الصحيحة </option>
                                                                @foreach ($q->answers as $a)
                                                                    <option value="{{ $a->id }}">{{ $a->answer }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-primary btn-block">
                                            ارسال الاجابات
                                        </button>
                                    </form>
                                @else
                                    <div class="alert alert-info">
                                        {{ trans('main.no_questions') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Blog Details Area End ***** -->
@endsection
