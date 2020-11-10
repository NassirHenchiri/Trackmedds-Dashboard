<div class="box-body">
    <div class="form-group">
        {{ Form::label('nprovider', 'Name of provider', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('nprovider', null, ['class' => 'form-control box-size', 'placeholder' => 'name of provider', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->

<div class="box-body">
    <div class="form-group">
        {{ Form::label('adresse', 'Adresse', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('adresse', null, ['class' => 'form-control box-size', 'placeholder' => 'precise your adresse here', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->

<div class="box-body">
    <div class="form-group">
        {{ Form::label('tel', 'Phone number', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('tel', null, ['class' => 'form-control box-size', 'placeholder' => '+216', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->
<div class="form-group">
    {{ Form::label('classf', 'Classification', ['class' => 'col-lg-2 control-label required']) }}

    <div class="col-lg-5">
        {!! Form::select('classf', ["Beauty and cosmetics" => "Beauty and cosmetics", "Babies and maternity"=>"Babies and maternity" , "Herbalism"=>"Herbalism" , "Natural cosmetics"=>"Natural cosmetics","Hygiene"=>"Hygiene","General"=>"General"], null, ["class" => "search-input-select form-control", "data-column" => 1, "placeholder" => "All classifications"]) !!}
    </div><!--col-lg-3-->
</div><!--form control-->
@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
