@extends('base')

@section('title')
Ajouter un &eacute;l&egrave;ve
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Ajouter un nouvel &eacute;l&egrave;ve</span>
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
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Informations de l'&eacute;l&egrave;ve</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">

                                @if (Session::get('success'))
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
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

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="{{ route('eleve.save') }}" method="POST"
                                                    class="add-professors" id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="name" type="text" class="form-control"
                                                                    placeholder="Nom" value="{{ old('name') }}" required>

                                                                @error('name')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="lastname" type="text" class="form-control"
                                                                    placeholder="Pr&eacute;nom(s)"
                                                                    value="{{ old('lastname') }}" required>

                                                                @error('lastname')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="nation" type="text" class="form-control"
                                                                    placeholder="Nationalit&eacute;"
                                                                    value="{{ old('nation') }}" required>

                                                                @error('nation')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="adresse" type="text" class="form-control"
                                                                    placeholder="Adresse" value="{{ old('adresse') }}"
                                                                    required>

                                                                @error('adresse')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="birthday" id="finish" type="date"
                                                                    class="form-control" title="Date de naissance"
                                                                    value="{{ old('birthday') }}" required>

                                                                @error('birthday')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="dateEntree" id="finish" type="date"
                                                                    class="form-control" title="Date d'inscription"
                                                                    value="{{ old('dateEntree') }}" required>

                                                                @error('dateEntree')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="gender" class="form-control" required>
                                                                    <option value="none" selected disabled>
                                                                        Choisir le genre</option>
                                                                    <option value="Masculin">Masculin</option>
                                                                    <option value="Feminin">Feminin</option>
                                                                </select>

                                                                @error('gender')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mg-t-30">
                                                            <div class="payment-adress">
                                                                <button type="submit"
                                                                    class="btn btn-primary
                                                                    btn-lg waves-effect waves-light">Valider</button>
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
@endsection
