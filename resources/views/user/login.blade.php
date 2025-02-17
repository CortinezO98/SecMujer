@extends('base.base')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- El div contenedor de la sección de login -->
        <div class="col-12 col-md-6 mx-auto position-relative">
            <!-- Panel de login -->
            <div class="card">
                <div class="card-body toggle-panel">
                    <form method="POST" action="{{ route('post-login') }}">
                        @csrf
                        <div class="mb-3 text-center">
                            <img src="{{ asset('img/originals/logov.png') }}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mb-3">
                            <h1 class="text-center">Secretaría Distrital de la Mujer</h1>
                            <h3 class="text-center">Inicio de Sesión</h3>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="input-group-text" onclick="showPassword()">
                                    <i class="bi bi-eye-fill" id="showIconPass"></i>
                                    <i class="bi bi-eye-slash" id="hideIconPass" style="display: none;"></i>
                                </span>
                            </div>
                        </div>

                        @if ($errors->has('login'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('login') }}</strong>
                            </div>
                        @endif

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">
                                Iniciar Sesión
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection