@extends('frontend.layouts.app')

@section('title'){{ 'Details ',$commande->id }}@endsection

@section('content')
    <label style="color:red;">ID : </label>  {!! $commande->id !!}
    <br />
    <label style="color:green;">Products purshsed :</label> <br/>
    <ul>


        @php $Total=0 @endphp
        @php $Tva=0 @endphp
        @php $TotalTva=0@endphp
            @foreach($commande->products as $pr)
           <li>{{$pr->nproduct}} : {{$pr->pivot->qte}} pieces</li>
           <li> COST: {{$Cost=$pr->price*$pr->pivot->qte}} TND</li>
            @php $Total=$Total+($pr->price*$pr->pivot->qte) ;@endphp
            @php $Tva=($Total*19)/100; @endphp

       @endforeach
        <hr/>
        <label style="color:green;">Total without TVA</label>  = {{$Total}} TND <br/>
             <label style="color:red;">TVA</label>= {{$Tva}} TND <br/>
        <label style="color:blue;"> Total with TVA</label>     ={{$Total+$Tva}} TND
    </ul>



    <br/>
    <br/>
    <br/>
    <button class ="hide-from-printer" onClick="window.print()">Genérer la facture</button>
@endsection