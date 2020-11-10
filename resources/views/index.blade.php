<!DOCTYPE html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <body>



            <div class="container">
                <div style="text-align:center" >
                Statistiques des quantités par rapport les produits dans le stock de la pharmacie centrale
                </div>

                {!! $hRate->container() !!}



                {!! $hRate->script() !!}
           </div>

            <div class="container">
                <div style="text-align:center" >
                Statistiques des quantités par rapport les produits qui sont commandés
                </div>

                {!! $rRate->container() !!}



                {!! $rRate->script() !!}


                

              



            </div>

            <div class="container">
                <div style="text-align:center" >
                Statistiques des nombres de reclamations par rapport les produits 
                </div>

                {!! $sRate->container() !!}



                {!! $sRate->script() !!}


                

              



            </div>


            

            
            

    </body>
</html>
