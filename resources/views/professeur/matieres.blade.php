@extends('base')

@section('title')
    Mes mati&egrave;res
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homeProf') }}">Accueil</a> <span class="bread-slash">/</span>
            </li>
            <li>
                <a href="{{ route('prof.classe', ['classe' => $classe]) }}" style="font-weight:500">
                    {{ $classe['libelle'] }} </a> <span class="bread-slash">/</span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Porter des notes</span>
            </li>
        </ul>
    </div>
@endsection

@section('menu')
    @include('professeur.nav-prof')
@endsection

@section('mobile-menu')
    @include('professeur.mobile-menu-prof')
@endsection

@section('content')
    <div class="blog-details-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-details-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-details blog-sig-details">
                                        <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                            <span>
                                                <i class="fa fa-group"></i> Classe :
                                                <strong class="text-primary">{{ $classe['libelle'] }}</strong>
                                            </span>
                                            <span>
                                                <i class="fa fa-star"></i> Mati&egrave;re :
                                                <strong class="text-primary"> {{ $matiere['libelle'] }}</strong>
                                            </span>
                                            <span>
                                                <i class="fa fa-star"></i> Professeur :
                                                <strong class="text-primary"> {{ Session::get('user')['prenom'] }}
                                                    {{ Session::get('user')['nom'] }}</strong>
                                            </span>
                                            <span>
                                                <i class="fa fa-calendar"></i> Ann&eacute;e scolaire :
                                                <strong class="text-primary"> {{ date('Y') }}</strong>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mg-b-30">
                                        <br><br>
                                        @if (Session::get('success'))
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div
                                                        class="alert alert-success alert-success-style1 alert-success-stylenone">
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
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                                            <ul id="myTabedu1" class="tab-review-design">
                                                <li class="active"><a href="#t1">Premier Trimestre</a></li>
                                                <li><a href="#t2">Deuxi&egrave;me Trimestre</a></li>
                                                <li><a href="#t3">Troisi&egrave;me Trimestre</a></li>
                                            </ul>

                                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">


                                                <div class="product-tab-list tab-pane fade active in" id="t1">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <form action="{{ route('prof.note') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="matiere"
                                                                    value="{{ $matiere['id'] }}">
                                                                <input type="hidden" name="periode" value="Trimestre 1">

                                                                <div class="chosen-select-single">
                                                                    <label> Choisir un &eacute;l&egrave;ve </label>
                                                                    <select data-placeholder="l'&eacute;l&egrave;ve"
                                                                        class="chosen-select" name="eleve" required>
                                                                        <option></option>

                                                                        @foreach ($classe->eleves as $eleve)
                                                                            <option value="{{ $eleve['id'] }}">
                                                                                {{ $eleve['prenom'] }}
                                                                                {{ $eleve['nom'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('eleve')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="chosen-select-single">
                                                                    <label> Choisir le type de note </label>
                                                                    <select data-placeholder="Type de note"
                                                                        class="chosen-select" name="type" required>
                                                                        <option></option>
                                                                        <option value="Interro">Int&eacute;rrogation
                                                                        </option>
                                                                        <option value="Devoir">Devoir</option>
                                                                        <option value="Composition">Composition</option>
                                                                    </select>
                                                                    @error('type')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group mg-t-30">
                                                                    <input type="text" name="note"
                                                                        class="form-control"
                                                                        placeholder="Note de l'&eacute;l&egrave;ve"
                                                                        data-mask="99.99" required>
                                                                    @error('note')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-12 mg-t-15">
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

                                                <div class="product-tab-list tab-pane fade" id="t2">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <form action="{{ route('prof.note') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="matiere"
                                                                    value="{{ $matiere['id'] }}">
                                                                <input type="hidden" name="periode" value="Trimestre 2">

                                                                <div class="chosen-select-single">
                                                                    <label> Choisir un &eacute;l&egrave;ve </label>
                                                                    <select data-placeholder="l'&eacute;l&egrave;ve"
                                                                        class="chosen-select" name="eleve" required>
                                                                        <option></option>

                                                                        @foreach ($classe->eleves as $eleve)
                                                                            <option value="{{ $eleve['id'] }}">
                                                                                {{ $eleve['prenom'] }}
                                                                                {{ $eleve['nom'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('eleve')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="chosen-select-single">
                                                                    <label> Choisir le type de note </label>
                                                                    <select data-placeholder="Type de note"
                                                                        class="chosen-select" name="type" required>
                                                                        <option></option>
                                                                        <option value="Interro">Int&eacute;rrogation
                                                                        </option>
                                                                        <option value="Devoir">Devoir</option>
                                                                        <option value="Composition">Composition</option>
                                                                    </select>
                                                                    @error('type')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group mg-t-30">
                                                                    <input type="text" name="note"
                                                                        class="form-control"
                                                                        placeholder="Note de l'&eacute;l&egrave;ve"
                                                                        data-mask="99.99" required>
                                                                    @error('note')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-12 mg-t-15">
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


                                                <div class="product-tab-list tab-pane fade" id="t3">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <form action="{{ route('prof.note') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="matiere"
                                                                    value="{{ $matiere['id'] }}">
                                                                <input type="hidden" name="periode" value="Trimestre 3">

                                                                <div class="chosen-select-single">
                                                                    <label> Choisir un &eacute;l&egrave;ve </label>
                                                                    <select data-placeholder="l'&eacute;l&egrave;ve"
                                                                        class="chosen-select" name="eleve" required>
                                                                        <option></option>

                                                                        @foreach ($classe->eleves as $eleve)
                                                                            <option value="{{ $eleve['id'] }}">
                                                                                {{ $eleve['prenom'] }}
                                                                                {{ $eleve['nom'] }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('eleve')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="chosen-select-single">
                                                                    <label> Choisir le type de note </label>
                                                                    <select data-placeholder="Type de note"
                                                                        class="chosen-select" name="type" required>
                                                                        <option></option>
                                                                        <option value="Interro">Int&eacute;rrogation
                                                                        </option>
                                                                        <option value="Devoir">Devoir</option>
                                                                        <option value="Composition">Composition</option>
                                                                    </select>
                                                                    @error('type')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group mg-t-30">
                                                                    <input type="text" name="note"
                                                                        class="form-control"
                                                                        placeholder="Note de l'&eacute;l&egrave;ve"
                                                                        data-mask="99.99" required>
                                                                    @error('note')
                                                                        <div style="color: red; font-size:14px; padding:8px;">
                                                                            * {{ $message }}
                                                                        </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-12 mg-t-15">
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
            </div>
        </div>
    </div>
@endsection
