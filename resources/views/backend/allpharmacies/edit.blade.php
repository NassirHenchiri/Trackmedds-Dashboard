@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.allpharmacies.management') . ' | ' . trans('labels.backend.allpharmacies.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.allpharmacies.management') }}
        <small>{{ trans('labels.backend.allpharmacies.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($allpharmacies, ['route' => ['admin.allpharmacies.update', $allpharmacy], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-allpharmacy']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.allpharmacies.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.allpharmacies.partials.allpharmacies-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.allpharmacies.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.allpharmacies.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
