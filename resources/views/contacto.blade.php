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
                <h1>Contacto</h1>
            </div>
        </div>
        <!-- /.row -->

<!-- Contenido principal Row -->
<div class="container">
<div class="row">
<div class="row">
<div class="col-lg-12">
<form id="contactForm" novalidate="" name="sentMessage">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input id="name" class="form-control" type="text" data-validation-required-message="Ingrese su nombre y apellido por favor." required="" placeholder="Nombre y Apellido *" aria-invalid="false">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input id="email" class="form-control" type="email" data-validation-required-message="Ingrese su dirección de email por favor." required="" placeholder="Email *">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                <input id="phone" class="form-control" type="tel" data-validation-required-message="Ingrese su número de teléfono por favor." required="" placeholder="Teléfono *">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <textarea id="message" class="form-control" rows="6" data-validation-required-message="Ingrese aquí su mensaje por favor." required="" placeholder="Mensaje *" aria-invalid="false"></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
    <div class="clearfix"></div>
        <div class="col-lg-12 text-center">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>  
</div>
@endsection