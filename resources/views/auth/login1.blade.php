@extends('layouts.siteLayouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@include('layouts.appLayouts.head')
<body>

<main class="main">
    <div class="section-box">
        <div class="container">
            <div class="mb-30  ">
                <div class="col-lg-4 col-md-4 col-sm-6 mx-auto">
                    <div class="form-login-cover ">
                        <div class="text-center">
                            <h2 class=" mb-5 text-brand-1">BIENVENUE!</h2>
                        </div>
                        <form class="login-register text-start mt-20" action="#">
                            <div class="form-group">
                                <label class="form-label" for="input-1">Adresse e-mail</label>
                                <input class="form-control" id="input-1" type="text" required="" style="border-radius: 15px" name="fullname" placeholder="Steven Job">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="input-4">Mot de passe</label>
                                <input class="form-control border-radius" id="input-4 " type="password" style="border-radius: 15px" required="" name="password" placeholder="************">
                            </div>
                            <div class="login_footer form-group d-flex justify-content-between">
                                <button class="btn btn-primary mr-30 " type="submit" name="login"  style="border-radius: 15px">Connexion</button>
                                <a class="mt-2 hover-up " href="#">Mot de passe oublié</a>
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="divider-text-center"><span></span></div>
                            <div class="text-muted text-center">Nouveau client ? <a href="register.html" class="ml-50">S'inscrire ici</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('layouts.appLayouts.footer')
</body>
</html>