@extends('base')


@section('menu')
    @include('personnel.nav-pers')
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
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="{{ route('eleve.store') }}" method="POST"
                                                    class="add-professors"
                                                    id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="name" type="text" class="form-control"
                                                                    placeholder="Nom" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="lastname" type="text" class="form-control"
                                                                    placeholder="Pr&eacute;nom(s)" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="nation" type="text" class="form-control"
                                                                    placeholder="Nationalit&eacute;" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="adresse" type="text" class="form-control"
                                                                    placeholder="Adresse" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="birthday" id="finish" type="date"
                                                                    class="form-control"
                                                                    title="Date de naissance" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="dateEntree" id="finish" type="date"
                                                                    class="form-control"
                                                                    title="Date d'inscription" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="gender" class="form-control" required>
                                                                    <option value="none" selected="" disabled="">
                                                                        Choisir le genre</option>
                                                                    <option value="Masculin">Masculin</option>
                                                                    <option value="Feminin">Feminin</option>
                                                                </select>
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
