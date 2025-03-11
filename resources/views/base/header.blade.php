<header id="headerQualityManagement" class="container-fluid">
    
    <div class="row align-items-center justify-content-between"> 
        <div class="col-auto">
            <a href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('img/bogota.png') }}" alt="Logo" width="130" height="130">
            </a>  
        </div>
        <div class="col-auto">  
            @auth
                <div class="d-flex align-items-center"> 
                    <p class="pt-3 text-white">
                        <a href="{{ route('home') }}" class="text-decoration-none text-white me-3">
                            <i class="bi bi-house me-2" style="font-size: 22px;"></i>  
                            Inicio
                        </a>
                    </p>
                    <p class="pt-3 px-3 text-white">
                        <i class="bi bi-person-circle me-2" style="font-size: 22px;"></i>  
                        {{ Auth::user()->name }}
                    </p>
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuUser" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu2"> 
                            <li><a class="dropdown-item" href="{{ url('/logout') }}">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</header>