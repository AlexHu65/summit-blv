<nav class="navbar navbar-expand-lg navbar-light mov">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{url('paquetes')}}">Paquetes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="#contacto">Contacto</a>
        </li>
    </ul>
</div>
</nav>
<div class="row">
    <div class="col">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="logo text-center p-5 mb-3">
                <img src="{{asset('images/logo.png')}}" alt="Summit Brlvrd">
            </div>
            <nav class="d-flex justify-content-around align-items-center menu-nav desk">
                <a href="{{url('/')}}">Inicio</a>
                <a href="#servicios">Servicios</a>
                <a href="{{url('paquetes')}}">Paquetes</a>
                <a href="#contacto">Contacto</a>
            </nav>


        </div>
    </div>
</div>
<div class="row {{isset($paquetes) ? 'dn' : ''}}">
    <div class="col desk p-5 d-flex justify-content-center">
        <div class="banner text-center relative">
            <div  style="top: 285px;left: 315px;" class="absolute animated pulse infinite">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                    Ver video <i class="fas fa-play"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col mov p-5 d-flex justify-content-center">
        <div class="text-center">
            <img src="{{asset('images/banner1.png')}}">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                Ver video <i class="fas fa-play"></i>
            </button>
        </div>
    </div>
</div>
