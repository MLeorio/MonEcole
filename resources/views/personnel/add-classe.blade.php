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
                            <li class="active"><a href="#description">Informations de la classe</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action="{{ route('classe.store') }}" method="POST"
                                                    class="add-professors"
                                                    id="demo1-upload">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="libelle" type="text" class="form-control"
                                                                    placeholder="Libell&eacute; de la classe" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <input name="description" type="text"
                                                                class="form-control"
                                                                    placeholder="Une description">
                                                            </div>
                                                            <div class="form-group">
                                                                <select name="niveau" class="form-control" required>
                                                                    <option value="" selected="" disabled="">
                                                                        Choisir le niveau</option>
                                                                    <option value="Primaire">Primaire</option>
                                                                    <option value="College">Coll&egrave;ge</option>
                                                                    <option value="Lycee">Lyc&eacute;e</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mg-t-30">
                                                            <div class="payment-adress">
                                                                <button type="submit"
                                                                    class="btn btn-primary btn-lg
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
