<div class="form-body">

  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
      <label class="col-md-2 control-label">{{ trans('main.name') }} <span class="required"></span> </label>
      <div class="col-md-6">
          <input type="text" name="name" value="{{ getData($data, 'name') }}" class="form-control" placeholder="{{ trans('main.name') }}" required>
          @if ($errors->has('name'))
              <span class="help-block">
                  <strong class="help-block">{{ $errors->first('name') }}</strong>
              </span>
          @endif
      </div>
  </div>

    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.subject') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="subject" value="{{ getData($data, 'subject') }}" class="form-control" placeholder="{{ trans('main.subject') }}" required>
            @if ($errors->has('subject'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('subject') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.email') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="email" value="{{ getData($data, 'email') }}" class="form-control" placeholder="{{ trans('main.email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.body') }}</label>
        <div class="col-md-10">
            <textarea name="body" class="form-control" placeholder="{{ trans('main.body') }}">{{ getData($data, 'body') }}</textarea>
            @if ($errors->has('body'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('body') }}</strong>
                </span>
            @endif
        </div>
    </div>


</div>
