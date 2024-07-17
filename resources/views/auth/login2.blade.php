
@include('layouts.appLayouts.head')
<body>

<main class="main">
    <div class="section-box">
        <div class="container">
            <div class="mb-30  ">
                <div class="col-lg-4 col-md-4 col-sm-6 mx-auto">
                    <div class="form-login-cover bg-white ">
                        <div class="text-center">
                            <h2 class=" mb-5 text-brand-1">BIENVENUE!</h2>
                        </div>
                        <form method="POST" action="{{ route('login')}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="row mb-0">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-primary mr-30" style="border-radius: 15px">
                                        {{ __('Connexion') }}
                                    </button>
                                    {{--<button class="btn btn-primary mr-30 " type="submit" name="login"  >Connexion</button>--}}
                                    <a class="mt-2 hover-up " href="#">Mot de passe oublié</a>
                                    <div class="divider-text-center"><span></span></div>
                                    <div class="text-muted text-center">Nouveau client ? <a href="{{route('recruteurs.index')}}" class="ml-50">S'inscrire ici</a></div>
                                </div>
                            </div>
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