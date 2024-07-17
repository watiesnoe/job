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
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <h4 align="center">Statut de l’abonnement</h4>
                                            <div class="data">
                                                <div class="">
                                                    <div class="amount" ALIGN="CENTER"><span class="badge badge-dim bg-primary rounded-pill">En cours</span></div>
                                                </div>
                                                <div class="info  " align="center">
                                                    <button class=" btn btn-light">Modifier mon abonnement</button>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <h4 align="center">Dernière facturation</h4>
                                            <div class="data">
                                                <div class="">
                                                    <div class="amount" ALIGN="CENTER"><SPAN CLASS="text-primary">80</SPAN></div>
                                                </div>
                                                <div class="info  " align="center">
                                                    <button class=" btn btn-light">Voir mes factures</button>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection




