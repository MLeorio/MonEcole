@extends('base')

@section('title')
    Eleve ~ {{ $eleve->prenom }} {{ $eleve->nom }}
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <a href="{{ route('eleve.list') }}" style="font-weight:500">
                    Liste des &eacute;l&egrave;ves </a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">{{ $eleve['prenom'] }} {{ $eleve['nom'] }}</span>
            </li>
        </ul>
    </div>
@endsection

@section('menu')
    @include('personnel.nav-pers')
@endsection

@section('mobile-menu')
    @include('personnel.mob-nav-pers')
@endsection

@php
    $dt = explode('-', $eleve->birthday);
    $age = date('Y') - $dt[0];
    
@endphp


@section('content')
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="profile-info-inner">
                        <div class="profile-img">
                            @if ($eleve->genre == 'Masculin')
                                <img src="{{ asset('base/img/hom.png') }}" alt="" />
                            @else
                                <img src="{{ asset('base/img/fem.png') }}" alt="" />
                            @endif
                        </div>
                        <div class="profile-details-hr"
                            style="background-image: radial-gradient(circle closest-corner at center,
                            yellow, white, Aqua);
                            border-radius: 10px 10px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p> <strong>Nom</strong> <br /> <strong class="ident">{{ $eleve->nom }}</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><strong>Pr&eacute;nom(s)</strong><br /><strong
                                                class="ident">{{ $eleve->prenom }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p><strong>&Acirc;ge</strong><br /><strong class="ident"> {{ $age }}
                                                ans</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><strong>Adresse</strong><br /><strong class="ident">
                                                {{ $eleve->adresse }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="address-hr">
                                        <p><strong>Nationalit&eacute;</strong><br /><strong
                                                class="ident">{{ $eleve->nationalite }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Identit&eacute;</a></li>
                            <li><a href="#reviews"> Cursus Scolaire</a></li>
                            <li><a href="#fact">R&eacute;sultat</a></li>
                            <li><a href="#INFORMATION">Modifier Informations</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">

                                    @if (Session::get('success'))
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                                                <button type="button" class="close sucess-op" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                </button>
                                                <i class="fa fa-check edu-checked-pro admin-check-sucess admin-check-pro-none"
                                                    aria-hidden="true"></i>
                                                <p class="message-alert-none text-center"
                                                    style="font-size: 20px; font-family:comic sans ms, sans-serif">
                                                    <strong class="text-success">G&eacute;nial! </strong>
                                                    {{ Session::get('success') }}.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>
                                                            Matricule<br />
                                                            <b class="ident">{{ $eleve->matricule }}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>
                                                            Nom Complet<br />
                                                            <b class="ident">{{ $eleve->prenom }} {{ $eleve->nom }}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>
                                                            Adresse<br />
                                                            <b class="ident">{{ $eleve->adresse }}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>
                                                            Nationalit&eacute;<br />
                                                            <b class="ident">{{ $eleve->nationalite }}</b>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                           <hr class="mg-t-15"/>
                                            <div class="row mg-b-15">
                                                <div class="col-lg-12">
                                                    <div class="row mg-b-15">
                                                        <div class="col-lg-12">
                                                            <div class="skill-title">
                                                                <h2>Classes fr&eacute;quent&eacute;ees</h2>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ex-pro">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                <div class="row">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <form action="{{ route('eleve.maj', ['eleve' => $eleve]) }}" method="POST">
                                                @csrf
                                                @method('put')
                                                <div class="row">
                                                    <div class="col-lg-3"></div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input name="nom" type="text" class="form-control"
                                                                placeholder="Votre Nom" value="{{ $eleve->nom }}"
                                                                required>
                                                            @error('nom')
                                                                <div style="color: red; font-size:14px; padding:8px;">
                                                                    * {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="prenom" class="form-control"
                                                                placeholder="Pr&eacute;nom" value="{{ $eleve->prenom }}"
                                                                required>
                                                            @error('prenom')
                                                                <div style="color: red; font-size:14px; padding:8px;">
                                                                    * {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group input-mark-inner mg-b-22">
                                                            <input type="text" class="form-control"
                                                                data-mask="9999/99/99" name="birthday"
                                                                placeholder="Date de naissance (aaaa/mm/jj)"
                                                                value="{{ $eleve->birthday }}">
                                                            @error('birthday')
                                                                <div style="color: red; font-size:14px; padding:8px;">
                                                                    * {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" name="nationalite" class="form-control"
                                                                placeholder="Nationalit&eacute;"
                                                                value="{{ $eleve->nationalite }}" required>
                                                            @error('nationalite')
                                                                <div style="color: red; font-size:14px; padding:8px;">
                                                                    * {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group">
                                                            <select class="form-control" name="genre" required>
                                                                @if ($eleve->genre == 'Masculin')
                                                                    <option>S&eacute;lectionner le genre
                                                                    </option>
                                                                    <option value="Masculin" selected>Masculin
                                                                    </option>
                                                                    <option value="Feminin">F&eacute;minin
                                                                    </option>
                                                                @elseif ($eleve->genre == 'Feminin')
                                                                    <option>S&eacute;lectionner le genre
                                                                    </option>
                                                                    <option value="Feminin" selected>F&eacute;minin
                                                                    </option>
                                                                    <option value="Masculin">Masculin</option>
                                                                @endif
                                                            </select>
                                                            @error('gender')
                                                                <div style="color: red; font-size:14px; padding:8px;">
                                                                    * {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="adresse"
                                                                placeholder="Adresse" value="{{ $eleve->adresse }}">
                                                            @error('adresse')
                                                                <div style="color: red; font-size:14px; padding:8px;">
                                                                    * {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-lg dwaves-effect waves-light mg-b-15">Valider</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
