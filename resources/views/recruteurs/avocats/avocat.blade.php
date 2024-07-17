
@extends('layouts.siteLayouts.app')
@section('content')
    <!-- partial:index.partial.html -->
    <!-- Multi step form -->
    <section class="section-box mt-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h4 class="card-title">QUELQUES INFORMATIONS SONT NÉCESSAIRES</h4>
                        </div>
                        <div class="card-body p-20">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <!-- your steps here -->

                                    <div class="step" data-target="#logins-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Logins</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#information-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Various information</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                        <div class="row wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Quel est votre prenom ? <span class="text-danger">*</span></label>
                                                <div class="input-style mb-20">
                                                    <input class="font-sm color-text-paragraph-2" name="name" placeholder="Prénom" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Quel est votre prenom ? <span class="text-danger">*</span></label>
                                                <div class="input-style mb-20">
                                                    <input class="font-sm color-text-paragraph-2" name="company" placeholder="Prénom" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Quel est votre nom ? <span class="text-danger">*</span></label>
                                                <div class="input-style mb-20">
                                                    <input class="font-sm color-text-paragraph-2" name="email" placeholder="Nom" type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Quel est votre email pro ? <span class="text-danger">*</span></label>
                                                <div class="input-style mb-20">
                                                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Email" type="tel">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Quel est votre numéro de téléphone ? <span class="text-danger">*</span></label>
                                                <div class="input-style mb-20">
                                                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Téléphone" type="tel">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <label for="">Lieu d'intervention <span class="text-danger">*</span></label>
                                                <div class="input-style mb-20">
                                                    <input class="font-sm color-text-paragraph-2" name="phone" placeholder="Lieu d'intervention" type="tel">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <button class="btn btn-default btn-shadow " onclick="stepper.next()">Suivant</button>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection




