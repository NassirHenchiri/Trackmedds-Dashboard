
<div class="form-group">
    {{ Form::label('nompharmacie', 'Pharmacy Name', ['class' => 'col-lg-2 control-label required']) }}

    <div class="col-lg-5">
        {!! Form::select('status', ["PHARMACIE HAMDI" => "PHARMACIE HAMDI", "Pharmacie JALLOUL JAMEL 
" => "Pharmacie JALLOUL JAMEL" , "pharmacie mohamed ali"=>"pharmacie mohamed ali" , "Pharmacie Saadia Belabed"=>"Pharmacie Saadia Belabed"
, "Pharmacie Azzabi Nasreddine"=>"Pharmacie Azzabi Nasreddine"
, "Pharmacie KILANI RAFIKA"=>"Pharmacie KILANI RAFIKA"
, "Pharmacie Bechraoui Ahmed "=>"Pharmacie Bechraoui Ahmed "
, "pharmacie smaoui yassine"=>"pharmacie smaoui yassine"
, "jabnoun med"=>"jabnoun med"
], null, ["class" => "search-input-select form-control", "data-column" => 1, "placeholder" => "All Pharmacies"]) !!}
    </div><!--col-lg-3-->
</div><!--form control-->


<div class="box-body">
    <div class="form-group">
        {{ Form::label('nomproduit', 'nomproduit', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('nomproduit', null, ['class' => 'form-control box-size', 'placeholder' => 'name of product', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->



<div class="box-body">
    <div class="form-group">
        {{ Form::label('quantite', 'Quantity', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('quantite', null, ['class' => 'form-control box-size', 'placeholder' => 'quantity of product', 'required' => 'required']) }}
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
