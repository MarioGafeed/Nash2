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
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{route('permissions.index')}}" data-toggle="tooltip" title="{{trans('main.show-all')}}   {{trans('main.permissions')}}"> <i class="fa fa-list"></i> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    {!! Form::model($permission,['route'=>['permissions.update', $permission->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">{{trans('main.permision_name')}}</label>
                            <div class="col-md-9">
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>trans('main.permision_name')]) !!}
                            </div>
                        </div>

                        <div class='form-group'>
                            <label class="col-md-3 control-label">{{ trans('main.assign_rolles') }}</label>
                            <div class="col-md-9">
                                @foreach ($roles as $role)
                                    {{ Form::checkbox('roles[]',  $role->id ) }}
                                    {{ Form::label($role->name, ucfirst($role->name)) }}
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">{{ trans('main.add') }} {{ trans('main.permission') }}</button>
                                <a href="{{ route('permissions.index') }}" class="btn default">{{ trans('main.cancel') }}</a>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
