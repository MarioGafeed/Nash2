<div class="modal fade" id="editModel-{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title"> {{ trans('main.edit')}} {{ $editTitle ?? '' }}</h4>
            </div>
            <form action="{{ $url }}" method="post">
                <div class="clearfix modal-body" >
                        @csrf
                        @method('PATCH')
                        {{ $slot }}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">{{ trans('main.edit') }}</button>
                    <a class="btn btn-default" data-dismiss="modal">{{trans('main.cancel')}}</a>
                </div>
            </form>
        </div>
    </div>
</div>
