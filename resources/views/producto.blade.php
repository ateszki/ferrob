@extends('ferrobet')
@section('title')
{{$title}}
@endsection

@section('content')
    <div class="container container-body">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1>{{$producto->nombre}}</h1><br>
                <h3>{{$producto->descripcion}}</h3>
                <h4>• Terminación rústica.<br>
                    • Brillo Mate.
                </h4>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contenido principal Row -->
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <p>Ferrobet Esmalte Convertidor, Efectos Especiales, protege de la oxidación a los metales con una terminación rústica de brillo mate de alto nivel decorativo.
                En el caso de los forjados, utilizan en su formulación pigmentos de óxido de hierro micáceo, son químicamente inalterables, debido a la estructura laminar de su partícula que establece una barrera física que evita el paso del agua y sus sales; factores nocivos frente a la corrosión. Su elástica película no se cuartea ni resquebraja, conservando muy buena adherencia, sin ampollarse ni descascararse. Embellecen los metales ferrosos con un mínimo de mano de obra, sencilla aplicación y notable economía de producto, brindando una textura de especial estilo, tanto para exteriores como para interiores.</p>
            </div>
            <div class="col-sm-6 col-md-4">
                    <img class="img-responsive" src="{{URL::to((file_exists(public_path().'/uploads/images/'.$producto->img))?'uploads/images/'.$producto->img:'img/latavacia.png')}}"  alt="{{$producto->nombre}}">
            </div>
            <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-0">
                <p><strong>Rendimiento:</strong> 12 a 15 m²/lt. por mano, dependiendo del espesor, de la dilución, de la rugosidad de la superficie.<br>
                <br>
                <strong>Tiempos de secado:</strong> Al tacto 2-4 hs., entre manos 8 hs., dependiendo de la temperatura y humedad ambiente, espesor aplicado, dilución utilizada.<br>
                <br>
                <strong>Limpieza de las herramientas utilizadas:</strong> limpiar antes que seque la pintura, con el solvente de dilución correspondiente.<br>
                <br>
                <strong>Colores y terminación:</strong> ver carta de colores. Se puede agregar entonadores universales hasta 37,5 cm³ ó 1 oz fl por litro de sistemas tintométricos. </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Preparacion Row -->
        <div class="row preparacion-color">
            <div class="col-sm-8 col-sm-offset-4"><!-- titulo -->
                <h3 class="h3-caracteristicas">PREPARACIÓN DE LA SUPERFICIE</h3>
            </div>
            <div class="col-sm-4"><!-- Picto -->
                <img class="img-responsive center-block picto-caracteristicas" src="{{URL::to('img/picto-preparacion.png')}}"  alt="preparacion">
            </div>
            <div class="col-sm-8"><!-- texto -->
                <p><strong>Preparación del metal:</strong> Las superficies deben estar limpias, secas, libres de grasitud, polvo, pintura, óxidos sueltos o de laminación.<br>
                <strong>Metal nuevo:</strong> desengrasar, lavar, secar, aplicar Ferrobet Desoxidante Fosfatizante.<br>
                <strong>Metal con óxido profundo:</strong> remover con cepillo de alambre, lijar, aplicar Ferrobet Desoxidante Fosfatizante.<br>
                <strong>Con pintura en buen estado:</strong> limpiar, aplicar Ferrobet esmalte convertidor efectos especiales, según la terminación elegida.<br>
                <strong>Con pintura en mal estado:</strong> eliminarla por acción mecánica o utilizando Removedor Gel Petrilac, limpiar y aplicar Ferrobet esmalte convertidor Efectos Especiales.<br>
                <strong>Con esmalte sintético:</strong> si está en buen estado, lijar hasta la eliminación de brillo, luego aplicar Efectos Especiales. Si el esmalte sintético está descascarado o cuarteado dejando ver el metal por zonas, eliminarlo completamente con Removedor Gel Petrilac, lavar, enjuagar y continuar con Efectos Especiales.</p>
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
                <p>Ferrobet Esmalte Convertidor, Efectos Especiales, protege de la oxidación a los metales con una terminación rústica de brillo mate de alto nivel decorativo.
                En el caso de los forjados, utilizan en su formulación pigmentos de óxido de hierro micáceo, son químicamente inalterables, debido a la estructura laminar de su partícula que establece una barrera física que evita el paso del agua y sus sales; factores nocivos frente a la corrosión. Su elástica película no se cuartea ni resquebraja, conservando muy buena adherencia, sin ampollarse ni descascararse. Embellecen los metales ferrosos con un mínimo de mano de obra, sencilla aplicación y notable economía de producto, brindando una textura de especial estilo, tanto para exteriores como para interiores.</p>
                
                <p><strong>Instrucciones de uso:</strong> Mezclar bien antes de usar. Aplicar mínimo 2 manos- sin diluir- para alcanzar óptimos resultados. Adicionar de ser necesario, hasta 10% de aguarrás de buena calidad para aplicación a pincel o hasta 30% de aguarrás o thinner universal para soplete.</p>

                <p><strong>Aplicación:</strong> rejas y marcos, usar pincel o rodillo pelo corto. Portones y puertas, a soplete.<br>
                En superficies planas grandes aplicar “únicamente” a soplete para lograr una buena distribución de los aditivos, tanto para evitar la oxidación como para obtener un efecto especial sin marcas(que las originan el pincel o el rodillo).<br> 
                <strong>Lijado entre manos:</strong> No requiere.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>

@endsection