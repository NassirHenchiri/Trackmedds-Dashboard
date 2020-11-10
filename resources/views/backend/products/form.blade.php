<div class="box-body">
    <div class="form-group">
        {{ Form::label('nproduct', 'Product Name', ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            {{ Form::text('nproduct', null, ['class' => 'form-control box-size', 'placeholder' => 'name of product', 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form control-->
</div><!--box-body-->


<div class="form-group">
    {{ Form::label('featured_image', 'Product Image', ['class' => 'col-lg-2 control-label required']) }}
    @if(!empty($product->featured_image))
        <div class="col-lg-1">
            <img src="{{ Storage::disk('public')->url('img/product/' . $product->featured_image) }}" height="80" width="80">
        </div>
        <div class="col-lg-5">
            <div class="custom-file-input">
                <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
            </div>
        </div>
    @else
        <div class="col-lg-5">
            <div class="custom-file-input">
                <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
            </div>
        </div>
    @endif
</div><!--form control-->
<div class="form-group">
    {{ Form::label('status', 'Product Catégories', ['class' => 'col-lg-2 control-label required']) }}

    <div class="col-lg-5">
        {!! Form::select('status', ["Cardiologie" => "Cardiologie", "Antimycosiques" => "Antimycosiques" , "Antiviraux"=>"Antiviraux" , "Antilépreux"=>"Antilépreux"], null, ["class" => "search-input-select form-control", "data-column" => 1, "placeholder" => "All categories"]) !!}
    </div><!--col-lg-3-->
</div><!--form control-->

<div class="form-group">
    {{ Form::label('quantité', 'Quantity', ['class' => 'col-lg-2 control-label required']) }}
    <div class="col-lg-5">
        {{ Form::text('quantité', null, ['class' => 'form-control box-size', 'placeholder' => 'Quantity', 'required' => 'required']) }}
    </div><!--col-lg-10-->
</div><!--form control-->


<div class="form-group">
    {{ Form::label('price', 'Price TND', ['class' => 'col-lg-2 control-label required']) }}
    <div class="col-lg-5">
        {{ Form::text('price', null, ['class' => 'form-control box-size', 'placeholder' => 'INSERT THE PRICE HERE', 'required' => 'required']) }}
    </div><!--col-lg-10-->
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
