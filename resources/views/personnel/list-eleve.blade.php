@extends('base')

@section('title')
Eleves ~ Liste des eleves
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Liste des &eacute;l&egrave;ves</span>
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
<div class="contacts-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            @forelse ($eleves as $eleve)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mg-b-30">
                <div class="student-inner-std mg-t-30 res-mg-b-30" style="border-top: 1px solid rgba(95, 90, 90, 0.233);
                            border-left: 1px solid rgb(95, 90, 90, 0.233);
                            border-right: 1px solid rgb(95, 90, 90, 0.233);
                            border-radius: 0 0 15px 15px;
                            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5), 0 7px 21px 0 rgb(0, 0, 0, 0.1);
                            box-sizing:border-box;">
                    <div class="student-img">
                        @if ($eleve->genre == 'Masculin')
                        <img src="{{ asset('base/img/hom.png') }}" width="100" height="100" alt="" />
                        @else
                        <img src="{{ asset('base/img/fem.png') }}" alt="" />
                        @endif
                    </div>
                    <a href="{{ route('eleve.voir', ['eleve' => $eleve]) }}">
                        <div class="student-dtl" style="background-color: #00FFFF;
                                border-radius: 0 0 15px 15px;">
                            <h5>{{ $eleve['prenom'] }} <span style="text-decoration: uppercase">{{ $eleve['nom'] }}</span></h5>
                            <p class="dp" style="font-weight: 600;color:brown;">
                                {{ $eleve->matricule }}
                            </p>

                            @php
                            $dt = explode('-', $eleve->birthday);
                            $auj = date('Y');
                            @endphp

                        </div>
                    </a>
                </div>
            </div>
            @empty
            <div class="row">
                <div class="text-center justify-center">
                    <p>
                        Aucun &eacute;l&egrave;ve enr&eacute;gistrer !
                    </p>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
