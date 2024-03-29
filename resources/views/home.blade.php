@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tablero') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->tipo == 0 )
                        {{ __('Bienvenido Administrador!') }}
                    @else
                        {{ __('Bienvenido Usuario!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
