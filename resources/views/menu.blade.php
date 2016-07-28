    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/"><img alt="Ferrobet" src="{{URL::to('img/ferrobet-logo.png')}}" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="btn-group navbar-right" role="group" aria-label="...">
                <ul class="nav navbar-nav navbar-right">
                  @foreach($categorias as $categoria)
                    <li>
                  <div class="btn-group">
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$categoria->nombre}} <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        @foreach($categoria->productos as $producto)
                        <li><a href="/producto">{{$producto->nombre}}</a></li>
                        @endforeach
                      </ul>
                  </div>
                    </li>
                    @endforeach
                  </ul>
                
                <div class="btn-group top-menu" role="group" aria-label="...">
                      <ul class="nav navbar-nav navbar-right">
                    
                        <li></li>
                            <a  class="btn btn-default" href="/puntos-de-venta">Puntos de Venta</a>
                        <li></li>
                            <a class="btn btn-default" href="https://www.youtube.com/watch?v=Kdj9CtpQKl4" target="_blank">Videos</a>
                        <li></li>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contacto<span class="caret"></span>
                          </button>
                            <ul class="dropdown-menu">
                                <li><a href="/contacto">Ventas</a></li>
                                <li><a href="/contacto">Administración</a></li>
                                <li><a href="/contacto">Planta</a></li>
                                <li><a href="/contacto">Depósito</a></li>
                                <li><a href="/contacto">Asesoramiento</a></li>
                                <li><a href="/contacto">Ventas Profesionales</a></li>
                                <li><a href="/contacto">Recursos Humanos</a></li>
                            </ul>
                      </ul>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>       </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>