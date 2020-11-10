@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.mypharmacies.management') . ' | ' . trans('labels.backend.mypharmacies.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.mypharmacies.management') }}
        <small>{{ trans('labels.backend.mypharmacies.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($mypharmacies ?? '', ['route' => ['admin.mypharmacies.update', $mypharmacies ?? ''], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-mypharmacy']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.mypharmacies.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.mypharmacies.partials.mypharmacies-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.mypharmacies.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.mypharmacies.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
