@extends('layouts.appLayouts.app')

@section('content')
    <div class="box-content">
        <div class="box-heading">
            <div class="box-title">
                <h3 class="mb-35">Votre annuaire de JUSTICE</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row mb-10">
                    <div class="col-10">
                        <input class="form-control input-search" type="text" name="keyword" placeholder="Search">
                    </div>
                    <div class="col">
                        <select name="" id="" class="form-control">
                            <option >Filtres</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">Cour d'appel de ressort</label>
                            <input class="form-control" type="text" name="" placeholder="La cour d'appel de ressort de l'avocat">
                        </div>
                    </div>

                </div>
                <div class="card-grid-2 hover-up">

                    <div class="card-block-info">
                        <div class="row">
                            <div class="col">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd ml-10">
                                        <a href="candidate-details.html">
                                            <figure><img alt="jobBox" style="width: 70px;height: 70px" src="{{asset('assets/imgs/page/candidates/user1.png')}}"></figure>
                                        </a>
                                    </div>
                                    <div class="pt-10"  style="margin-left: -20px">
                                        <a href="candidate-details.html">
                                            <h5>Sahah Jhonson</h5>
                                        </a>
                                        <span class="font-xs color-text-mutted">Paris,75 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div  align="right" class="detaill-a-hover mt-50">
                                    <a href="{{route('offres.show',1)}}" class="" style=""><span class="" > <i class="fas fa-angle-right color-black"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-grid-2 hover-up">

                    <div class="card-block-info">
                        <div class="row">
                            <div class="col">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd ml-10">
                                        <a href="candidate-details.html">
                                            <figure><img alt="jobBox" style="width: 70px;height: 70px" src="{{asset('assets/imgs/page/candidates/user1.png')}}"></figure>
                                        </a>
                                    </div>
                                    <div class="pt-10"  style="margin-left: -20px">
                                        <a href="candidate-details.html">
                                            <h5>Sahah Jhonson</h5>
                                        </a>
                                        <span class="font-xs color-text-mutted">Paris,75 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div  align="right" class="detaill-a-hover mt-50">
                                    <a href="{{route('offres.show',1)}}" class="" style=""><span class="" > <i class="fas fa-angle-right color-black"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-grid-2 hover-up">

                    <div class="card-block-info">
                        <div class="row">
                            <div class="col">
                                <div class="card-grid-2-image-left">
                                    <div class="card-grid-2-image-rd ml-10">
                                        <a href="candidate-details.html">
                                            <figure><img alt="jobBox" style="width: 70px;height: 70px" src="{{asset('assets/imgs/page/candidates/user1.png')}}"></figure>
                                        </a>
                                    </div>
                                    <div class="pt-10"  style="margin-left: -20px">
                                        <a href="candidate-details.html">
                                            <h5>Sahah Jhonson</h5>
                                        </a>
                                        <span class="font-xs color-text-mutted">Paris,75 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div  align="right" class="detaill-a-hover mt-50">
                                    <a href="{{route('offres.show',1)}}" class="" style=""><span class="" > <i class="fas fa-angle-right color-black"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer mt-20">
            <div class="container">
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-25 text-center text-md-start">
                            <p class="font-sm color-text-paragraph-2">© 2022 - <a class="color-brand-2" href="https://themeforest.net/item/jobbox-job-portal-html-bootstrap-5-template/39217891" target="_blank">JobBox </a>Dashboard <span> Made by  </span><a class="color-brand-2" href="http://alithemes.com" target="_blank"> AliThemes</a></p>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center text-md-end mb-25">
                            <ul class="menu-footer">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection




