@extends('base')

@section('title')
Ajouter une classe
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Ajouter une classe</span>
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
                        <li class="active"><a href="#description">Informations de la classe</a></li>
                    </ul>
                    <br><br><br>
                    <br><br><br>
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
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="{{ route('classe.save') }}" method="POST"
                                            class="add-professors" id="demo1-upload">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-2"></div>
                                                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="libelle" type="text" class="form-control"
                                                            placeholder="Libell&eacute; de la classe"
                                                            style="font-size: 18px; padding:12px"
                                                            value="{{old('libelle')}}" required>

                                                            @error("libelle")
                                                            <div style="color: red; font-size:14px; padding:8px;">
                                                                * {{ $message }}
                                                            </div>
                                                            @enderror

                                                        </div>
                                                        <div class="form-group">
                                                            <input name="description" type="text" class="form-control"
                                                            placeholder="Une description"
                                                            style="font-size: 18px; padding:12px"
                                                            value="{{ old('description') }}">

                                                            @error("description")
                                                            <div style="color: red; font-size:14px; padding:8px;">
                                                                * {{ $message }}
                                                            </div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="niveau" class="form-control" required>
                                                                <option value="" selected="" disabled="">
                                                                    Choisir le niveau</option>
                                                                <option value="Primaire">Primaire</option>
                                                                <option value="Collège">Coll&egrave;ge</option>
                                                                <option value="Lycée">Lyc&eacute;e</option>
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
                                                    <div class="col-lg-12 mg-t-30">
                                                        <div class="payment-adress">
                                                            <button type="submit" class="btn btn-primary btn-lg
                                                                    waves-effect waves-light">Valider</button>
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
                    <br><br><br><br><br><br>
                    <br><br><br><br><br>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    