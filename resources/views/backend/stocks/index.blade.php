@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.stocks.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.stocks.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.stocks.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.stocks.partials.stocks-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="stocks-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.stocks.table.id') }}</th>
                            <th>{{ trans('labels.backend.stocks.table.nompharmacie') }}</th>
                            <th>{{ trans('labels.backend.stocks.table.nomproduit') }}</th>
                            <th>{{ trans('labels.backend.stocks.table.quantite') }}</th>
                            <th>{{ trans('labels.backend.stocks.table.createdat') }}</th>
                            <th>{{ trans('labels.backend.stocks.table.updatedat') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
@endsection

@section('after-scripts')
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}

    <script>
        //Below written line is short form of writing $(document).ready(function() { })
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            var dataTable = $('#stocks-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.stocks.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: '{{config('module.stocks.table')}}.id'},
                    {data: 'nompharmacie', name: '{{config('module.stocks.table')}}.nompharmacie'},
                    {data: 'nomproduit', name: '{{config('module.stocks.table')}}.nomproduit'},
                    {data: 'quantite', name: '{{config('module.stocks.table')}}.quantite'},
                    {data: 'created_at', name: '{{config('module.stocks.table')}}.created_at'},
                    {data: 'updated_at', name: '{{config('module.stocks.table')}}.updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'copyButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'csv', className: 'csvButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'excel', className: 'excelButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'pdf', className: 'pdfButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'print', className: 'printButton',  exportOptions: {columns: [ 0, 1 ]  }}
                    ]
                }
            });

            Backend.DataTableSearch.init(dataTable);
        });
    </script>
@endsection
