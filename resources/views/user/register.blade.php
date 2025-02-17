@extends('base.base')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- El div contenedor de la sección de login -->
        <div class="col-12 col-md-6 mx-auto position-relative">
            <!-- Panel de login -->
            <div class="card">
                <div class="card-body toggle-panel">
                    <form method="POST" action="{{ route('Register') }}">
                        @csrf
                        <div class="mb-3 text-center">
                            <img src="{{ asset('img/originals/logov.png') }}" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="input-group-text" onclick="showPassword()">
                                    <i class="bi bi-eye-fill" id="showIconPass"></i>
                                    <i class="bi bi-eye-slash" id="hideIconPass" style="display: none;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">
                                Registrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection