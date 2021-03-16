<div class="form-body">
    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.title') }} (en)<span class="required"></span> </label>
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
        <label class="col-md-2 control-label">{{ trans('main.title') }} (ar) </span> </label>
        <div class="col-md-6">
            <input type="text" name="title_ar" value="{{ getData($data, 'title_ar') }}" class="form-control" placeholder="{{ trans('main.title') }}" >
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>
    </div>



    {{-- Add Post's Category --}}
    <div class="form-group{{ $errors->has('vcat_id') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.vcategory') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <select class="form-control select2" id="vcat_id" name="vcat_id">
              <option value="">{{ trans('main.select Category') }}</option>
              @foreach ($vcat as $pc)
                  <option value="{{ $pc->id }}" {{ getData($data, 'vcat_id') == $pc->id ? 'selected' : '' }}>
                    @if(GetLanguage() == 'en')
                      {{ json_decode($pc->title)->en }}
                    @else
                      {{ json_decode($pc->title)->ar }}
                    @endif
                  </option>

              @endforeach
            </select>
            @if ($errors->has('vcat_id'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('vcat_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    {{-- Add Post's Taq --}}
    <div class="form-group{{ $errors->has('vtaq_id') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.vtaqs') }} <span class="required"></span> </label>
          <option value="">{{ trans('main.selectTaqsPost') }}</option>
        <div class="col-md-6">
            <select class="form-control select2" name="vtaq_id[]" id="vtaq_id" multiple>
              @foreach ($vtaq as $pt)
                  <option value="{{ $pt->id }}" {{ getData($data, 'vtaq_id') == $pt->id ? 'selected' : '' }}>{{ $pt->name }}</option>
              @endforeach
            </select>
            @if ($errors->has('vtaq_id'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('vtaq_id') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.image') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'image')))
                        <img src="{{ ShowImage(getData($data, 'image')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.select_image') }} 255*366</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 255*366</span>
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


    <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.status') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <select class="form-control select2" id="status" name="status">
                <option value="">{{ trans('main.status') }}</option>
                <option value="active" {{ getData($data, 'status') == 'active' ? ' selected' : '' }}>{{trans('main.active')}}</option>
                <option value="inactive" {{ getData($data, 'status') == 'inactive' ? ' selected' : '' }}>{{trans('main.inactive')}}</option>
            </select>
            @if ($errors->has('status'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.content') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="content" value="{{ getData($data, 'content') }}" class="form-control" placeholder="{{ trans('main.content') }}" required>
            @if ($errors->has('content'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('content') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.description') }} (en) <span class="required"></span> </label>
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
        <label class="col-md-2 control-label">{{ trans('main.description') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="desc_ar" value="{{ getData($data, 'desc_ar') }}" class="form-control" placeholder="{{ trans('main.desc') }}" required>
            @if ($errors->has('desc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('desc') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('keyword') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.keyword') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="keyword"  value="{{ getData($data, 'keyword') }}" class="form-control" placeholder="{{ trans('main.keyword') }}" required>
            @if ($errors->has('keyword'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('keyword') }}</strong>
                </span>
            @endif
        </div>
    </div>

</div>
