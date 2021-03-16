<a href="#" data-toggle="modal" data-target="#myModal{{$id}}" class="btn red">{{ trans('main.delete') }}</a>

<div class="modal fade" id="myModal{{$id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">{{trans('main.delete')}} {{ $title }} ! </h4>
            </div>
            <div class="modal-body">
                {{trans('main.ask-delete')}} : {{ $title }}
            </div>
            <div class="modal-footer">
                {!! Form::open([ 'method' => 'DELETE', 'route' => ['posts.destroy', $id] ]) !!}
                {!! Form::submit(trans('main.approval'), ['class' => 'btn btn-danger']) !!}
                <a class="btn btn-default" data-dismiss="modal">{{trans('main.cancel')}}</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
