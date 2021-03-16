<div class="modal fade" id="deleteModel-{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title"> {{ trans('main.delete')}} {{ $deleteTitle ?? '' }} </h4>
            </div>
            <form action="{{ $url }}" method="post">
                <div class="clearfix modal-body" >
                        @csrf
                        @method('DELETE')
                        <strong>{{trans('main.ask-delete')}}</strong>  {{ $deleteTitle ?? '' }}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit">{{ trans('main.approval') }}</button>
                    <a class="btn btn-default" data-dismiss="modal">{{trans('main.cancel')}}</a>
                </div>
            </form>
        </div>
    </div>
</div>