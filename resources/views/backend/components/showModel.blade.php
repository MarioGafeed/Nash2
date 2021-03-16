<div class="modal fade" id="showModel-{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">{{trans('main.show')}} {{ $showTitle ?? '' }} </h4>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <a class="btn btn-default" data-dismiss="modal">{{trans('main.cancel')}}</a>
            </div>
        </div>
    </div>
</div>
