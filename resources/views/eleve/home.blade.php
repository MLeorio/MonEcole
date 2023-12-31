@extends('base')

@section('title')
    Accueil ~ Eleve
@endsection

@section('menu')
    @include('eleve.nav-elev')
@endsection

@section('classe')
    {{ Session()->get('classe')['libelle'] }}
@endsection

@section('mobile-menu')
    @include('eleve.mobile-menu-elev')
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="{{ route('homeEle') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="analytics-sparkle-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>&Eacute;ffectif de la classe</h5>
                            <h2><span class="counter">{{ $fille }}</span> <span class="tuition-fees"
                                    style="font-weight: bold; color:black; font-size:large">Filles</span>
                            </h2>
                            <span class="text-success">{{ ($fille / $total) * 100 }}%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:{{ ($fille / $total) * 100 }}%;">
                                    <span class="sr-only">{{ ($fille / $total) * 100 }}% Complete</span>
                                    <!-- Pourcentage des filles sur le total -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>&Eacute;ffectif de la classe</h5>
                            <h2><span class="counter">{{ $garcon }}</span> <span class="tuition-fees"
                                    style="font-weight: bold; color:black; font-size:large">Gar&ccedil;ons</span>
                            </h2>
                            <span class="text-danger">{{ ($garcon / $total) * 100 }}%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:{{ ($garcon / $total) * 100 }}%;">
                                    <span class="sr-only">{{ ($garcon / $total) * 100 }}% Complete</span>
                                    <!-- Pourcentage des garcons sur le total -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                        <div class="analytics-content">
                            <h5>&Eacute;ffectif total des &eacute;l&egrave;ves</h5>
                            <h2><span class="counter">{{ $total }}</span> <span class="tuition-fees"
                                    style="font-weight: bold; color:black; font-size:large">&Eacute;l&egrave;ves</span>
                            </h2>
                            <span class="text-info">----</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-info" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100" style="width:100%;">
                                    <span class="sr-only">100% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-sales-area mg-tb-30"></div>

    {{-- <div class="traffic-analysis-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-edu" style="justify-content: center;">
                        <i class="fa fa-server"></i>
                        <div class="social-edu-ctn">
                            <h3>5 Mati&egrave;ves</h3>
                            <p>Enseign&eacute;es </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-edu twitter-cl res-mg-t-30
                    table-mg-t-pro-n" style="justify-content: center;">
                        <i class="fa fa-graduation-cap"></i>
                        <div class="social-edu-ctn">
                            <h3>3 Classes</h3>
                            <p>d'interventions</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30"
                        style="justify-content: center;">
                        <i class="fa fa-users"></i>
                        <div class="social-edu-ctn">
                            <h3>80 Professeurs</h3>
                            <p>Le total des Professeurs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="library-book-area mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-cards-item">
                        <div class="single-product-image">
                            <a href="#"><img src="{{ asset('base/img/product/profile-bg.jpg') }}" alt=""></a>
                        </div>
                        <div class="single-product-text">
                            <img src="{{ asset('base/img/student/4.jpg') }}" alt="">
                            <h4><a class="cards-hd-dn" href="#">M. John DOE</a></h4>
                            <h5>Proviseur</h5>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span>91 12 42 97</span></h3>
                                        <p>Num&eacute;ro </p>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4"></div>

                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span>Lom&eacute;</span></h3>
                                        <p>Adresse</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-cards-item">
                        <div class="single-product-image">
                            <a href="#"><img src="{{ asset('base/img/product/profile-bg.jpg') }}" alt=""></a>
                        </div>
                        <div class="single-product-text">
                            <img src="{{ asset('base/img/student/2.jpg') }}" alt="">
                            <h4><a class="cards-hd-dn" href="#">Mme Jane DOE</a></h4>
                            <h5>Censeur</h5>
                            
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span>91 12 42 97</span></h3>
                                        <p>Num&eacute;ro </p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">

                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span>Lom&eacute;</span></h3>
                                        <p>Adresse</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                    <div class="single-cards-item">
                        <div class="single-product-image">
                            <a href="#"><img src="{{ asset('base/img/product/profile-bg.jpg') }}"
                                    alt=""></a>
                        </div>
                        <div class="single-product-text">
                            <img src="{{ asset('base/img/student/3.jpg') }}" alt="">
                            <h4><a class="cards-hd-dn" href="#">Mme Jane DOE</a></h4>
                            <h5>Secr&eacute;taire Principale</h5>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span>91 12 42 97</span></h3>
                                        <p>Num&eacute;ro</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">

                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4">
                                    <div class="cards-dtn">
                                        <h3><span>Lom&eacute;</span></h3>
                                        <p>Adresse</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mg-tb-30"></div>
    </div>
@endsection
