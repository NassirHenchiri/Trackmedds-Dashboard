@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.mypharmacies.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.mypharmacies.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.mypharmacies.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.mypharmacies.partials.mypharmacies-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="mypharmacies-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.mypharmacies.table.id') }}</th>
                            <th>{{ trans('labels.backend.mypharmacies.table.ville') }}</th>
                            <th>{{ trans('labels.backend.mypharmacies.table.adress') }}</th>
                            <th>{{ trans('labels.backend.mypharmacies.table.amplitude') }}</th>
                            <th>{{ trans('labels.backend.mypharmacies.table.attitude') }}</th>
                            <th>{{ trans('labels.backend.mypharmacies.table.user') }}</th>
                            <th>Name</th>
                            <th>{{ trans('labels.backend.mypharmacies.table.created_at') }}</th>
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
            
            var dataTable = $('#mypharmacies-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.mypharmacies.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: '{{config('module.mypharmacies.table')}}.id'},
                    {data: 'ville', name: '{{config('module.mypharmacies.table')}}.ville'},
                    {data: 'adress', name: '{{config('module.mypharmacies.table')}}.adress'},
                    {data: 'amplitude', name: '{{config('module.mypharmacies.table')}}.amplitude'},
                    {data: 'attitude', name: '{{config('module.mypharmacies.table')}}.attitude'},
                    {data: 'livrer_name', name: '{{config('module.commandes.table')}}.livrer_name'},
                    {data: 'nom', name: '{{config('module.mypharmacies.table')}}.nom'},
                    {data: 'created_at', name: '{{config('module.mypharmacies.table')}}.created_at'},
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
