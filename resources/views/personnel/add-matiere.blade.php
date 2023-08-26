@extends('base')

@section('title')
    Mati&egrave;re ~ Ajouter une mati&egrave;re
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Ajouter une mati&egrave;re</span>
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
                <div class="col-lg-1 col-md-1 col-sm-1 "></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <div class="product-payment-inner-st" style="border-radius: 10px;">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Informations de la mati&egrave;re</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @if (Session::get('success'))
                                            <div class="row p-lg-4 bg-success"
                                                style="border-radius: 10px;
                            font-size:large; margin:10px; padding:12px; justify-content:center; text-align:center">
                                                <p>{{ Session::get('success') }}</p>
                                            </div>
                                        @endif
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="{{ route('matiere.save') }}" method="POST"
                                                    class="add-professors" id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="code" type="text" class="form-control"
                                                                    placeholder="Code de la mati&egrave;re"
                                                                    value="{{ old('code') }}" required>

                                                                @error('code')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            <div class="form-group">
                                                                <input name="libelle" type="text" class="form-control"
                                                                    placeholder="Libell&eacute; de la mati&egrave;re"
                                                                    value="{{ old('libelle') }}" required>

                                                                @error('libelle')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror

                                                            </div>
                                                            <div class="form-group">
                                                                <input name="description" type="text"
                                                                    class="form-control" placeholder="Une description"
                                                                    value="{{ old('description') }}">

                                                                @error('description')
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
@endsection
