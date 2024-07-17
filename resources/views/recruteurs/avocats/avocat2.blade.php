@extends('layouts.siteLayouts.app')
@section('content')
<!-- partial:index.partial.html -->
<!-- Multi step form -->
<section class="multi_step_form  section-box mt-70">
    <form id="msform">
        <!-- progressbar -->
    {{--<ul id="progressbar">--}}
    {{--<li class="active">Verify Phone</li>--}}
    {{--<li>Upload Documents</li>--}}
    {{--<li>Security Questions</li>--}}
    {{--</ul>--}}
    <!-- fieldsets -->
        <fieldset>
            <h2 class="mb-10">QUELQUES INFORMATIONS SONT NÉCESSAIRES</h2>
            <div class="form-row">
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
            </div>
            <div class="done_text">
                <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
                <h6>A secret code is sent to your phone. <br>Please enter it here.</h6>
            </div>
            <div class="code_group">
                <input type="text" class="form-control" placeholder="0">
                <input type="text" class="form-control" placeholder="0">
                <input type="text" class="form-control" placeholder="0">
                <input type="text" class="form-control" placeholder="0">
            </div>
            <button type="button" class="action-button previous_button">Back</button>
            <button type="button" class="next action-button">Continue</button>
        </fieldset>
        <fieldset>
            <h3>Verify Your Identity</h3>
            <h6>Please upload any of these documents to verify your Identity.</h6>
            <div class="passport">
                <h4>Govt. ID card <br>PassPort <br>Driving License.</h4>
                <a href="#" class="don_icon"><i class="ion-android-done"></i></a>
            </div>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="upload">
                    <label class="custom-file-label" for="upload"><i class="ion-android-cloud-outline"></i>Choose file</label>
                </div>
            </div>
            <ul class="file_added">
                <li>File Added:</li>
                <li><a href="#"><i class="ion-paperclip"></i>national_id_card.png</a></li>
                <li><a href="#"><i class="ion-paperclip"></i>national_id_card_back.png</a></li>
            </ul>
            <button type="button" class="action-button previous previous_button">Back</button>
            <button type="button" class="next action-button">Continue</button>
        </fieldset>
        <fieldset>
            <h3>Create Security Questions</h3>
            <h6>Please update your account with security questions</h6>
            <div class="form-group">
                <select class="product_select">
                    <option data-display="1. Choose A Question">1. Choose A Question</option>
                    <option>2. Choose A Question</option>
                    <option>3. Choose A Question</option>
                </select>
            </div>
            <div class="form-group fg_2">
                <input type="text" class="form-control" placeholder="Anwser here:">
            </div>
            <div class="form-group">
                <select class="product_select">
                    <option data-display="1. Choose A Question">1. Choose A Question</option>
                    <option>2. Choose A Question</option>
                    <option>3. Choose A Question</option>
                </select>
            </div>
            <div class="form-group fg_3">
                <input type="text" class="form-control" placeholder="Anwser here:">
            </div>
            <button type="button" class="action-button previous previous_button">Back</button>
            <a href="#" class="action-button">Finish</a>
        </fieldset>
    </form>
</section>
@endsection