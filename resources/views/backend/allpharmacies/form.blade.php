<div class="box-body">
<div class="form-group">
        {{ Form::label('adress', 'Adress', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('adress', null, ['class' => 'form-control box-size', 'placeholder' => 'Insert your adress', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

        <div class="form-group">
            {{ Form::label('ville', 'Town', ['class' => 'col-lg-2 control-label required']) }}

            <div class="col-lg-10">
                {{ Form::text('ville', null, ['class' => 'form-control box-size', 'placeholder' => 'Insert amplitude', 'required' => 'required']) }}
            </div><!--col-lg-10-->
        </div><!--form control-->
    <div class="form-group">
        {{ Form::label('attitude', 'Altitude', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('attitude', null, ['class' => 'form-control box-size', 'placeholder' => 'Insert attitude', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->

    <div class="form-group">
        {{ Form::label('amplitude', 'Amplitude', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('amplitude', null, ['class' => 'form-control box-size', 'placeholder' => 'Insert amplitude', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="form-group">
        {{ Form::label('nom', 'Name', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('nom', null, ['class' => 'form-control box-size', 'placeholder' => 'Insert name pharmacy', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
    <div class="col-lg-10">
        {{ Form::label('Owner', '', ['class' => 'col-lg-2 control-label required']) }}
        <select name="user" class="form-control tags box-size" style="margin-left: 177px; margin-bottom: 50px;" />
        @foreach($users as $one)
            <option value="{{ $one->id }}" >{{ $one->name }}</option>
        @endforeach
    </div>

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
