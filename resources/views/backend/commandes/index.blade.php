@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.commandes.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.commandes.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.commandes.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.commandes.partials.commandes-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="commandes-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.commandes.table.id') }}</th>
                            <th>{{ trans('labels.backend.commandes.table.etat') }}</th>
                            <th>{{ trans('labels.backend.commandes.table.createdat') }}</th>
                            <th>{{ trans('labels.backend.commandes.table.createdby') }}</th>
                            <th>{{ trans('labels.backend.commandes.table.livredby') }}</th>
                            <th>{{ trans('labels.backend.commandes.table.livred_at') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th>

                            </th>
                            <th>
                                {!! Form::select('status', [0 => "Not Livred", 1 => "Livred"], null, ["class" => "search-input-select form-control", "data-column" => 1, "placeholder" => trans('labels.backend.pages.table.all')]) !!}
                            </th>
                            <th>

                            </th>

                            <th>

                            </th>
                            <th>

                            </th>

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
            
            var dataTable = $('#commandes-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.commandes.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: '{{config('module.commandes.table')}}.id'},
                    {data: 'etat', name: '{{config('module.commandes.table')}}.etat'},
                    {data: 'created_at', name: '{{config('module.commandes.table')}}.created_at'},
                    {data: 'created_by', name: '{{config('module.commandes.table')}}.created_by'},
                    {data: 'livrer_name', name: '{{config('module.commandes.table')}}.livrer_name'},
                    {data: 'livred_at', name: '{{config('module.commandes.table')}}.livred_at'},
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
