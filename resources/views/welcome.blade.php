@extends('ferrobet')
@section('title')
{{$title}}
@endsection

@section('content')
<!-- Header -->
    <header class="en-grupos">
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
                    
                    <h4 class="service-heading">{{$categoria->nombre}}</h4>
                    @foreach($categoria->productos as $producto)
                    @if(file_exists(public_path().'/uploads/images/'.$producto->img_chica))
                    <div class="row"><!-- Picto -->
                     <a href="/producto/{{$producto->slug}}"><img border='none' class="img-responsive center-block img-circle" src="{{URL::to('uploads/images/'.$producto->img_chica)}}" alt="{{$producto->nombre}}"></a>
                    </div>
                    @endif
                    <p class="text-muted"><a href="/producto/{{$producto->slug}}">{{$producto->nombre}}</a><br>
                    {{$producto->descripcion}}</p>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection