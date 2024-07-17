@extends('layouts.appLayouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">BONJOUR MARINE!</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="form-icon form-icon-left">
                                            <em class="icon ni ni-search"></em>
                                        </div>
                                        <input type="text" class="form-control" id="default-03" placeholder="Rechercher un avocat">
                                    </div>
                                </div>

                            </div>
                            <div class="col-2">
                                <div class="form-group">

                                    <div class="form-control-wrap ">
                                        <div class="form-control-select">
                                            <select class="form-control" id="default-06">
                                                <option value="default_option">Default Option</option>
                                                <option value="option_select_name">Option select name</option>
                                                <option value="option_select_name">Option select name</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-sm-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="row" style="margin-top: -10px">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="gallery-body card-inner align-center justify-between flex-wrap ">
                                                <div class="col-4">
                                                    <div class="user-info">
                                                        <div class="col pt-1" >
                                                            <h4>Stage IP/IT</h4>
                                                            <span>6 mois</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3" >
                                                    <button class="btn btn-dim btn-outline-success btn-round">Terminée</button>
                                                </div>
                                                <div class="col-2" ALIGN="right">
                                                    <p>Il y'a deux jours</p>
                                                </div>
                                                <div class="col-3" ALIGN="right">
                                                    <div style="font-size: 25px;padding-top: 30px">
                                                        <em data-bs-toggle="modal" data-bs-target="#modalForm" class="icon ni ni-chevron-right-circle-fill icon-color"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-ecwg -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="row" style="margin-top: -10px">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="gallery-body card-inner align-center justify-between flex-wrap ">
                                                <div class="col-4">
                                                    <div class="user-info">
                                                        <div class="col pt-1" >
                                                            <h4>Stage IP/IT</h4>
                                                            <span>6 mois</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3" >
                                                    <button class="btn btn-dim btn-outline-danger btn-round">En pause</button>
                                                </div>
                                                <div class="col-2" ALIGN="right">
                                                    <p>Il y'a deux jours</p>
                                                </div>
                                                <div class="col-3" ALIGN="right">
                                                    <div style="font-size: 25px;padding-top: 30px">
                                                        <em data-bs-toggle="modal" data-bs-target="#modalForm" class="icon ni ni-chevron-right-circle-fill icon-color"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-ecwg -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="row" style="margin-top: -10px">
                                        <div class="nk-ecwg nk-ecwg6">
                                            <div class="gallery-body card-inner align-center justify-between flex-wrap ">
                                                <div class="col-4">
                                                    <div class="user-info">
                                                        <div class="col pt-1" >
                                                            <h4>Stage IP/IT</h4>
                                                            <span>6 mois</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3" >
                                                    <button class="btn btn-dim btn-outline-info btn-round">En cours</button>
                                                </div>
                                                <div class="col-2" ALIGN="right">
                                                    <p>Il y'a deux jours</p>
                                                </div>
                                                <div class="col-3" ALIGN="right">
                                                    <div style="font-size: 25px;padding-top: 30px">
                                                        <em data-bs-toggle="modal" data-bs-target="#modalForm" class="icon ni ni-chevron-right-circle-fill icon-color"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .nk-ecwg -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection




