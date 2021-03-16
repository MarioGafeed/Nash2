<div class="form-body">
  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
      <label class="col-md-2 control-label">{{ trans('main.title') }}  (en)<span class="required"></span> </label>
      <div class="col-md-6">
          <input type="text" name="title_en" value="{{ getData($data, 'title_en') }}" class="form-control" placeholder="{{ trans('main.title') }}" required>
          @if ($errors->has('title'))
              <span class="help-block">
                  <strong class="help-block">{{ $errors->first('title') }}</strong>
              </span>
          @endif
      </div>
  </div>

  <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
      <label class="col-md-2 control-label">{{ trans('main.title') }} (ar) <span class="required"></span></label>
      <div class="col-md-6">
          <input type="text" name="title_ar" value="{{ getData($data, 'title_ar') }}" class="form-control" placeholder="{{ trans('main.title') }}" >
          @if ($errors->has('title'))
              <span class="help-block">
                  <strong class="help-block">{{ $errors->first('title') }}</strong>
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
                        <span class="fileinput-new"> {{ trans('main.select_image') }} 255*336</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 255*336</span>
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

    <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.summary') }} (en)<span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="summary_en" value="{{ getData($data, 'summary_en') }}" class="form-control" placeholder="{{ trans('main.summary') }}" required>
            @if ($errors->has('summary'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('summary') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('summary') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.summary') }} (ar)<span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="summary_ar" value="{{ getData($data, 'summary_ar') }}" class="form-control" placeholder="{{ trans('main.summary') }}" required>
            @if ($errors->has('summary'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('summary') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('keyword') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.keyword') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="keyword" value="{{ getData($data, 'keyword') }}" class="form-control" placeholder="{{ trans('main.keyword') }}" required>
            @if ($errors->has('keyword'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('keyword') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.desc') }} (en)<span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="desc_en" value="{{ getData($data, 'desc_en') }}" class="form-control" placeholder="{{ trans('main.desc') }}" required>
            @if ($errors->has('desc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('desc') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.desc') }} (ar)<span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="desc_ar" value="{{ getData($data, 'desc_ar') }}" class="form-control" placeholder="{{ trans('main.desc') }}" required>
            @if ($errors->has('desc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('desc') }}</strong>
                </span>
            @endif
        </div>
    </div>

</div>
