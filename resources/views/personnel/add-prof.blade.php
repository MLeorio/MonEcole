@extends('base')

@section('title')
    Professeur ~ Ajouter un prof
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Ajouter un nouveau prof</span>
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
                            <li class="active"><a href="#description">Informations du professeur</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">

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
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="{{ route('professeur.save') }}" method="POST"
                                                    class="add-professors" id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="name" type="text" class="form-control" value="{{ @old('name') }}"
                                                                    placeholder="Nom" required>
                                                                @error('name')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="lastname" type="text" class="form-control" value="{{ @old('lastname') }}"
                                                                    placeholder="Pr&eacute;nom(s)" required>

                                                                    @error('lastname')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="tel" type="text" class="form-control" value="{{ @old('tel') }}"
                                                                    placeholder="Num&eacute;ro de t&eacute;l&eacute;phone"
                                                                    required>

                                                                    @error('tel')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="email" type="email" class="form-control" value="{{ @old('email') }}"
                                                                    placeholder="Email" required>

                                                                    @error('email')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="nation" type="text" class="form-control" value="{{ @old('nation') }}"
                                                                    placeholder="Nationalit&eacute;" required>

                                                                    @error('nation')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="specialite" type="text" class="form-control" value="{{ @old('specialite') }}"
                                                                    placeholder="Sp&eacute;cialit&eacute;" required>

                                                                    @error('specialite')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="adresse" type="text" class="form-control" value="{{ @old('adresse') }}"
                                                                    placeholder="Adresse" required>

                                                                    @error('adresse')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="birthday" id="finish" type="date" value="{{ @old('birthday') }}"
                                                                    class="form-control" title="Date de naissance" required>
                                                                    
                                                                    @error('birthday')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="dateEmbauche" id="finish" type="date" value="{{ @old('dateEmbauche') }}"
                                                                    class="form-control" title="Date d'embauche" required>

                                                                    @error('specialite')
                                                                    <div style="color: red; font-size:14px; padding:8px;">
                                                                        * {{ $message }}
                                                                    </div>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="gender" class="form-control" required>
                                                                    <option value="none" selected="" disabled="">
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
                                                            {{-- <div class="form-group alert-up-pd">
                                                                <div class="dz-message needsclick download-custom">
                                                                    <i class="fa fa-download edudropnone"
                                                                        aria-hidden="true"></i>
                                                                    <h2 class="edudropnone">Glissez
                                                                        D&eacute;posez ou appuyer pour choisir
                                                                        une image.</h2>
                                                                    <p class="edudropnone"><span
                                                                            class="note needsclick">(Cette
                                                                            action n'est pas fonctionnelle !
                                                                            Elle serait disponible dans une
                                                                            prochaine version.)</span>
                                                                    </p>
                                                                    <input name="image" class="hd-pro-img"
                                                                        type="text" />
                                                                </div>
                                                            </div> --}}
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
