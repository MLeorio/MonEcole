@extends('base')

@section('title')
Mati&egrave;re ~ {{ $matiere['code'] }}
@endsection

@section('menu')
@include('personnel.nav-pers')
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
                        <li class="active"><a href="#description">Mati&egrave;re</a></li>
                        <li><a href="#INFORMATION">Modification</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                        <div class="product-tab-list tab-pane fade active in" id="description">

                            @if (Session::get('success'))
                            <div class="row p-lg-4 bg-success" style="border-radius: 10px;
                            font-size:large; margin:10px; padding:12px; justify-content:center; text-align:center">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p>
                                                        Libell&eacute; <br />
                                                        <span style="font-size: 22px; color:cadetblue">
                                                            <b>{{ $matiere['libelle'] }}</b>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p>
                                                        Code <br />
                                                        <span style="font-size: 22px; color:cadetblue">
                                                            <b>{{ $matiere['code'] }}</b>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p>
                                                        Description <br />
                                                        <span style="font-size: 22px; color:cadetblue">
                                                            <b>{{ $matiere['description'] }}</b>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row mg-b-15"></div>


                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>
                                                                Professeurs enseignants
                                                                <span class="text-primary">
                                                                    {{ $matiere->code }}
                                                                </span>
                                                            </h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        @foreach ($matiere->professeurs as $prof)
                                                        <li class="col-lg-6">
                                                            <i class="fa fa-angle-right"></i>
                                                            <strong class="text-primary" style="font-size: 18px">
                                                                <span style="text-transform: uppercase">
                                                                    {{ $prof->nom}}
                                                                </span>
                                                                <span style="text-transform: capitalize">
                                                                    ({{ $prof->pivot->role }})
                                                                </span>
                                                            </strong>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Enseign&eacute;e dans</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        @foreach ($matiere->classes as $classe)
                                                        <li class="col-lg-6">
                                                            <i class="fa fa-angle-right"></i>
                                                            <strong class="text-primary" style="font-size: 18px">
                                                                <span style="text-transform: uppercase">
                                                                    {{ $classe->libelle}}
                                                                </span>
                                                                <span style="text-transform: capitalize">
                                                                    ({{ $classe->niveau}})
                                                                </span>
                                                            </strong>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form action="{{ route('matiere.maj', ['matiere' => $matiere]) }}"
                                        method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <input name="code" type="text" class="form-control"
                                                        value="{{ isset($matiere->code) ? $matiere->code
                                                        : old('code')}}">

                                                        @error("code")
                                                        <div style="color: red; font-size:14px;
                                                        padding:8px;">
                                                            * {{ $message }}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="libelle"
                                                        value="{{ isset($matiere->libelle) ? $matiere->libelle
                                                        : old('libelle') }}">

                                                        @error("libelle")
                                                        <div style="color: red; font-size:14px;
                                                        padding:8px;">
                                                            * {{ $message }}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="description"
                                                        value="{{ isset($matiere->description) ? $matiere->description
                                                        : old('description') }}">

                                                        @error("description")
                                                        <div style="color: red; font-size:14px;
                                                        padding:8px;">
                                                            * {{ $message }}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="payment-adress mg-t-15">
                                                        <button type="submit" class="btn btn-primary waves-effect
                                                                waves-light mg-b-15">
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
@endsection