@extends('base')

@section('title')
    Dossier Patient
@endsection

@section('search')
    <hr>
@endsection

@php
    $dt = explode('-', $prof->birthday);
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
                            @if ($prof->genre == 'Masculin')
                            <img src="{{ asset('base/img/hom.png') }}" alt="" />
                        @else
                            <img src="{{ asset('base/img/fem.png') }}" alt="" />
                        @endif
                        </div>
                        <div class="profile-details-hr"
                            style="background-image: radial-gradient(circle closest-corner at center, yellow, white, Aqua); border-radius: 10px 10px;">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr">
                                        <p> <strong>Nom</strong> <br /> <strong class="ident">{{ $prof->nom }}</strong>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p><strong>Pr&eacute;noms</strong><br /><strong
                                                class="ident">{{ $prof->prenom }}</strong>
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
                                        <p><strong>T&eacute;l&eacute;phone</strong><br /><strong class="ident">
                                                +228 {{ $prof->numero }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="address-hr">
                                        <p><strong>R&eacute;sidence</strong><br /><strong
                                                class="ident">{{ $prof->adresse }}</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-6">
                            <div class="button-style-two btn-mg-b-15">
                                <button type="button" class="btn btn-custom-rounded-two btn-danger text-white">
                                    <em class="fa fa-times edu-danger-error" aria-hidden="true"></em>
                                    <a href="" class="text-white"  aria-hidden="true" style="color: #fff"><span class="mini-click-non">Supprimer le patient</span> </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Identit&eacute;</a></li>
                            <li><a href="#reviews"> Soins</a></li>
                            <li><a href="#fact">Facture</a></li>
                            <li><a href="#INFORMATION">Modifier Informations</a></li>

                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-5 col-sm-5 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>Nom Complet<br /><b class="ident">
                                                                {{ $prof->nom }}
                                                                {{ $prof->prenom }}</b></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>T&eacute;l&eacute;phone<br /> <b class="ident">+228
                                                                {{ $prof->numero }}</b></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>&Acirc;ge<br /><b class="ident">
                                                                {{ $age }} ans</b></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                    <div class="address-hr biography">
                                                        <p>Adresse<br /><b class="ident">
                                                                {{ $prof->adresse }}</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="content-profile">
                                                        <h1 style="margin-top: 30px; margin-bottom:30px;">Motif de
                                                            Consultation</h1>
                                                        {{-- @foreach ($soin as $s) --}}
                                                            <div
                                                                style="border-bottom: 2px dotted navy; margin-bottom:20px; border-radius:0 0 0 15px">
                                                                <p style="color: blue; font-size:16px; font-weight:bold">
                                                                    {{-- {{ $s->created_at->format('d/m/Y') }} --}} date
                                                                </p>
                                                                <p
                                                                    style="font-size: 20px; font-weight:bold; color:navy; text-transform:uppercase; padding:10px">
                                                                    {{-- {{ $s->raison_consult }} --}} raison
                                                                </p>
                                                            </div>
                                                        {{-- @endforeach --}}
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
                                            <form action="{{ route('professeur.maj', ['prof' => $prof]) }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="edit">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="nom"
                                                                placeholder="Nom" value="{{ $prof->nom }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="prenom"
                                                                placeholder="Pr&eacute;noms"
                                                                value="{{ $prof->prenom }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="residence"
                                                                placeholder="R&eacute;sidence"
                                                                value="{{ $prof->adresse }}" required>
                                                        </div>
                                                        <div class="form-group input-mark-inner mg-b-22">
                                                            <input type="text" class="form-control" name="birthday"
                                                                data-mask="9999/99/99"
                                                                placeholder="Date de naissance (aaaa/mm/jj)"
                                                                value="{{ $prof->birthday }}" required>
                                                        </div>
                                                        <div class="form-group input-mark-inner mg-b-22">
                                                            <input type="text" class="form-control" name="tel"
                                                                placeholder="Num&eacute;ro de t&eacute;l&eacute;phone"
                                                                value="{{ $prof->numero }}" required>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3"></div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <select class="form-control" required>
                                                                        @if ($prof->genre == 'Masculin')
                                                                            <option>S&eacute;lectionner le genre
                                                                            </option>
                                                                            <option value="Masculin" selected>Masculin
                                                                            </option>
                                                                            <option value="Feminin">F&eacute;minin
                                                                            </option>
                                                                        @elseif ($prof->genre == 'Feminin')
                                                                            <option>S&eacute;lectionner le genre
                                                                            </option>
                                                                            <option value="Feminin" selected>F&eacute;minin
                                                                            </option>
                                                                            <option value="Masculin">Masculin</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3 col-md-3"></div>
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
