@extends('ferrobet')
@section('title')
{{$title}}
@endsection

@section('content')

    <!-- Page Content -->
    <div class="container container-body">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1>Puntos de venta</h1>
            </div>
        </div>
        <!-- /.row -->

    <div class="row">
    <!-- Busqueda -->
        <div class="col-sm-6 col-md-4">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Ingrese País/Ciudad/Comercio">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                  </span>
                </div><!-- /input-group -->
        

    <!-- Ficha punto de venta -->
            <div class="puntodeventa-color">
                <p><strong>Nuñez galardo Sergio Ariel</strong><br>
                C.A.B.A<br>
                Yrigoyen Hipólito 2440 piso: PB Dpto: B</p>
                <button class="btn btn-success"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></button>
            </div>
            <div class="puntodeventa-color">
                <p><strong>Muños Omar Victor</strong><br>
                Adela María<br>
                Mariano Moreno 335<br>
                03585-421777/15590514</p>
                <button class="btn btn-success"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></button>
            </div>
            <div class="puntodeventa-color">
                <p><strong>Vera Day Ileana Noel</strong><br>
                Adelia María<br>
                Dr Fodor 485<br>
                0358-156012592</p>
                <button class="btn btn-success"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></button>
            </div>
        </div><!-- /.col-sm-6 col-md-4 -->
    <!-- Plano -->
        <div class="col-sm-6 col-md-8">
            <img class="img-responsive" src="img/mapa-tempo.png">
        </div>
    </div>
    
    </div>
@endsection