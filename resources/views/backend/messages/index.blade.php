@extends('backend.theme.layout.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('backend/datatables/dataTables.bootstrap-'.GetDirection().'.min.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('messages.multi_delete') }}">
                @csrf
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject bold font-blue-casablanca uppercase"> {{ $title }} </span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12">
                                {!! $dataTable->table(['class'=> 'table table-striped table-bordered table-hover'], true) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="multi_delete">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" data-dismiss="modal">x</button>
                                <h4 class="modal-title">{{trans('main.delete')}} </h4>
                            </div>
                            <div class="modal-body">
                                <div class="delete_done"> {{trans('main.ask-delete')}} <span id="count"></span> {{trans('main.record')}} ! </div>
                                <div class="check_delete">{{trans('main.check-delete')}}</div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger delete_done" type="submit">{{ trans('main.approval') }}</button>
                                <a class="btn btn-default" data-dismiss="modal">{{trans('main.cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('backend/datatables/dataTables.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).keydown(function(event){
                if(event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
        $(document).on('click', '.createBtn', function() {
            window.location = "{{ route('messages.create') }}";
        });
        $(document).on('click', '.deleteBtn', function() {
            $('#multi_delete').modal('show');
            var number_checkbox = $(".selected_data").filter(":checked").length;
            $('#count').html(number_checkbox);
            if(number_checkbox > 0){
                $('.delete_done').show();
                $('.check_delete').hide();
            }else{
                $('.delete_done').hide();
                $('.check_delete').show();
            }
        });
    </script>
    {!! $dataTable->scripts() !!}
@endsection
