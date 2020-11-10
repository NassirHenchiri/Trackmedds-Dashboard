<div class="box-body">
    <div class="form-group">
        {{ Form::label('nompharmacie', 'Name of Pharmacy', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('nompharmacie', null, ['class' => 'form-control box-size', 'placeholder' => 'name of pharmacy', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->

<div class="box-body">
    <div class="form-group">
        {{ Form::label('adressepharmacie', 'Adresse of Pharmacy', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('adressepharmacie', null, ['class' => 'form-control box-size', 'placeholder' => 'adresse of pharmacy', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->

<div class="box-body">
    <div class="form-group">
        {{ Form::label('numerotel', 'Phone Number of Pharmacy', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('numerotel', null, ['class' => 'form-control box-size', 'placeholder' => 'phone number of pharmacy', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->

<div class="box-body">
    <div class="form-group">
        {{ Form::label('amplitude', 'Amplitude of Pharmacy', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('amplitude', null, ['class' => 'form-control box-size', 'placeholder' => 'amplitude of pharmacy', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->

<div class="box-body">
    <div class="form-group">
        {{ Form::label('altitude', 'Altitude of Pharmacy', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('altitude', null, ['class' => 'form-control box-size', 'placeholder' => 'altitude of pharmacy', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->






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
