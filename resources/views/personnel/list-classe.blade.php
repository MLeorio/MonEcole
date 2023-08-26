@extends('base')

@section('title')
    Liste des classes
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Liste des classes</span>
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

    <div class="courses-area">
        <div class="container-fluid">


            <div class="row mg-b-15" style="margin-bottom: 30px">
                @forelse ($classes as $classe)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <a href="{{ route('classe.voir', ['classe' => $classe]) }}">
                                <div class="courses-title">
                                    <img src="{{ asset('base/img/courses/1.jpg') }}" alt="">
                                    <h2>{{ $classe['libelle'] }} :
                                        <strong class="text-primary" style="text-transform:uppercase">
                                            {{ $classe['niveau'] }}</strong>
                                    </h2>

                                </div>
                                <div class="course-des">
                                    @foreach ($classe->professeurs as $titulaire)
                                        @if ($titulaire->pivot->titulaire == 1)
                                            @php
                                                $date = explode('-', $titulaire->pivot->created_at);
                                                $an = $date[0];
                                            @endphp
                                            <p><span><i class="fa fa-users"></i></span> Titulaire :
                                                <b>{{ $titulaire->nom }} ( {{ $an }} )</b>
                                            </p>
                                        @endif
                                    @endforeach

                                    <p>

                                        @if ($classe->eleves()->where('annee-scolaire', date('Y'))->get()->count() == 0)
                                            <strong class="text-danger">Pas d'&eacute;l&egrave;ve inscrit !</strong>
                                        @elseif ($classe->eleves()->where('annee-scolaire', date('Y'))->get()->count() == 1)
                                            <span><i class="fa fa-users"></i></span>
                                            Effectif : <b class="text-info">{{ $classe->eleves->count() }}
                                                &eacute;l&egrave;ve</b>
                                        @else
                                            <span><i class="fa fa-users"></i></span>
                                            Effectif : <b class="text-info">{{ $classe->eleves->count() }}
                                                &eacute;l&egrave;ves</b>
                                        @endif

                                    </p>
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
        </div>
    </div>
    </div>
@endsection
