@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 40rem;">
            <h5 class="card-header text-center">{{ __('Registro') }}</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}" >
                    @csrf
                    <label for="name" class="form-label">Nombre</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping">Nombre y Apellido</span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <label for="email" class="form-label">Direccion Email</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="addon-wrapping">email@ejemplo.com</span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme su Contraseña') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="inlineRadio2" value="1">
                            <label class="form-check-label" for="inlineRadio2">Usuario</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">{{ __('Registrarse') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection