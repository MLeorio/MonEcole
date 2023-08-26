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
                <a href="{{ route('prof.classes') }}" title="liste des classes" style="font-weight:500">
                    Mes classes</a> <span class="bread-slash">></span>
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

                                            <span>
                                                <i class="fa fa-info"></i> Nombre de cours :
                                                <strong class="text-primary"> {{ $matieres->count() }}</strong>
                                            </span>

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
                                    <h3>Mati&egrave;re(s) enseign&eacute;e(s)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mg-b-15" style="margin-bottom: 30px">
                            @forelse ($matieres as $matiere)
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="courses-inner res-mg-b-30">
                                        <a href="{{ route('prof.matiere', ['classe' => $classe, 'matiere' => $matiere]) }}">
                                            <div class="courses-title">
                                                <img src="{{ asset('base/img/courses/1.jpg') }}" alt="">
                                                <h2>{{ $matiere['libelle'] }} :
                                                    <strong class="text-primary" style="text-transform:uppercase">
                                                        {{ $matiere['code'] }}</strong>
                                                </h2>
            
                                            </div>
                                        </a>
                                    </div>
                                </div>
            
                            @empty
                                <strong>
                                    <center style="margin: 50px; font-size:32px; color:blue">
                                        Aucune classe encore enregistr&eacute;e !</center>
                                </strong>
                            @endforelse
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
