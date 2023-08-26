@extends('base')

@section('title')
    Classe ~ {{ $classe['libelle'] }}
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}" title="La maison">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <a href="{{ route('classe.list') }}" title="liste des classes" style="font-weight:500">
                    Liste des classes</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight:bold">{{ $classe['libelle'] }}</span>
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
                                    {{-- <div class="blog-image">
                                        <img src="{{ asset('base/img/blog-details/1.jpg') }}" alt="" />
                                        <div class="blog-date">
                                            <p><span class="blog-day">{{ date('d') }} <br></span>{{ date('M') }}</p>
                                        </div>
                                    </div> --}}
                                    <div class="blog-details blog-sig-details">
                                        <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                            <span>
                                                <i class="fa fa-group"></i> Classe:
                                                <strong class="text-primary">{{ $classe['libelle'] }}</strong>
                                            </span>
                                            <span>
                                                <i class="fa fa-star"></i> Niveau:
                                                <strong class="text-primary"> {{ $classe['niveau'] }}</strong>
                                            </span>

                                            @foreach ($classe->professeurs as $prof)
                                                @if ($prof->pivot->role == 'Titulaire')
                                                    @php
                                                        $date = explode('-', $prof->pivot->created_at);
                                                        $an = $date[0];
                                                    @endphp
                                                    <span>
                                                        <i class="fa fa-user-o"></i>
                                                        Professeur Titulaire:
                                                        <strong class="text-primary">
                                                            <em style="text-transform: capitalize;">
                                                                {{ $prof->prenom }}
                                                            </em>
                                                            <em style="text-transform: uppercase;">
                                                                {{ $prof->nom }}
                                                            </em>
                                                        </strong>
                                                    </span>
                                                @endif
                                            @endforeach

                                            <span>
                                                <i class="fa fa-table"></i> Effectif :
                                                <strong class="text-primary"> {{ $classe->eleves->count() }}</strong>
                                            </span>

                                            {{-- Partie pour afficher le titulaire d'une classe --}}

                                        </div>
                                        <h1><a class="blog-ht" href="#">Commantaires sur la classe</a></h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur.
                                        </p>
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
                                            <option value="all">Tout Exporter</option>
                                            <option value="selected">Exporter Selection</option>
                                        </select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                        data-show-columns="true" data-show-pagination-switch="true"
                                        data-show-refresh="true"
                                        aria-describedby="table" data-key-events="true" data-show-toggle="true"
                                        data-resizable="true" data-cookie="true" data-cookie-id-table="saveId"
                                        data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
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

                        <br><br>

                        <div class="row mg-tb-30">
                            <div class="col-4"></div>
                            <div class="col-4 mg-tb-15">
                                <p class="text-center justify-content-center mg-tb-30">
                                    <button class="btn btn-primary btn-lg waves-effect waves-light p-lg-5">
                                        <a href="{{ route('moi') }}">
                                            <span style="color:white; font-family:'comic sans ms', sans-serif">
                                                Porter des notes
                                            </span>
                                        </a>
                                    </button>
                                </p>
                            </div>
                        </div>

                        <br><br><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
