@extends('base')

@section('title')
    Mati&egrave;re ~ {{ $matiere['code'] }}
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homeEle') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <a href="{{ route('mes_matieres') }}" style="font-weight:500">
                    Liste des mati&egrave;res </a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">{{ $matiere['code'] }} -
                    {{ $matiere['libelle'] }}</span>
            </li>
        </ul>
    </div>
@endsection

@section('classe')
    {{ Session()->get('classe')['libelle'] }}
@endsection

@section('menu')
    @include('eleve.nav-elev')
@endsection

@section('mobile-menu')
    @include('eleve.mobile-menu-elev')
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
                            <li><a href="#t1">1<sup>er</sup> Trimestre</a></li>
                            <li><a href="#t2">2<sup>ieme</sup> Trimestre</a></li>
                            <li><a href="#t3">3<sup>ieme</sup> Trimestre</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                            <div class="product-tab-list tab-pane fade active in" id="description">
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
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="product-tab-list tab-pane fade" id="t1">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row mg-b-15">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="skill-title">
                                                                <h2>
                                                                    Notes du
                                                                    <span class="text-primary">
                                                                        Premier Trimestre
                                                                    </span>
                                                                </h2>
                                                                <hr />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ex-pro">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="sparkline11-list mt-b-30">
    
                                                                    <div class="sparkline11-graph">
                                                                        <div class="static-table-list">
                                                                            <table class="table sparkle-table"
                                                                                aria-describedby="les notes">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>#</th>
                                                                                        <th>Type Note</th>
                                                                                        <th>Note</th>
                                                                                        <th>Valeur</th>
                                                                                        <th>Date</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
    
                                                                                    @php
                                                                                        $n = 1;
                                                                                    @endphp
    
                                                                                    @foreach ($notes as $note)
                                                                                        @if ($note['periode'] == 'Trimestre 1')
                                                                                            @php
                                                                                                $no = floatval($note['note']);
                                                                                            @endphp
                                                                                            <tr>
                                                                                                <td>{{ $n }}</td>
                                                                                                <td>{{ $note['typeNote'] }}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span class="text-bold">{{ $no }}</span>
                                                                                                    @if ($note['note'] >= 10)
                                                                                                        <i class="fa fa-level-up text-success"></i>
                                                                                                    @else
                                                                                                        <i class="fa fa-level-down text-danger"></i>
                                                                                                    @endif
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span class="pie">{{ $no }}/ 20</span>
                                                                                                    <span class="text-bold text-info">
                                                                                                        {{ ($no / 20) * 100 }}%
                                                                                                    </span>
                                                                                                </td>
                                                                                                <td>{{ $note['created_at']->format('d M Y') }}</td>
                                                                                            </tr>
                                                                                            @php
                                                                                                $n++;
                                                                                            @endphp
                                                                                        @endif
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="product-tab-list tab-pane fade" id="t2">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row mg-b-15">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="skill-title">
                                                                <h2>
                                                                    Notes du
                                                                    <span class="text-primary">
                                                                        Deuxi&egrave;me Trimestre
                                                                    </span>
                                                                </h2>
                                                                <hr />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ex-pro">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="sparkline11-list mt-b-30">
    
                                                                    <div class="sparkline11-graph">
                                                                        <div class="static-table-list">
                                                                            <table class="table sparkle-table"
                                                                                aria-describedby="les notes">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>#</th>
                                                                                        <th>Type Note</th>
                                                                                        <th>Note</th>
                                                                                        <th>Valeur</th>
                                                                                        <th>Date</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
    
                                                                                    @php
                                                                                        $n = 1;
                                                                                    @endphp
    
                                                                                    @foreach ($notes as $note)
                                                                                        @if ($note['periode'] == 'Trimestre 2')
                                                                                            @php
                                                                                                $no = floatval($note['note']);
                                                                                            @endphp
                                                                                            <tr>
                                                                                                <td>{{ $n }}</td>
                                                                                                <td>{{ $note['typeNote'] }}
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span class="text-bold">{{ $no }}</span>
                                                                                                    @if ($note['note'] >= 10)
                                                                                                        <i class="fa fa-level-up text-success"></i>
                                                                                                    @else
                                                                                                        <i class="fa fa-level-down text-danger"></i>
                                                                                                    @endif
                                                                                                </td>
                                                                                                <td>
                                                                                                    <span class="pie">{{ $no }}/ 20</span>
                                                                                                    <span class="text-bold text-info">
                                                                                                        {{ ($no / 20) * 100 }}%
                                                                                                    </span>
                                                                                                </td>
                                                                                                <td>{{ $note['created_at']->format('d M Y') }}</td>
                                                                                            </tr>
                                                                                            @php
                                                                                                $n++;
                                                                                            @endphp
                                                                                        @endif
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="product-tab-list tab-pane fade" id="t3">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>
                                                                Notes du
                                                                <span class="text-primary">
                                                                    Troisi&egrave;me Trimestre
                                                                </span>
                                                            </h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="sparkline11-list mt-b-30">

                                                                <div class="sparkline11-graph">
                                                                    <div class="static-table-list">
                                                                        <table class="table sparkle-table"
                                                                            aria-describedby="les notes">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>Type Note</th>
                                                                                    <th>Note</th>
                                                                                    <th>Valeur</th>
                                                                                    <th>Date</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                @php
                                                                                    $n = 1;
                                                                                @endphp

                                                                                @foreach ($notes as $note)
                                                                                    @if ($note['periode'] == 'Trimestre 3')
                                                                                        @php
                                                                                            $no = floatval($note['note']);
                                                                                        @endphp
                                                                                        <tr>
                                                                                            <td>{{ $n }}</td>
                                                                                            <td>{{ $note['typeNote'] }}
                                                                                            </td>
                                                                                            <td>
                                                                                                <span class="text-bold">{{ $no }}</span>
                                                                                                @if ($note['note'] >= 10)
                                                                                                    <i class="fa fa-level-up text-success"></i>
                                                                                                @else
                                                                                                    <i class="fa fa-level-down text-danger"></i>
                                                                                                @endif
                                                                                            </td>
                                                                                            <td>
                                                                                                <span class="pie">{{ $no }}/ 20</span>
                                                                                                <span class="text-bold text-info">
                                                                                                    {{ ($no / 20) * 100 }}%
                                                                                                </span>
                                                                                            </td>
                                                                                            <td>{{ $note['created_at']->format('d M Y') }}</td>
                                                                                        </tr>
                                                                                        @php
                                                                                            $n++;
                                                                                        @endphp
                                                                                    @endif
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
