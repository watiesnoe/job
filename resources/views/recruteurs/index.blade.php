@extends('layouts.siteLayouts.app')

@section('content')
    <section class="section-box mt-30">
        <div class="container-fluid" align="">
            <div class="row flex-row-">
                <div class="col-lg-6 offset-3 col-md-12  col-sm-12 col-12 float-right">
                    <div class="content-page">
                        <div class=" display-list t">
                            <a href="{{route('avocat')}}">
                                <div class="card-body hover-up box-shadow-bdrd-15">
                                    <h3 class="">AVOCATS</h3>
                                    <span>Collaborateur, associés</span>
                                </div>
                            </a>
                            <a href="{{route('huissiers')}}">
                                <div class="card-body hover-up box-shadow-bdrd-15 mt-10">
                                    <h3>HUISSIER DE JUSTICE</h3>
                                </div>
                            </a>
                            <a href="{{route('experts')}}">
                                <div class="card-body hover-up box-shadow-bdrd-15 mt-10">
                                    <h3>EXPERTS</h3>
                                    <span>Psycologue, expert médical..</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
