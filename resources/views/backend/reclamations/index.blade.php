@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.reclamations.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.reclamations.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.reclamations.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.reclamations.partials.reclamations-header-buttons')
            </div>
        </div><!-- /.box-header -->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="reclamations-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.reclamations.table.name') }}</th>
                            <th>{{ trans('labels.backend.reclamations.table.email') }}</th>
                            <th>{{ trans('labels.backend.reclamations.table.status') }}</th>
                            <th>{{ trans('labels.backend.reclamations.table.phone') }}</th>
                            <th>{{ trans('labels.backend.reclamations.table.subject') }}</th>
                            <th>{{ trans('labels.backend.reclamations.table.message') }}</th>
                            <th>{{ trans('labels.backend.reclamations.table.pharmacie') }}</th>
                            <th>{{ trans('labels.backend.reclamations.table.medicament') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th>
                                {!! Form::text('name', null, ["class" => "search-input-text form-control", "data-column" => 0, "placeholder" => trans('labels.backend.reclamations.table.name')]) !!}
                                <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                            </th>
                            <th>
                                {!! Form::text('email', null, ["class" => "search-input-select form-control", "data-column" => 1, "placeholder" => trans('labels.backend.reclamations.table.email')]) !!}
                                <a class="reset-data" href="javascript:void(0)"><i class="fa fa-times"></i></a>
                            </th>
                            <th>
                                {!! Form::select('status', [1 => 'Traité', 0 => 'Non traité'], null, ["class" => "search-input-select form-control", "data-column" => 2, "placeholder" => trans('labels.backend.reclamations.table.all')]) !!}
                            </th>
                            {{-- <th></th> --}}
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->

    <!--<div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {{-- {!! history()->renderType('Blog') !!} --}}
        </div><!-- /.box-body -->
    </div><!--box box-info-->
@endsection

@section('after-scripts')
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var dataTable = $('#reclamations-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.reclamations.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'name', name: '{{config('module.reclamations.table')}}.name'},
                    {data: 'email', name: '{{config('module.reclamations.table')}}.email'},
                    {data: 'status', name: '{{config('module.reclamations.table')}}.status'},
                    {data: 'phone', name: '{{config('module.reclamations.table')}}.phone'},
                    {data: 'subject', name: '{{config('module.reclamations.table')}}.subject'},
                    {data: 'message', name: '{{config('module.reclamations.table')}}.message'},
                    {data: 'pharmacie', name: '{{config('module.reclamations.table')}}.pharmacie'},
                    {data: 'medicament', name: '{{config('module.reclamations.table')}}.medicament'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[1, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'copyButton',  exportOptions: {columns: [ 0, 1, 2, 3]  }},
                        { extend: 'csv', className: 'csvButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }},
                        { extend: 'excel', className: 'excelButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }},
                        { extend: 'pdf', className: 'pdfButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }},
                        { extend: 'print', className: 'printButton',  exportOptions: {columns: [ 0, 1, 2, 3 ]  }}
                    ]
                },
                language: {
                    @lang('datatable.strings')
                }
            });

            Backend.DataTableSearch.init(dataTable);
        });
    </script>
@endsection