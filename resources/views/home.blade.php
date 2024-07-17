@extends('layouts.siteLayouts.app')

@section('content')
    <section class="section-box mt-70">
        <div class="banner-hero hero-1 ">
            <div class="banner-inner">

                <div class="box-search-2">

                    <div class="block-banner form-none-shadow  pl-40 ">
                        <h4 CLASS="mb-4">RETROUVER TOUTES NOS OFFRES D'EMPLOI</h4>
                        <div class=" form-find wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                            <form>
                                <input class="mr-10" type="text" placeholder="Rechercher par metier">
                                <input class="mr-10" type="text" placeholder="Domaine">
                                <input class="form-control" type="text" placeholder="Lieu">
                                <button class="btn ml-10  btn-primary   font-sm">Rechercher</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-box mt-30">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 float-right">
                    <div class="content-page">
                        <div class="row display-list">

                            <div class="col-xl-12 col-12">
                                <div class="card-grid-2 hover-up">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                                <div class="right-info"><a class="name-job" href="">Stagiaire IP/IT</a>
                                                    <span class="">CMS Francis Lefebvre</span></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Stage</span></div>
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;IP/IT</span></div>
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Paris,75 </span></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-15 mt-10 "><a class="btn btn-grey-small mr-5" href="#">Stage de 6mois</a><a class="btn btn-grey-small mr-5" href="#">Téletravail</a></div>
                                                <div class="mb-15 mt-10 "><a class="btn btn-grey-small mr-5" href="#">De 2200 à 2300 € par mois</a></div>

                                                <div  align="right" class="detaill-a-hover">
                                                    <a href="{{route('offres.show',1)}}" class="" style=""><span class="" > <i class="fas fa-angle-right color-black"></i></span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-12">
                                <div class="card-grid-2 hover-up">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                                <div class="right-info"><a class="name-job" href="">Stagiaire IP/IT</a>
                                                    <span class="">CMS Francis Lefebvre</span></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Stage</span></div>
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;IP/IT</span></div>
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Paris,75 </span></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-15 mt-10 "><a class="btn btn-grey-small mr-5" href="#">Stage de 6mois</a><a class="btn btn-grey-small mr-5" href="#">Téletravail</a></div>
                                                <div class="mb-15 mt-10 "><a class="btn btn-grey-small mr-5" href="#">De 2200 à 2300 € par mois</a></div>

                                                <div  align="right" class="detaill-a-hover">
                                                    <a href="{{route('offres.show',1)}}" class="" style=""><span class="" > <i class="fas fa-angle-right color-black"></i></span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-12">
                                <div class="card-grid-2 hover-up">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="card-grid-2-image-left">
                                                <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                                <div class="right-info"><a class="name-job" href="">Stagiaire IP/IT</a>
                                                    <span class="">CMS Francis Lefebvre</span></div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-block-info">
                                        <div class="row">
                                            <div class="col">
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Stage</span></div>
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;IP/IT</span></div>
                                                <div class="mt-5"><span class=""> <i class="fas fa-user background-primary p-2 color-white" style="border-radius: 100%;"></i>&nbsp; &nbsp;Paris,75 </span></div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-15 mt-10 "><a class="btn btn-grey-small mr-5" href="#">Stage de 6mois</a><a class="btn btn-grey-small mr-5" href="#">Téletravail</a></div>
                                                <div class="mb-15 mt-10 "><a class="btn btn-grey-small mr-5" href="#">De 2200 à 2300 € par mois</a></div>

                                                <div  align="right" class="detaill-a-hover">
                                                    <a href="{{route('offres.show',1)}}" class="" style=""><span class="" > <i class="fas fa-angle-right color-black"></i></span></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="paginations">
                        <ul class="pager">
                            <li><a class="pager-prev" href="#"></a></li>
                            <li><a class="pager-number" href="#">1</a></li>
                            <li><a class="pager-number" href="#">2</a></li>
                            <li><a class="pager-number" href="#">3</a></li>
                            <li><a class="pager-number" href="#">4</a></li>
                            <li><a class="pager-number" href="#">5</a></li>
                            <li><a class="pager-number active" href="#">6</a></li>
                            <li><a class="pager-number" href="#">7</a></li>
                            <li><a class="pager-next" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="sidebar-shadow mb-30">
                        <div class="sidebar-filters">
                            <div class="filter-block mb-20">
                                <h5 class="medium-heading mb-15">FILTRES</h5>
                                <div class="form-group">
                                    <ul class="list-checkbox">
                                        <li>
                                            <b class="font-bold">Télétravail </b>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">Téletravail total</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">Télétravail partiel</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">Pas de travail</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <ul class="list-checkbox">
                                        <li>
                                            <b class="font-bold">Date de la publication</b>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">Derneire 24 heures</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">3 derneirs jours</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">7 Derniers jours</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">15 derneirs jours</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter-block mb-20">
                                <h5 class="medium-heading mb-25">Salire </h5>
                                <div class="list-checkbox pb-20">
                                    <div class="row position-relative mt-10 mb-20">
                                        <div class="col-sm-12 box-slider-range">
                                            <div id="slider-range"></div>
                                        </div>
                                        <div class="box-input-money">
                                            <input class="input-disabled form-control min-value-money" type="text" name="min-value-money" disabled="disabled" value="">
                                            <input class="form-control min-value" type="hidden" name="min-value" value="">
                                        </div>
                                    </div>
                                    <div class="box-number-money">
                                        <div class="row mt-30">
                                            <div class="col-sm-6 col-6"><span class="font-sm color-brand-1">$0</span></div>
                                            <div class="col-sm-6 col-6 text-end"><span class="font-sm color-brand-1">$500</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-block mb-30">
                                <h5 class="medium-heading mb-10">Taille du cabinet</h5>
                                <div class="form-group">
                                    <ul class="list-checkbox">
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox" checked="checked"><span class="text-small">0-3 avocats</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">3-10 avocats</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">10- 50 avocats</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="cb-container">
                                                <input type="checkbox"><span class="text-small">+ 50 avocats</span><span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="btn btn-primary text-center">Enlever les filter</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
