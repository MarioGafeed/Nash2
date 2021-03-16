<div class="form-body">

<!-- first to add Fields -->
<div class="form-body">

    <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.logo') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'logo')))
                        <img src="{{ ShowImage(getData($data, 'logo')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 356*81</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 356*81</span>
                        <input type="file" name="logo">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('logo'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('logo') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bannerimage') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.bannerimage') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'bannerimage')))
                        <img src="{{ ShowImage(getData($data, 'bannerimage')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 1920*815</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 1920*815</span>
                        <input type="file" name="bannerimage">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('bannerimage'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('bannerimage') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bannerredtxt1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.bannerredtxt1') }} (en)</label>
        <div class="col-md-6">
            <input type="text" name="bannerredtxt1_en" value="{{ getData($data, 'bannerredtxt1_en') }}" class="form-control" placeholder="{{ trans('main.bannerredtxt1') }}" >
            @if ($errors->has('bannerredtxt1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('bannerredtxt1') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bannerredtxt1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.bannerredtxt1') }} (ar)</label>
        <div class="col-md-6">
            <input type="text" name="bannerredtxt1_ar" value="{{ getData($data, 'bannerredtxt1_ar') }}" class="form-control" placeholder="{{ trans('main.bannerredtxt1') }}" >
            @if ($errors->has('bannerredtxt1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('bannerredtxt1') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bannerbluetxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.bannerbluetxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="bannerbluetxt_en" value="{{ getData($data, 'bannerbluetxt_en') }}" class="form-control" placeholder="{{ trans('main.bannerbluetxt') }}" >
            @if ($errors->has('bannerbluetxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('bannerbluetxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('bannerbluetxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.bannerbluetxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="bannerbluetxt_ar" value="{{ getData($data, 'bannerbluetxt_ar') }}" class="form-control" placeholder="{{ trans('main.bannerbluetxt') }}" >
            @if ($errors->has('bannerbluetxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('bannerbluetxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('firsttitletxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.firsttitletxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="firsttitletxt_en" value="{{ getData($data, 'firsttitletxt_en') }}" class="form-control" placeholder="{{ trans('main.firsttitletxt') }}" >
            @if ($errors->has('firsttitletxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('firsttitletxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('firsttitletxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.firsttitletxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="firsttitletxt_ar" value="{{ getData($data, 'firsttitletxt_ar') }}" class="form-control" placeholder="{{ trans('main.firsttitletxt') }}" >
            @if ($errors->has('firsttitletxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('firsttitletxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('firstdesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.firstdesctxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="firstdesctxt_en" value="{{ getData($data, 'firstdesctxt_en') }}" class="form-control" placeholder="{{ trans('main.firstdesctxt') }}" >
            @if ($errors->has('firstdesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('firstdesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('firstdesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.firstdesctxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="firstdesctxt_ar" value="{{ getData($data, 'firstdesctxt_ar') }}" class="form-control" placeholder="{{ trans('main.firstdesctxt') }}" >
            @if ($errors->has('firstdesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('firstdesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group{{ $errors->has('secondtitletxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.secondtitletxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="secondtitletxt_en" value="{{ getData($data, 'secondtitletxt_en') }}" class="form-control" placeholder="{{ trans('main.secondtitletxt') }}" >
            @if ($errors->has('secondtitletxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('secondtitletxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('secondtitletxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.secondtitletxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="secondtitletxt_ar" value="{{ getData($data, 'secondtitletxt_ar') }}" class="form-control" placeholder="{{ trans('main.secondtitletxt') }}" >
            @if ($errors->has('secondtitletxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('secondtitletxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('seconddesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.seconddesctxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="seconddesctxt_en" value="{{ getData($data, 'seconddesctxt_en') }}" class="form-control" placeholder="{{ trans('main.seconddesctxt') }}" >
            @if ($errors->has('seconddesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('seconddesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('seconddesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.seconddesctxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="seconddesctxt_ar" value="{{ getData($data, 'seconddesctxt_ar') }}" class="form-control" placeholder="{{ trans('main.seconddesctxt') }}" >
            @if ($errors->has('seconddesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('seconddesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('thirdtitletxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.thirdtitletxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="thirdtitletxt_en" value="{{ getData($data, 'thirdtitletxt_en') }}" class="form-control" placeholder="{{ trans('main.thirdtitletxt') }}" >
            @if ($errors->has('thirdtitletxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('thirdtitletxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('thirdtitletxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.thirdtitletxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="thirdtitletxt_ar" value="{{ getData($data, 'thirdtitletxt_ar') }}" class="form-control" placeholder="{{ trans('main.thirdtitletxt') }}" >
            @if ($errors->has('thirdtitletxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('thirdtitletxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('thirddesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.thirddesctxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="thirddesctxt_en" value="{{ getData($data, 'thirddesctxt_en') }}" class="form-control" placeholder="{{ trans('main.thirddesctxt') }}" >
            @if ($errors->has('thirddesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('thirddesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('thirddesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.thirddesctxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="thirddesctxt_ar" value="{{ getData($data, 'thirddesctxt_ar') }}" class="form-control" placeholder="{{ trans('main.thirddesctxt') }}" >
            @if ($errors->has('thirddesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('thirddesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('banneraboutimage') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.banneraboutimage') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'banneraboutimage')))
                        <img src="{{ ShowImage(getData($data, 'banneraboutimage')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 555*493</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 555*493</span>
                        <input type="file" name="banneraboutimage">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('banneraboutimage'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('banneraboutimage') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('aboutbluetxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.aboutbluetxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="aboutbluetxt_en" value="{{ getData($data, 'aboutbluetxt_en') }}" class="form-control" placeholder="{{ trans('main.aboutbluetxt') }}" >
            @if ($errors->has('aboutbluetxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('aboutbluetxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('aboutbluetxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.aboutbluetxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="aboutbluetxt_ar" value="{{ getData($data, 'aboutbluetxt_ar') }}" class="form-control" placeholder="{{ trans('main.aboutbluetxt') }}" >
            @if ($errors->has('aboutbluetxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('aboutbluetxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('aboutblacktxt1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.aboutblacktxt1') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="aboutblacktxt1_en" value="{{ getData($data, 'aboutblacktxt1_en') }}" class="form-control" placeholder="{{ trans('main.aboutblacktxt1') }}" >
            @if ($errors->has('aboutblacktxt1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('aboutblacktxt1') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('aboutblacktxt1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.aboutblacktxt1') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="aboutblacktxt1_ar" value="{{ getData($data, 'aboutblacktxt1_ar') }}" class="form-control" placeholder="{{ trans('main.aboutblacktxt1') }}" >
            @if ($errors->has('aboutblacktxt1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('aboutblacktxt1') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('aboutblacktxt2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.aboutblacktxt2') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="aboutblacktxt2_en" value="{{ getData($data, 'aboutblacktxt2_en') }}" class="form-control" placeholder="{{ trans('main.aboutblacktxt2') }}" >
            @if ($errors->has('aboutblacktxt2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('aboutblacktxt2') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('aboutblacktxt2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.aboutblacktxt2') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="aboutblacktxt2_ar" value="{{ getData($data, 'aboutblacktxt2_ar') }}" class="form-control" placeholder="{{ trans('main.aboutblacktxt2') }}" >
            @if ($errors->has('aboutblacktxt2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('aboutblacktxt2') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('testcentertxt2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.testcentertxt2') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="testcentertxt2_en" value="{{ getData($data, 'testcentertxt2_en') }}" class="form-control" placeholder="{{ trans('main.testcentertxt2') }}" >
            @if ($errors->has('testcentertxt2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('testcentertxt2') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('testcentertxt2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.testcentertxt2') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="testcentertxt2_ar" value="{{ getData($data, 'testcentertxt2_ar') }}" class="form-control" placeholder="{{ trans('main.testcentertxt2') }}" >
            @if ($errors->has('testcentertxt2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('testcentertxt2') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('bannercontactimage') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.bannercontactimage') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'bannercontactimage')))
                        <img src="{{ ShowImage(getData($data, 'bannercontactimage')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 1920*551</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 1920*551</span>
                        <input type="file" name="bannercontactimage">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('bannercontactimage'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('bannercontactimage') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactheadertxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactheadertxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactheadertxt_en" value="{{ getData($data, 'contactheadertxt_en') }}" class="form-control" placeholder="{{ trans('main.contactheadertxt') }}" >
            @if ($errors->has('contactheadertxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactheadertxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contactheadertxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactheadertxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contactheadertxt_ar" value="{{ getData($data, 'contactheadertxt_ar') }}" class="form-control" placeholder="{{ trans('main.contactheadertxt') }}" >
            @if ($errors->has('contactheadertxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactheadertxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactparatxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactparatxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactparatxt_en" value="{{ getData($data, 'contactparatxt_en') }}" class="form-control" placeholder="{{ trans('main.contactparatxt') }}" >
            @if ($errors->has('contactparatxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactparatxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contactparatxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactparatxt') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="contactparatxt_ar" value="{{ getData($data, 'contactparatxt_ar') }}" class="form-control" placeholder="{{ trans('main.contactparatxt') }}" >
            @if ($errors->has('contactparatxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactparatxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactdesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactdesctxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactdesctxt_en" value="{{ getData($data, 'contactdesctxt_en') }}" class="form-control" placeholder="{{ trans('main.contactdesctxt') }}" >
            @if ($errors->has('contactdesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactdesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contactdesctxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactdesctxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contactdesctxt_ar" value="{{ getData($data, 'contactdesctxt_ar') }}" class="form-control" placeholder="{{ trans('main.contactdesctxt') }}" >
            @if ($errors->has('contactdesctxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactdesctxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactsqaure1txt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqaure1txt') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="contactsqaure1txt_en" value="{{ getData($data, 'contactsqaure1txt_en') }}" class="form-control" placeholder="{{ trans('main.contactsqaure1txt') }}" >
            @if ($errors->has('contactsqaure1txt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqaure1txt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contactsqaure1txt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqaure1txt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contactsqaure1txt_ar" value="{{ getData($data, 'contactsqaure1txt_ar') }}" class="form-control" placeholder="{{ trans('main.contactsqaure1txt') }}" >
            @if ($errors->has('contactsqaure1txt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqaure1txt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactsqauretxt2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqauretxt2') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactsqauretxt2_en" value="{{ getData($data, 'contactsqauretxt2_en') }}" class="form-control" placeholder="{{ trans('main.contactsqauretxt2') }}" >
            @if ($errors->has('contactsqauretxt2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqauretxt2') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contactsqauretxt2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqauretxt2') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contactsqauretxt2_ar" value="{{ getData($data, 'contactsqauretxt2_ar') }}" class="form-control" placeholder="{{ trans('main.contactsqauretxt2') }}" >
            @if ($errors->has('contactsqauretxt2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqauretxt2') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactsqauretxt3') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqauretxt3') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactsqauretxt3_en" value="{{ getData($data, 'contactsqauretxt3_en') }}" class="form-control" placeholder="{{ trans('main.contactsqauretxt3') }}" >
            @if ($errors->has('contactsqauretxt3'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqauretxt3') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contactsqauretxt3') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqauretxt3') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="contactsqauretxt3_ar" value="{{ getData($data, 'contactsqauretxt3_ar') }}" class="form-control" placeholder="{{ trans('main.contactsqauretxt3') }}" >
            @if ($errors->has('contactsqauretxt3'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqauretxt3') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactsqauretxt4') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqauretxt4') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactsqauretxt4_en" value="{{ getData($data, 'contactsqauretxt4_en') }}" class="form-control" placeholder="{{ trans('main.contactsqauretxt4') }}" >
            @if ($errors->has('contactsqauretxt4'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqauretxt4') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contactsqauretxt4') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactsqauretxt4') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="contactsqauretxt4_ar" value="{{ getData($data, 'contactsqauretxt4_ar') }}" class="form-control" placeholder="{{ trans('main.contactsqauretxt4') }}" >
            @if ($errors->has('contactsqauretxt4'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactsqauretxt4') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('teamspantxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.teamspantxt') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="teamspantxt_en" value="{{ getData($data, 'teamspantxt_en') }}" class="form-control" placeholder="{{ trans('main.teamspantxt') }}" >
            @if ($errors->has('teamspantxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('teamspantxt') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('teamspantxt') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.teamspantxt') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="teamspantxt_ar" value="{{ getData($data, 'teamspantxt_ar') }}" class="form-control" placeholder="{{ trans('main.teamspantxt') }}" >
            @if ($errors->has('teamspantxt'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('teamspantxt') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team1img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.team1img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'team1img')))
                        <img src="{{ ShowImage(getData($data, 'team1img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 148*148</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 148*148</span>
                        <input type="file" name="team1img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('team1img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1img') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team2img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.team2img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'team2img')))
                        <img src="{{ ShowImage(getData($data, 'team2img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 148*148</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 148*148</span>
                        <input type="file" name="team2img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('team2img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2img') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team3img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.team3img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'team3img')))
                        <img src="{{ ShowImage(getData($data, 'team3img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 148*148</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 148*148</span>
                        <input type="file" name="team3img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('team3img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3img') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team4img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.team4img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'team4img')))
                        <img src="{{ ShowImage(getData($data, 'team4img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 148*148</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 148*148</span>
                        <input type="file" name="team4img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('team4img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team1name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team1name') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="team1name_en" value="{{ getData($data, 'team1name_en') }}" class="form-control" placeholder="{{ trans('main.team1name') }}" >
            @if ($errors->has('team1name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team1name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team1name') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="team1name_ar" value="{{ getData($data, 'team1name_ar') }}" class="form-control" placeholder="{{ trans('main.team1name') }}" >
            @if ($errors->has('team1name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team2name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team2name') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="team2name_en" value="{{ getData($data, 'team2name_en') }}" class="form-control" placeholder="{{ trans('main.team2name') }}" >
            @if ($errors->has('team2name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team2name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team2name') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="team2name_ar" value="{{ getData($data, 'team2name_ar') }}" class="form-control" placeholder="{{ trans('main.team2name') }}" >
            @if ($errors->has('team2name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team3name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team3name') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="team3name_en" value="{{ getData($data, 'team3name_en') }}" class="form-control" placeholder="{{ trans('main.team3name') }}" >
            @if ($errors->has('team3name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team3name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team3name') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="team3name_ar" value="{{ getData($data, 'team3name_ar') }}" class="form-control" placeholder="{{ trans('main.team3name') }}" >
            @if ($errors->has('team3name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team4name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team4name') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="team4name_en" value="{{ getData($data, 'team4name_en') }}" class="form-control" placeholder="{{ trans('main.team4name') }}" >
            @if ($errors->has('team4name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team4name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team4name') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="team4name_ar" value="{{ getData($data, 'team4name_ar') }}" class="form-control" placeholder="{{ trans('main.team4name') }}" >
            @if ($errors->has('team4name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team1role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team1role') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="team1role_en" value="{{ getData($data, 'team1role_en') }}" class="form-control" placeholder="{{ trans('main.team1role') }}" >
            @if ($errors->has('team1role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1role') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team1role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team1role') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="team1role_ar" value="{{ getData($data, 'team1role_ar') }}" class="form-control" placeholder="{{ trans('main.team1role') }}" >
            @if ($errors->has('team1role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1role') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team2role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team2role') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="team2role_en" value="{{ getData($data, 'team2role_en') }}" class="form-control" placeholder="{{ trans('main.team2role') }}" >
            @if ($errors->has('team2role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2role') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team2role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team2role') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="team2role_ar" value="{{ getData($data, 'team2role_ar') }}" class="form-control" placeholder="{{ trans('main.team2role') }}" >
            @if ($errors->has('team2role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2role') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team3role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team3role') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="team3role_en" value="{{ getData($data, 'team3role_en') }}" class="form-control" placeholder="{{ trans('main.team3role') }}" >
            @if ($errors->has('team3role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3role') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team3role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team3role') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="team3role_ar" value="{{ getData($data, 'team3role_ar') }}" class="form-control" placeholder="{{ trans('main.team3role') }}" >
            @if ($errors->has('team3role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3role') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team4role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team4role') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="team4role_en" value="{{ getData($data, 'team4role_en') }}" class="form-control" placeholder="{{ trans('main.team4role') }}" >
            @if ($errors->has('team4role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4role') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team4role') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team4role') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="team4role_ar" value="{{ getData($data, 'team4role_ar') }}" class="form-control" placeholder="{{ trans('main.team4role') }}" >
            @if ($errors->has('team4role'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4role') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('team1fb') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team1fb') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team1fb" value="{{ getData($data, 'team1fb') }}" class="form-control" placeholder="{{ trans('main.team1fb') }}" >
            @if ($errors->has('team1fb'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1fb') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team2fb') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team2fb') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team2fb" value="{{ getData($data, 'team2fb') }}" class="form-control" placeholder="{{ trans('main.team2fb') }}" >
            @if ($errors->has('team2fb'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2fb') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team3fb') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team3fb') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team3fb" value="{{ getData($data, 'team3fb') }}" class="form-control" placeholder="{{ trans('main.team3fb') }}" >
            @if ($errors->has('team3fb'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3fb') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team4fb') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team4fb') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team4fb" value="{{ getData($data, 'team4fb') }}" class="form-control" placeholder="{{ trans('main.team4fb') }}" >
            @if ($errors->has('team4fb'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4fb') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team1tw') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team1tw') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team1tw" value="{{ getData($data, 'team1tw') }}" class="form-control" placeholder="{{ trans('main.team1tw') }}" >
            @if ($errors->has('team1tw'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1tw') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team2tw') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team2tw') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team2tw" value="{{ getData($data, 'team2tw') }}" class="form-control" placeholder="{{ trans('main.team2tw') }}" >
            @if ($errors->has('team2tw'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2tw') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team3tw') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team3tw') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team3tw" value="{{ getData($data, 'team3tw') }}" class="form-control" placeholder="{{ trans('main.team3tw') }}" >
            @if ($errors->has('team3tw'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3tw') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team4tw') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team4tw') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team4tw" value="{{ getData($data, 'team4tw') }}" class="form-control" placeholder="{{ trans('main.team4tw') }}" >
            @if ($errors->has('team4tw'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4tw') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team1in') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team1in') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team1in" value="{{ getData($data, 'team1in') }}" class="form-control" placeholder="{{ trans('main.team1in') }}" >
            @if ($errors->has('team1in'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team1in') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team2in') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team2in') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team2in" value="{{ getData($data, 'team2in') }}" class="form-control" placeholder="{{ trans('main.team2in') }}" >
            @if ($errors->has('team2in'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team2in') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team3in') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team3in') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team3in" value="{{ getData($data, 'team3in') }}" class="form-control" placeholder="{{ trans('main.team3in') }}" >
            @if ($errors->has('team3in'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team3in') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('team4in') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.team4in') }}  </label>
        <div class="col-md-6">
            <input type="text" name="team4in" value="{{ getData($data, 'team4in') }}" class="form-control" placeholder="{{ trans('main.team4in') }}" >
            @if ($errors->has('team4in'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('team4in') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('client1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client1') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="client1_en" value="{{ getData($data, 'client1_en') }}" class="form-control" placeholder="{{ trans('main.client1') }}" >
            @if ($errors->has('client1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client1') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('client1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client1') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="client1_ar" value="{{ getData($data, 'client1_ar') }}" class="form-control" placeholder="{{ trans('main.client1') }}" >
            @if ($errors->has('client1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client1') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('clientdesc1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc1') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="clientdesc1_en" value="{{ getData($data, 'clientdesc1_en') }}" class="form-control" placeholder="{{ trans('main.clientdesc1') }}" >
            @if ($errors->has('clientdesc1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc1') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('clientdesc1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc1') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="clientdesc1_ar" value="{{ getData($data, 'clientdesc1_ar') }}" class="form-control" placeholder="{{ trans('main.clientdesc1') }}" >
            @if ($errors->has('clientdesc1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc1') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('client2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client2') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="client2_en" value="{{ getData($data, 'client2_en') }}" class="form-control" placeholder="{{ trans('main.client2') }}" >
            @if ($errors->has('client2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client2') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('client2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client2') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="client2_ar" value="{{ getData($data, 'client2_ar') }}" class="form-control" placeholder="{{ trans('main.client2') }}" >
            @if ($errors->has('client2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client2') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('clientdesc2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc2') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="clientdesc2_en" value="{{ getData($data, 'clientdesc2_en') }}" class="form-control" placeholder="{{ trans('main.clientdesc2') }}" >
            @if ($errors->has('clientdesc2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc2') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('clientdesc2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc2') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="clientdesc2_ar" value="{{ getData($data, 'clientdesc2_ar') }}" class="form-control" placeholder="{{ trans('main.clientdesc2') }}" >
            @if ($errors->has('clientdesc2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc2') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('client3') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client3') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="client3_en" value="{{ getData($data, 'client3_en') }}" class="form-control" placeholder="{{ trans('main.client3') }}" >
            @if ($errors->has('client3'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client3') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('client3') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client3') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="client3_ar" value="{{ getData($data, 'client3_ar') }}" class="form-control" placeholder="{{ trans('main.client3') }}" >
            @if ($errors->has('client3'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client3') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('clientdesc3') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc3') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="clientdesc3_en" value="{{ getData($data, 'clientdesc3_en') }}" class="form-control" placeholder="{{ trans('main.clientdesc3') }}" >
            @if ($errors->has('clientdesc3'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc3') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('clientdesc3') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc3') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="clientdesc3_ar" value="{{ getData($data, 'clientdesc3_ar') }}" class="form-control" placeholder="{{ trans('main.clientdesc3') }}" >
            @if ($errors->has('clientdesc3'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc3') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('client4') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client4') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="client4_en" value="{{ getData($data, 'client4_en') }}" class="form-control" placeholder="{{ trans('main.client4') }}" >
            @if ($errors->has('client4'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client4') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('client4') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.client4') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="client4_ar" value="{{ getData($data, 'client4_ar') }}" class="form-control" placeholder="{{ trans('main.client4') }}" >
            @if ($errors->has('client4'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('client4') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('clientdesc4') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc4') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="clientdesc4_en" value="{{ getData($data, 'clientdesc4_en') }}" class="form-control" placeholder="{{ trans('main.clientdesc4') }}" >
            @if ($errors->has('clientdesc4'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc4') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('clientdesc4') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.clientdesc4') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="clientdesc4_ar" value="{{ getData($data, 'clientdesc4_ar') }}" class="form-control" placeholder="{{ trans('main.clientdesc4') }}" >
            @if ($errors->has('clientdesc4'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('clientdesc4') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('event1img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.event1img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'event1img')))
                        <img src="{{ ShowImage(getData($data, 'event1img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="event1img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('event1img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('event1img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('event2img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.event2img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'event2img')))
                        <img src="{{ ShowImage(getData($data, 'event2img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="event2img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('event2img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('event2img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('event3img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.event3img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'event3img')))
                        <img src="{{ ShowImage(getData($data, 'event3img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="event3img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('event3img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('event3img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('event4img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.event4img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'event4img')))
                        <img src="{{ ShowImage(getData($data, 'event4img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="event4img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('event4img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('event4img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('event5img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.event5img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'event5img')))
                        <img src="{{ ShowImage(getData($data, 'event5img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="event5img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('event5img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('event5img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('event6img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.event6img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'event6img')))
                        <img src="{{ ShowImage(getData($data, 'event6img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="event6img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('event6img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('event6img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('event7img') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.event7img') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'event7img')))
                        <img src="{{ ShowImage(getData($data, 'event7img')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 115*92</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 115*92</span>
                        <input type="file" name="event7img">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('event7img'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('event7img') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.street') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="street_en" value="{{ getData($data, 'street_en') }}" class="form-control" placeholder="{{ trans('main.street') }}" >
            @if ($errors->has('street'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('street') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.street') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="street_ar" value="{{ getData($data, 'street_ar') }}" class="form-control" placeholder="{{ trans('main.street') }}" >
            @if ($errors->has('street'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('street') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.phone') }}  </label>
        <div class="col-md-6">
            <input type="text" name="phone" value="{{ getData($data, 'phone') }}" class="form-control" placeholder="{{ trans('main.phone') }}" >
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.email') }}  </label>
        <div class="col-md-6">
            <input type="text" name="email" value="{{ getData($data, 'email') }}" class="form-control" placeholder="{{ trans('main.email') }}" >
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('opendays') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.opendays') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="opendays_en" value="{{ getData($data, 'opendays_en') }}" class="form-control" placeholder="{{ trans('main.opendays') }}" >
            @if ($errors->has('opendays'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('opendays') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('opendays') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.opendays') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="opendays_ar" value="{{ getData($data, 'opendays_ar') }}" class="form-control" placeholder="{{ trans('main.opendays') }}" >
            @if ($errors->has('opendays'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('opendays') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('vacation1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.vacation1') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="vacation1_en" value="{{ getData($data, 'vacation1_en') }}" class="form-control" placeholder="{{ trans('main.vacation1') }}" >
            @if ($errors->has('vacation1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('vacation1') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('vacation1') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.vacation1') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="vacation1_ar" value="{{ getData($data, 'vacation1_ar') }}" class="form-control" placeholder="{{ trans('main.vacation1') }}" >
            @if ($errors->has('vacation1'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('vacation1') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('vacation2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.vacation2') }} (en) </label>
        <div class="col-md-6">
            <input type="text" name="vacation2_en" value="{{ getData($data, 'vacation2_en') }}" class="form-control" placeholder="{{ trans('main.vacation2') }}" >
            @if ($errors->has('vacation2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('vacation2') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('vacation2') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.vacation2') }} (ar) </label>
        <div class="col-md-6">
            <input type="text" name="vacation2_ar" value="{{ getData($data, 'vacation2_ar') }}" class="form-control" placeholder="{{ trans('main.vacation2') }}" >
            @if ($errors->has('vacation2'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('vacation2') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.facebook') }}  </label>
        <div class="col-md-6">
            <input type="text" name="facebook" value="{{ getData($data, 'facebook') }}" class="form-control" placeholder="{{ trans('main.facebook') }}" >
            @if ($errors->has('facebook'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('facebook') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.twitter') }}  </label>
        <div class="col-md-6">
            <input type="text" name="twitter" value="{{ getData($data, 'twitter') }}" class="form-control" placeholder="{{ trans('main.twitter') }}" >
            @if ($errors->has('twitter'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('twitter') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('youtube') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.youtube') }}  </label>
        <div class="col-md-6">
            <input type="text" name="youtube" value="{{ getData($data, 'youtube') }}" class="form-control" placeholder="{{ trans('main.youtube') }}" >
            @if ($errors->has('youtube'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('youtube') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('insta') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.insta') }}  </label>
        <div class="col-md-6">
            <input type="text" name="insta" value="{{ getData($data, 'insta') }}" class="form-control" placeholder="{{ trans('main.insta') }}" >
            @if ($errors->has('insta'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('insta') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactpageimg') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.contactpageimg') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'contactpageimg')))
                        <img src="{{ ShowImage(getData($data, 'contactpageimg')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 1920*600</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 1920*600</span>
                        <input type="file" name="contactpageimg">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('contactpageimg'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactpageimg') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactpagetxtblue') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactpagetxtblue') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactpagetxtblue_en" value="{{ getData($data, 'contactpagetxtblue_en') }}" class="form-control" placeholder="{{ trans('main.contactpagetxtblue') }}" >
            @if ($errors->has('contactpagetxtblue'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactpagetxtblue') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactpagetxtblue') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactpagetxtblue') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contactpagetxtblue_ar" value="{{ getData($data, 'contactpagetxtblue_ar') }}" class="form-control" placeholder="{{ trans('main.contactpagetxtblue') }}" >
            @if ($errors->has('contactpagetxtblue'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactpagetxtblue') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactpagetxtred') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactpagetxtred') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactpagetxtred_en" value="{{ getData($data, 'contactpagetxtred_en') }}" class="form-control" placeholder="{{ trans('main.contactpagetxtred') }}" >
            @if ($errors->has('contactpagetxtred'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactpagetxtred') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactpagetxtred') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactpagetxtred') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contactpagetxtred_ar" value="{{ getData($data, 'contactpagetxtred_ar') }}" class="form-control" placeholder="{{ trans('main.contactpagetxtred') }}" >
            @if ($errors->has('contactpagetxtred'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactpagetxtred') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactpagetxtdesc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactpagetxtdesc') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contactpagetxtdesc_en" value="{{ getData($data, 'contactpagetxtdesc_en') }}" class="form-control" placeholder="{{ trans('main.contactpagetxtdesc') }}" >
            @if ($errors->has('contactpagetxtdesc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactpagetxtdesc') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contactpagetxtdesc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contactpagetxtdesc') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contactpagetxtdesc_ar" value="{{ getData($data, 'contactpagetxtdesc_ar') }}" class="form-control" placeholder="{{ trans('main.contactpagetxtdesc') }}" >
            @if ($errors->has('contactpagetxtdesc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contactpagetxtdesc') }}</strong>
                </span>
            @endif
        </div>
    </div>
    // CONTACT2
    <div class="form-group{{ $errors->has('contact2pageimg') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.contact2pageimg') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'contact2pageimg')))
                        <img src="{{ ShowImage(getData($data, 'contact2pageimg')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 1920*600</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 1920*600</span>
                        <input type="file" name="contact2pageimg">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('contact2pageimg'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contact2pageimg') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact2pagetxtblue') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contact2pagetxtblue') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contact2pagetxtblue_en" value="{{ getData($data, 'contact2pagetxtblue_en') }}" class="form-control" placeholder="{{ trans('main.contact2pagetxtblue') }}" >
            @if ($errors->has('contact2pagetxtblue'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contact2pagetxtblue') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact2pagetxtblue') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contact2pagetxtblue') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contact2pagetxtblue_ar" value="{{ getData($data, 'contact2pagetxtblue_ar') }}" class="form-control" placeholder="{{ trans('main.contact2pagetxtblue') }}" >
            @if ($errors->has('contact2pagetxtblue'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contact2pagetxtblue') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact2pagetxtred') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contact2pagetxtred') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contact2pagetxtred_en" value="{{ getData($data, 'contact2pagetxtred_en') }}" class="form-control" placeholder="{{ trans('main.contact2pagetxtred') }}" >
            @if ($errors->has('contact2pagetxtred'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contact2pagetxtred') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact2pagetxtred') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contact2pagetxtred') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contact2pagetxtred_ar" value="{{ getData($data, 'contact2pagetxtred_ar') }}" class="form-control" placeholder="{{ trans('main.contact2pagetxtred') }}" >
            @if ($errors->has('contact2pagetxtred'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contact2pagetxtred') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact2pagetxtdesc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contact2pagetxtdesc') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="contact2pagetxtdesc_en" value="{{ getData($data, 'contact2pagetxtdesc_en') }}" class="form-control" placeholder="{{ trans('main.contact2pagetxtdesc') }}" >
            @if ($errors->has('contact2pagetxtdesc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contact2pagetxtdesc') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact2pagetxtdesc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.contact2pagetxtdesc') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="contact2pagetxtdesc_ar" value="{{ getData($data, 'contact2pagetxtdesc_ar') }}" class="form-control" placeholder="{{ trans('main.contact2pagetxtdesc') }}" >
            @if ($errors->has('contact2pagetxtdesc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('contact2pagetxtdesc') }}</strong>
                </span>
            @endif
        </div>
    </div>

    // Blog
    <div class="form-group{{ $errors->has('blogpageimg') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.blogpageimg') }}</label>
        <div class="col-md-6">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'blogpageimg')))
                        <img src="{{ ShowImage(getData($data, 'blogpageimg')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.image') }} 1920*600</span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} 1920*600</span>
                        <input type="file" name="blogpageimg">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('blogpageimg'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('blogpageimg') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('blogpagetxtblue') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.blogpagetxtblue') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="blogpagetxtblue_en" value="{{ getData($data, 'blogpagetxtblue_en') }}" class="form-control" placeholder="{{ trans('main.blogpagetxtblue') }}" >
            @if ($errors->has('blogpagetxtblue'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('blogpagetxtblue') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('blogpagetxtblue') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.blogpagetxtblue') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="blogpagetxtblue_ar" value="{{ getData($data, 'blogpagetxtblue_ar') }}" class="form-control" placeholder="{{ trans('main.blogpagetxtblue') }}" >
            @if ($errors->has('blogpagetxtblue'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('blogpagetxtblue') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('blogpagetxtdesc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.blogpagetxtdesc') }}  (en)</label>
        <div class="col-md-6">
            <input type="text" name="blogpagetxtdesc_en" value="{{ getData($data, 'blogpagetxtdesc_en') }}" class="form-control" placeholder="{{ trans('main.blogpagetxtdesc') }}" >
            @if ($errors->has('blogpagetxtdesc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('blogpagetxtdesc') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('blogpagetxtdesc') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.blogpagetxtdesc') }}  (ar)</label>
        <div class="col-md-6">
            <input type="text" name="blogpagetxtdesc_ar" value="{{ getData($data, 'blogpagetxtdesc_ar') }}" class="form-control" placeholder="{{ trans('main.blogpagetxtdesc') }}" >
            @if ($errors->has('blogpagetxtdesc'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('blogpagetxtdesc') }}</strong>
                </span>
            @endif
        </div>
    </div>

</div>
