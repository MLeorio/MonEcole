@extends('base')

@section('title')
    Liste des classes
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">/</span>
            </li>
            <li>
                <a href="{{ route('classe.voir', ['classe' => $classe]) }}" style="font-weight:500">
                    {{ $classe['libelle'] }} </a> <span class="bread-slash">/</span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Param&egrave;tres</span>
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

@section('content')
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 col-lg-1 col-sm-1"></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                        <ul id="myTabedu1" class="tab-review-design">
                            {{-- <li class="active"><a href="#description">La classe</a></li> --}}
                            <li class="active"><a href="#registory">Admission des &eacute;l&egrave;ves</a></li>
                            <li><a href="#programme">Mati&egrave;res | Professeurs</a></li>
                            <li><a href="#modification">Modification</a></li>
                        </ul>

                        @if (Session::get('success'))
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="alert alert-success alert-success-style1 alert-success-stylenone">
                                        <button type="button" class="close sucess-op" data-dismiss="alert"
                                            aria-label="Close">
                                            <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                        </button>
                                        <i class="fa fa-check edu-checked-pro admin-check-sucess
                                            admin-check-pro-none"
                                            aria-hidden="true"></i>
                                        <p class="message-alert-none text-center"
                                            style="font-size: 20px;
                                            font-family:comic sans ms, sans-serif">
                                            <strong class="text-success">G&eacute;nial! </strong>
                                            {{ Session::get('success') }}.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">


                            {{-- <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>
                                                            Libell&eacute; <br />
                                                            <span style="font-size: 22px; color:cadetblue">
                                                                <b>{{ $classe['libelle'] }}</b>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>
                                                            Niveau <br />
                                                            <span style="font-size: 22px; color:cadetblue">
                                                                <b>{{ $classe['niveau'] }}</b>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>
                                                            Description <br />
                                                            <span style="font-size: 22px; color:cadetblue">
                                                                <b>{{ $classe['description'] }}</b>
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                            <div class="product-tab-list tab-pane fade active in" id="registory">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row mg-b-15">
                                                <div class="col-lg-12">

                                                    <div class="advanced-form-area mg-b-15">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="sparkline10-list mg-tb-30
                                                                    responsive-mg-t-0
                                                                    table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                                                                        <div class="sparkline10-hd">
                                                                            <div class="main-sparkline10-hd">
                                                                                <h1>
                                                                                    Formulaire d'admission en classe de
                                                                                    <span class="text-info">
                                                                                        {{ $classe['libelle'] }}
                                                                                    </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sparkline10-graph">
                                                                            <div class="input-knob-dial-wrap">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <form
                                                                                            action="{{ route('classe.admission') }}"
                                                                                            method="post">
                                                                                            @csrf
                                                                                            <input type="hidden"
                                                                                                name="classe"
                                                                                                value="{{ $classe['id'] }}">
                                                                                            <div
                                                                                                class="chosen-select-single">
                                                                                                <label>
                                                                                                    Choisir un
                                                                                                    &eacute;l&egrave;ve
                                                                                                </label>
                                                                                                <select
                                                                                                    data-placeholder="l'&eacute;l&egrave;ve"
                                                                                                    class="chosen-select"
                                                                                                    name="eleve" required>

                                                                                                    <option>

                                                                                                    </option>

                                                                                                    @foreach ($eleves as $el)
                                                                                                        <option
                                                                                                            value="{{ $el['id'] }}">
                                                                                                            {{ $el['prenom'] }}
                                                                                                            {{ $el['nom'] }}
                                                                                                        </option>
                                                                                                    @endforeach
                                                                                                </select>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 mg-t-15">
                                                                                                    <div
                                                                                                        class="payment-adress">
                                                                                                        <button
                                                                                                            type="submit"
                                                                                                            class="btn btn-primary
                                                                                                    btn-lg waves-effect waves-light">
                                                                                                            Valider</button>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="product-tab-list tab-pane fade" id="programme">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row mg-b-15">
                                                <div class="col-lg-12">

                                                    <div class="advanced-form-area mg-b-15">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div
                                                                        class="sparkline10-list mg-tb-30
                                                                    responsive-mg-t-0 table-mg-t-pro-n dk-res-t-pro-0 nk-ds-n-pro-t-0">
                                                                        <div class="sparkline10-hd">
                                                                            <div class="main-sparkline10-hd">
                                                                                <h1>
                                                                                    Programmation des cours en
                                                                                    <span class="text-info">
                                                                                        {{ $classe['libelle'] }}
                                                                                    </span>
                                                                                </h1>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sparkline10-graph">
                                                                            <div class="input-knob-dial-wrap">
                                                                                <div class="row">
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <form
                                                                                            action="{{ route('classe.cours') }}"
                                                                                            method="post">
                                                                                            @csrf
                                                                                            <input type="hidden"
                                                                                                name="classe"
                                                                                                value="{{ $classe['id'] }}">
                                                                                            <div
                                                                                                class="chosen-select-single">
                                                                                                <label>Choisir
                                                                                                    Une mati&egrave;re
                                                                                                </label>
                                                                                                <select
                                                                                                    data-placeholder="Mati&egrave;res"
                                                                                                    class="chosen-select"
                                                                                                    name="matiere" required>

                                                                                                    <option>

                                                                                                    </option>

                                                                                                    @foreach ($matieres as $mat)
                                                                                                        <option
                                                                                                            value="{{ $mat['id'] }}">
                                                                                                            {{ $mat['libelle'] }}
                                                                                                        </option>
                                                                                                    @endforeach

                                                                                                </select>

                                                                                                @error('matiere')
                                                                                                    <div
                                                                                                        style="color: red; font-size:14px; padding:8px;">
                                                                                                        * {{ $message }}
                                                                                                    </div>
                                                                                                @enderror
                                                                                            </div>

                                                                                            <div
                                                                                                class="chosen-select-single">
                                                                                                <label>
                                                                                                    Choisir Un professeur
                                                                                                </label>
                                                                                                <select
                                                                                                    data-placeholder="Professeurs"
                                                                                                    class="chosen-select"
                                                                                                    name="prof"
                                                                                                    required>

                                                                                                    <option>

                                                                                                    </option>

                                                                                                    @foreach ($profs as $prof)
                                                                                                        <option
                                                                                                            value="{{ $prof['id'] }}">
                                                                                                            {{ $prof['prenom'] }}
                                                                                                            {{ $prof['nom'] }}
                                                                                                        </option>
                                                                                                    @endforeach

                                                                                                </select>

                                                                                                @error('prof')
                                                                                                    <div
                                                                                                        style="color: red; font-size:14px; padding:8px;">
                                                                                                        * {{ $message }}
                                                                                                    </div>
                                                                                                @enderror

                                                                                            </div>
                                                                                            <div
                                                                                                class="bt-df-checkbox pull-left">
                                                                                                <label>
                                                                                                    <input class="pull-left" type="checkbox" name='role'
                                                                                                    style="margin-right: 15px; margin-left:10px">
                                                                                                    est titulaire de la classe
                                                                                                </label>

                                                                                                @error('role')
                                                                                                    <div
                                                                                                        style="color: red; font-size:14px; padding:8px;">
                                                                                                        * {{ $message }}
                                                                                                    </div>
                                                                                                @enderror
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-lg-12 mg-t-15">
                                                                                                    <div
                                                                                                        class="payment-adress">
                                                                                                        <button
                                                                                                            type="submit"
                                                                                                            class="btn btn-primary btn-lg waves-effect waves-light">
                                                                                                            Valider</button>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="product-tab-list tab-pane fade" id="modification">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row mg-b-15">
                                                <div class="col-lg-12">

                                                    <div class="advanced-form-area mg-b-15">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                                    <form
                                                                        action="{{ route('classe.maj', ['classe' => $classe]) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="row">
                                                                            <div class="col-lg-2"></div>
                                                                            <div class="col-lg-8">
                                                                                <div class="form-group">
                                                                                    <input name="libelle" type="text"
                                                                                        class="form-control"
                                                                                        value="{{ isset($classe->libelle) ? $classe->libelle : old('libelle') }}"
                                                                                        required>

                                                                                    @error('libelle')
                                                                                        <div
                                                                                            style="color: red; font-size:14px; padding:8px;">
                                                                                            * {{ $message }}
                                                                                        </div>
                                                                                    @enderror

                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="description"
                                                                                        value="{{ isset($classe->description) ? $classe->description : old('description') }}"
                                                                                        required>

                                                                                    @error('description')
                                                                                        <div
                                                                                            style="color: red; font-size:14px; padding:8px;">
                                                                                            * {{ $message }}
                                                                                        </div>
                                                                                    @enderror

                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <select name="niveau" class="form-control" required>
                                                                                        <option value="" selected="" disabled="">
                                                                                            Choisir le niveau</option>
                                                                                        @if ($classe['niveau'] == 'Primaire')
                                                                                        <option value="Primaire" selected >Primaire</option>
                                                                                        <option value="Collège">Coll&egrave;ge</option>
                                                                                        <option value="Lycée">Lyc&eacute;e</option>
                                                                                        @elseif ($classe['niveau'] == 'Collège')
                                                                                        <option value="Primaire">Primaire</option>
                                                                                        <option value="Collège" selected>Coll&egrave;ge</option>
                                                                                        <option value="Lycée">Lyc&eacute;e</option>
                                                                                        @elseif ($classe['niveau'] == 'Lycée')
                                                                                        <option value="Primaire">Primaire</option>
                                                                                        <option value="Collège">Coll&egrave;ge</option>
                                                                                        <option value="Lycée" selected>Lyc&eacute;e</option>
                                                                                        @endif
                                                                                    </select>
                                                                                </div>
                        
                                                                                @error("niveau")
                                                                                <div style="color: red; font-size:14px; padding:8px;">
                                                                                    * {{ $message }}
                                                                                </div>
                                                                                @enderror

                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="payment-adress mg-t-15">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary waves-effect waves-light mg-b-15">
                                                                                        Valider
                                                                                    </button>
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


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
