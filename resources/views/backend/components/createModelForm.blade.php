<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title"> {{ trans('main.add')}} </h4>
            </div>
            <form action="{{ $url }}" method="post">
                <div class="clearfix modal-body" >
                        @csrf
                        @method('post')
                        {{ $slot }}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">{{ trans('main.add') }}</button>
                    <a class="btn btn-default" data-dismiss="modal">{{trans('main.cancel')}}</a>
                </div>
            </form>
        </div>
    </div>
</div>
