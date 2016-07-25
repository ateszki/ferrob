@extends('ferrobet')
@section('title')
{{$title}}
@endsection

@section('content')
<!-- Contenido de producto -->
    <!-- Page Content -->
    <div class="container container-body">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1>DILUYENTE DUO EXPRESS</h1><br>
                <h3>Para diluir esmalte convertidor duo express</h3>
                <h4>• Brillante.<br>
                </h4>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contenido principal Row -->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <p> El DILUYENTE DUO EXPRESS® está diseñado especialmente para ser utilizado con el ESMALTE CONVERTIDOR DUO EXPRESS®, basado en la tecnología de parámetros de solubilidad.
                La novedosa resina acrílica 100 % del ESMALTE CONVERTIDOR DUO EXPRESS® de "SECADO ULTRA RAPIDO", que permite  terminar el trabajo de pintado en pocas horas; requiere del diluyente específico para obtener los mejores resultados. Resguardar la calidad de ESMALTE CONVERTIDOR DUO EXPRESS® y lograr su máxima performance, se manifiesta en respetar las instrucciones de preparación, aplicación y con la dilución recomendada, teniendo en cuenta que cada uno de los componentes del diluyente, han sido formulados en función del ESMALTE CONVERTIDOR DUO EXPRESS®.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                    <img class="img-responsive" src="{{URL::to('img/latavacia.png')}}"  alt="esmalte">
            </div>
            <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-0">
                <p>• Secado ultra rápido.<br>
                • Optimiza la durabilidad del acabado.<br>
                • Facilita la correcta aplicación.<br>
                • Mejora el pintado, favorece la nivelación, evitando marcas de pincel.<br>
                • No afecta el brillo.<br>
                • No modifica el secado.<br>
                • Utilizar para la limpieza de los elementos.<br>
                <strong>Presentación:</strong> 1/2 litro.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Aplicacion Row -->
        <div class="row aplicacion-color">
            <div class="col-sm-8 col-sm-offset-4"><!-- titulo -->
                <h3 class="h3-caracteristicas">APLICACIÓN DEL PRODUCTO</h3>
            </div>
            <div class="col-sm-4"><!-- Picto -->
                <img class="img-responsive center-block picto-caracteristicas" src="{{URL::to('img/picto-aplicacion.png')}}"  alt="aplicacion">
            </div>
            <div class="col-sm-8"><!-- texto -->
                <p>Se utiliza para diluir en aplicación a pincel, rodillo de pelo corto o soplete en ambientes abiertos y bien ventilados; y para la limpieza de los materiales utilizados.<br>
                Para usarlo en otros productos, consultar a nuestro Departamento Técnico.</p>
                
            </div>
        </div>
    </div>
        <!-- /.row -->
@endsection