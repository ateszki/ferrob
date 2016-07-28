@extends('ferrobet')
@section('title')
{{$title}}
@endsection

@section('content')
<!-- Header -->
    <header>
        <div class="container container-body">
            <div class="intro-text">
                &nbsp;
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Productos</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="row"><!-- Picto -->
                     <img class="img-responsive center-block img-circle" src="{{URL::to('img/picto-esmalte.png')}}" alt="esmaltes">
                    </div>
                    <h4 class="service-heading">Esmaltes</h4>
                    <p class="text-muted"><a href="#">DUO EXPRESS ESMALTE CONVERTIDOR</a><br>
                    Brillante. Secado Ultra Rápido -Todo Metal</p>
                    <p class="text-muted"><a href="#">DUO CLASSIC ESMALTE CONVERTIDOR</a><br>
                    Esmalte convertidor de óxido para metales.</p>
                    <p class="text-muted"><a href="#">DUO EFECTOS ESPECIALES</a><br>
                    Para metales</p>
                </div>
                <div class="col-md-4">
                    <div class="row"><!-- Picto -->
                     <img class="img-responsive center-block img-circle" src="{{URL::to('img/picto-convert.png')}}"  alt="convertidores">
                    </div>
                    <h4 class="service-heading">Convertidores</h4>
                    <p class="text-muted"><a href="#">CONVERTIDOR DE OXIDO FERRO BET</a><br>
                    Para metales</p>
                    <p class="text-muted"><a href="#">FERRO BET FONDO</a><br>
                    Para galvanizado y aluminio.</p>
                </div>
                <div class="col-md-4">
                    <div class="row"><!-- Picto -->
                     <img class="img-responsive center-block img-circle" src="{{URL::to('img/picto-antiox.png')}}"  alt="antioxidos">
                    </div>
                    <h4 class="service-heading">Antióxidos y Complementos</h4>
                    <p class="text-muted"><a href="#">ANTIOXIDO FERROBET</a><br>
                    Fondo para superficies ferrosas</p>
                    <p class="text-muted"><a href="#">FERRO BET DESOXIDANTE</a><br>
                    Desoxidante y fosfatizante para metales.</p>
                    <p class="text-muted"><a href="#">DILUYENTE DUO EXPRESS</a><br>
                    Para diluir esmalte convertidor duo express</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection