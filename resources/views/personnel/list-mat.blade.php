@extends('base')

@section('title')
    Mati&egrave;re ~ Liste des mati&egrave;res
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Liste des mati&egrave;ves</span>
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
    <!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Liste <span class="table-project-n">des</span> Mati&egrave;res</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
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
                                    data-key-events="true" data-show-toggle="true"
                                    data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                    data-toolbar="#toolbar" aria-label="Ma table">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">N°</th>
                                            <th data-field="code" data-editable="true">Code</th>
                                            <th data-field="libelle" data-editable="true">Libell&eacute;</th>
                                            <th data-field="task" data-editable="true">Description</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $n = 1;
                                        @endphp
                                        @foreach ($matieres as $matiere)
                                            <tr>
                                                <td></td>
                                                <td>{{ $n }}</td>
                                                <td>{{ $matiere->code }}</td>
                                                <td>{{ $matiere->libelle }}</td>
                                                <td>{{ $matiere->description }}</td>
                                                <td class="datatable-ct">
                                                    <a href="{{ route('matiere.voir', ['matiere' => $matiere->id]) }}"
                                                        style="margin: 20px; font-size:18px">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    
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
                </div>
            </div>
        </div>
    </div>
@endsection
