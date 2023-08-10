@extends('base')

@section('content')
    <div class="blog-details-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-details-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="latest-blog-single blog-single-full-view">
                                    <div class="blog-image">
                                        <a href="#"><img src="{{ asset('base/img/blog-details/1.jpg') }}"
                                                alt="" />
                                        </a>
                                        <div class="blog-date">
                                            <p><span class="blog-day">{{ date('d') }} <br></span>{{ date('M') }}</p>
                                        </div>
                                    </div>
                                    <div class="blog-details blog-sig-details">
                                        <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                            <span><a href="#"><i class="fa fa-server"></i> Classe:
                                                    <b>{{ $classe['libelle'] }} </b></a></span>
                                            <span><a href="#"><i class="fa fa-heart"></i> Niveau: <b>
                                                        {{ $classe['niveau'] }}</b> </a></span>

                                            @foreach ($classe->professeurs as $titulaire)
                                                @if ($titulaire->pivot->titulaire == 1)
                                                    @php
                                                        $date = explode('-', $titulaire->pivot->created_at);
                                                        $an = $date[0];
                                                    @endphp
                                                    <span>
                                                        <a href="#"><i class="fa fa-user-o"></i>
                                                            Professeur Titulaire:
                                                            <b>
                                                                <em style="text-transform: capitalize;">
                                                                    {{ $titulaire->prenom }}
                                                                </em>
                                                                <em style="text-transform: uppercase;">
                                                                    {{ $titulaire->nom }}
                                                                </em>
                                                            </b>
                                                        </a>
                                                    </span>
                                                @endif
                                            @endforeach

                                        </div>
                                        <h1><a class="blog-ht" href="#">Commantaires sur la classe</a></h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                            omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                                            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                            beatae vitae dicta sunt explicabo.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            style="padding: 30px; margin:15px; border-top: 1px solid black; border-bottom: 1px solid black;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="comment-head">
                                        <h3>Attribution des classes et professeurs</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="coment-area">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dual-list-box-inner">
                                            <form id="form" method="PUT" action="{{ route('atMatClas') }}" class="wizard-big" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="classe" value="{{ $classe['id'] }}">
                                                <select class="form-control dual_select" multiple>
                                                    @foreach ($classe->matieres as $classMat)
                                                        @foreach ($classMat->pivot as $item)
                                                            <option value="">{{$item}}</option>
                                                        @endforeach
                                                    @endforeach
                                                </select>


                                                <div class="payment-adress" style="margin-top: 25px;">
                                                    <button type="submit"
                                                        class="btn btn-primary waves-effect waves-light">Valider</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md12 col-md-12 col-sm-12 col-xs-12">
                                <div class="comment-head">
                                    <h3>Liste des &eacute;l&egrave;ves de la classe</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="coment-area">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                            <option value="">Exportation Basique</option>
                                            <option value="all">Tout Exporter All</option>
                                            <option value="selected">Exporter Selectionner</option>
                                        </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                        data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                        data-key-events="true" data-show-toggle="true" data-resizable="true"
                                        data-cookie="true" data-cookie-id-table="saveId" data-show-export="true"
                                        data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead style="text-align: center">
                                            <tr style="text-align: center">
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">N°</th>
                                                <th data-field="code" data-editable="true">Nom</th>
                                                <th data-field="libelle" data-editable="true">Pr&eacute;nom(s)</th>
                                                <th data-field="task" data-editable="true">Date de naissance</th>
                                                <th data-field="nation" data-editable="true">Nationnalit&eacute;</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $n = 1;
                                            @endphp
                                            @foreach ($classe->eleves as $eleve)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $n }}</td>
                                                    <td>{{ $eleve->nom }}</td>
                                                    <td>{{ $eleve->prenom }}</td>
                                                    <td>{{ date('d M. Y', strtotime($eleve->birthday)) }}</td>
                                                    <td>{{ $eleve->nationalite }}</td>
                                                    <td class="datatable-ct">
                                                        <a href="" style="margin: 20px; font-size:18px"><i
                                                                class="fa fa-eye"></i></a>
                                                        <i class="fa fa-trash text-danger"></i>
                                                    </td>
                                                </tr>
                                                @php
                                                    $n++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <br><br><br>
                        <hr>
                        <br><br><br>

                        <div class="row mg-t-15">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="comment-head">
                                    <h3>Laisser un commentaire</h3>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="coment-area">
                                <form id="comment" class="comment">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-res-mg-bt">
                                        <div class="form-group">
                                            <input name="name" class="responsive-mg-b-10" type="text"
                                                placeholder="Nom complet" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <input name="text" type="text" placeholder="Num&eacute;ro" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <textarea name="message" cols="30" rows="10" placeholder="Votre Commentaires"></textarea>
                                        </div>
                                        <div class="payment-adress comment-stn">
                                            <button type="submit"
                                                class="btn btn-primary waves-effect waves-light">Envoyer</button>
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
@endsection
