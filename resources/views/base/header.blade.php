<header id="headerQualityManagement" class="container-fluid">
    
    <div class="row align-items-center justify-content-between">  <div class="col-auto">  <img class="img-fluid" src="{{ asset('img/bogota.png') }}" alt="Logo" width="130" height="130">
    </div>
    <div class="col-auto">  
        @auth
            <div class="d-flex align-items-center">  
                <p class="pt-3 px-3">
                    <i class="bi bi-person-circle icono-usuario me-2"></i>  
                    {{ Auth::user()->name }}
                </p>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuUser" data-bs-toggle="dropdown" aria-expanded="false"></button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2"> 
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Cerrar Sesión</a></li>
                    </ul>
                </div>
            </div>
        @endauth
    </div>
</header>