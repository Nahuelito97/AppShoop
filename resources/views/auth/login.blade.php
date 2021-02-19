@extends('layouts.app')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{ asset('img/city.jpg') }}'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div class="card card-signup">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="header header-primary text-center">
                            <h4>Inicio de sesión</h4>
                        </div>
                        <p class="text-divider">Ingresa tus datos</p>
                        <div class="content">

                            <div class="group-material-login">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" maxlength="70" placeholder="Ingrese su correo electronico...">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="highlight-login"></span>
                                <span class="bar-login"></span>
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
                  
                              </div>
                              <br>
                              <div class="group-material-login">
                                <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" maxlength="70"
                                placeholder="Ingrese su contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="highlight-login"></span>
                                <span class="bar-login"></span>
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
                  
                              </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordar sesión
                                </label>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-simple btn-primary btn-lg">Ingresar</button>
                        </div>
                        <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection
