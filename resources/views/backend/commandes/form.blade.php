
<div class="form-group">


    <div class="col-lg-10">
        {{ Form::label('nproduct', 'nproduct', ['class' => 'col-lg-2 control-label required']) }}
        <select multiple="multiple" name="products[]" id="productSelect" class="form-control tags box-size" style="margin-left: 191px; margin-top:15px;">
            @foreach($commandeProducts as  $commandeProduct)
                <option value="{{$commandeProduct->id}}" >{{$commandeProduct->nproduct}}</option>
            @endforeach
        </select>
    </div><!--col-lg-10-->
</div><!--form control-->


    <div class="col-lg-10">
        {{ Form::label('livred_by', 'Transporter', ['class' => 'col-lg-2 control-label required']) }}
        <select name="livred_by" class="form-control tags box-size" style="margin-left: 177px; margin-bottom: 50px;" />
        @foreach($users as $one)
            <option value="{{ $one->id }}" >{{ $one->name }}</option>
        @endforeach
    </div>

{{ Form::label('livred_by', 'Transporter', ['class' => 'col-lg-2 control-label required']) }}
<input type="date" id="livred_at" name="livred_at" value="livred_at" style="margin-left: 180px;"/>

    @section("after-scripts")
    <script type="text/javascript">

        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        var values = [];
        function setValue() {
            $('#productSelect').val(values)
        }
        $( document ).ready( function() {
            $('#productSelect').change(function(e) {

        console.log(values);
                let pq = prompt('Select Product quantity ?');
                let newVal = $(this).val()+'-'+pq
                values.push(newVal)
                $(this).find('option[value="'+$(this).val()+'"').val(newVal)
                $(this).find('option[value="'+newVal+'"').attr('selected', true)



            })

            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
