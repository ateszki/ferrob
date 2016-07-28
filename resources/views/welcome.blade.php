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
                @foreach($categorias as $categoria)
                <div class="col-md-4">
                    <div class="row"><!-- Picto -->
                     <img class="img-responsive center-block img-circle" src="{{URL::to('img/'.$categoria->picto.'.png')}}" alt="esmaltes">
                    </div>
                    <h4 class="service-heading">{{$categoria->nombre}}</h4>
                    @foreach($categoria->productos as $producto)
                    <p class="text-muted"><a href="#">{{$producto->nombre}}</a><br>
                    {{$producto->descripcion}}</p>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection