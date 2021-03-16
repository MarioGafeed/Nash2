@extends('backend.theme.layout.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-blue">{{$title}}</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{ route('vposts.create') }}" data-toggle="tooltip" title="{{trans('main.add')}}  {{trans('main.vposts')}}"> <i class="fa fa-plus"></i> </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{ route('vposts.edit', [$show->id]) }}" data-toggle="tooltip" title="{{ trans('main.edit') }}  {{ trans('main.job') }}"> <i class="fa fa-edit"></i> </a>
                        <span data-toggle="tooltip" title="{{ trans('main.delete') }}  {{ trans('main.job') }}">
                            <a data-toggle="modal" data-target="#myModal{{ $show->id }}" class="btn btn-circle btn-icon-only btn-default" href=""> <i class="fa fa-trash"></i> </a>
                        </span>
                        <div class="modal fade" id="myModal{{ $show->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal">x</button>
                                        <h4 class="modal-title">
                                            {{trans('main.delete')}}
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        {{trans('main.ask-delete')}} {{ $show->title }} !
                                    </div>
                                    <div class="modal-footer">
                                        {!! Form::open([ 'method' => 'DELETE', 'route' => ['vposts.destroy', $show->id] ]) !!}
                                        {!! Form::submit(trans('main.approval'), ['class' => 'btn btn-danger']) !!}
                                        <a class="btn btn-default" data-dismiss="modal">
                                            {{ trans('main.cancel') }}
                                        </a>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{ route('vposts.index') }}" data-toggle="tooltip" title="{{trans('main.show-all')}}  {{trans('main.vposts')}}"> <i class="fa fa-list"></i> </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#" data-original-title="{{trans('main.full-screen')}}" title="{{trans('main.full-screen')}}"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <strong>{{trans('main.title')}} : (en)</strong>
                            {{ json_decode($show->title)->en }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.title')}} : (ar)</strong>
                            {{ json_decode($show->title)->ar }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.category')}} : (en)</strong>
                            {{ json_decode($show->vcategory->title)->en }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.category')}} : (ar)</strong>
                            {{ json_decode($show->vcategory->title)->ar }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.user')}} : </strong>
                            {{ $show->user->name }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.description')}} : (en)</strong>
                            {{ json_decode($show->desc)->en }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.description')}} : (ar)</strong>
                            {{ json_decode($show->desc)->ar }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.keyword')}} : </strong>
                            {{ $show->keyword }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.status')}} : </strong>
                            {{ $show->status }}
                            <br><hr>
                        </div>
                        <div class="col-md-6">
                            <strong>{{trans('main.image')}} : </strong>
                            <img style="width: 200px; height: 150px;" src="{{ ShowImage($show->image) }}" alt="">
                            <br><hr>
                        </div>
                        <div class="col-md-12">
                            <strong>{{trans('main.content')}} : </strong>
                            <!-- <iframe width="560" height="315" src="{{ $show->content }}" frameborder="0" allowfullscreen> -->
                            <!-- {<iframe width="450" height="360" src="{{ $show->content  }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>} -->
                            <div class="inner-banner relative bg-cover" );">
                                <a href="{{ $show->content }}" target="_blank" class="laink-arrow btn-lg z-10 popup-video transform-center"> <i class="fas fa-play"></i>
                                </a>
                            </div>
                              <!-- <video  src="{{ $show->content }}" controls> </video> -->
                            <!-- {!! $show->content !!} -->
                            <br><hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
