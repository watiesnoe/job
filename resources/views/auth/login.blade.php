
@include('layouts.appLayouts.head')
<body>

    <body class="nk-body bg-white npc-general pg-auth">
        <div class="nk-app-root">
            <!-- main @s -->
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                            <div class="brand-logo pb-4 text-center">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div>
                            <div class="card card-bordered">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h2 class=" mb-5 text-brand-1">BIENVENUE!</h2>
                                            
                                        </div>
                                    </div>
                                    <form action="html/index.html">
                                        <div class="form-group">
                                            <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12 ">
                                                <button type="submit" class="btn btn-primary " style="border-radius: 15px">
                                                    {{ __('Connexion') }}
                                                </button>
                                                {{--<button class="btn btn-primary mr-30 " type="submit" name="login"  >Connexion</button>--}}
                                                <a class="mt-2 hover-up m-2 p-5" href="#">Mot de passe oublié</a>
                                               
                                                <div class="text-muted mt-5">Nouveau client ? <a href="{{route('recruteurs.index')}}" class="ml-50">S'inscrire ici</a></div>
                                            </div>
                                        </div>
                                    </form>
                                
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- content @e -->
            </div>
            <!-- main @e -->
        </div>
        <!-- app-root @e -->
        <!-- JavaScript -->
    
    </body>   
@include('layouts.appLayouts.footer')
</body>
</html>