@extends('layouts.siteLayouts.app')


@section('content')
    <section class="section-box mt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-2 mb-40">
                    <h3 class="mt-5 mb-10">QUELQUES INFORMATIONS SONT NÉCESSAIRES</h3>
                    <form class="contact-form-style mt-30" id="contact-form" action="#" method="post">
                        <div class=" wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                            <div class="col-lg-12 col-md-12">
                                <label for="">Quel est votre prenom ? <span class="text-danger">*</span></label>
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="name" placeholder="Prénom" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label for="">Quel est votre prenom ? <span class="text-danger">*</span></label>
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="company" placeholder="Prénom" type="text">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label for="">Quel est votre nom ? <span class="text-danger">*</span></label>
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="email" placeholder="Nom" type="email">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label for="">Quel est votre email pro ? <span class="text-danger">*</span></label>
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Email" type="tel">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label for="">Quel est votre numéro de téléphone ? <span class="text-danger">*</span></label>
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Téléphone" type="tel">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <label for="">Lieu d'intervention <span class="text-danger">*</span></label>
                                <div class="input-style mb-20">
                                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Lieu d'intervention" type="tel">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">

                                <a class="btn btn-default btn-shadow  form-control" href="{{route('abonnement')}}">Suivant</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
