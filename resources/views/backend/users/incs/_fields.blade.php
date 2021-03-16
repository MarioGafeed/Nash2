<div class="form-body">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.name') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="text" name="name" value="{{ getData($data, 'name') }}" class="form-control" placeholder="{{ trans('main.name') }}" required>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.email') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="email" name="email" value="{{ getData($data, 'email') }}" class="form-control" placeholder="{{ trans('main.email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.image') }}</label>
        <div class="col-md-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'image')))
                        <img src="{{ ShowImage(getData($data, 'image')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.select_image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="image">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.type') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <select class="form-control" id="type" name="type">
                <option value=""></option>
                <option value="user" {{ getData($data, 'type') == 'user' ? ' selected' : '' }}>{{trans('main.user')}}</option>
                <!-- <option value="admin" {{ getData($data, 'type') == 'admin' ? ' selected' : '' }}>{{trans('main.admin')}}</option> -->
            </select>
            @if ($errors->has('type'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('type') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.password') }}
            @if ($action == 'create')
                <span class="required"></span>
            @endif
        </label>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control" placeholder="{{ trans('main.password') }}" {{ $action == 'create' ? 'required' : '' }}>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.password_confirmation') }}
            @if ($action == 'create')
                <span class="required"></span>
            @endif
        </label>
        <div class="col-md-10">
            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('main.password_confirmation') }}" {{ $action == 'create' ? 'required' : '' }}>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>
<!-- Add by Mario for Phone -->
    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.phone') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="text" name="phone" value="{{ getData($data, 'phone') }}" class="form-control" placeholder="{{ trans('main.phone') }}" required>
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class='form-group hidden' id="roles">
        <label class="col-md-2 control-label">{{ trans('main.assign_rolles') }}</label>
        <div class="col-md-10">
            @foreach ($roles->chunk(4) as $roleCh)
                <div class="row">
                    @foreach ($roleCh as $role)
                        <div class="col-md-3">
                            <span style="margin-right: 3px">
                                {{ Form::checkbox('roles[]',  $role->id) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>
