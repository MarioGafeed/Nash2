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
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{route('roles.index')}}" data-toggle="tooltip" title="{{trans('main.show-all')}}   {{trans('main.roles')}}"> <i class="fa fa-list"></i> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form method="post" action="{{ route('roles.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">{{trans('main.role_name')}}</label>
                                <div class="col-md-9">
                                    {!! Form::text('name',old('name'),['class'=>'form-control','placeholder'=>trans('main.role_name')]) !!}
                                </div>
                            </div>

                            <div class='form-group' id="permissions_container">
                                <label class="col-md-3 control-label">{{ trans('main.assign_permissions') }}</label>
                                <div class="col-md-9">
                                    <input type="checkbox" class="select-all" name="permissions[]" onclick="select_all()" value="Admin">
                                     {{ Form::label('All', 'All') }}
                                    <hr>
                                    @foreach ($permissions->chunk(4) as $permissionChunck)
                                        <div class="row">
                                            @foreach ($permissionChunck as $permission)
                                                <div class="col-md-3">
                                                    <input type="checkbox" class="selected_data" name="permissions[]" value="{{ $permission->id }}">
                                                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">{{ trans('main.add') }} {{ trans('main.role') }}</button>
                                    <a href="{{ route('roles.index') }}" class="btn default">{{ trans('main.cancel') }}</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
