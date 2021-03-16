@extends('backend.theme.layout.app')

@section('styles')
    <link rel="stylesheet" href="{{asset('backend/datatables/dataTables.bootstrap-rtl.min.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
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
            window.location = "{{ route('permissions.create') }}";
        });
    </script>
    {!! $dataTable->scripts() !!}
@endsection
