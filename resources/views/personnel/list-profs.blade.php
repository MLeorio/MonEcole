@extends('base')

@section('title')
    Professeur ~ Liste des profs
@endsection

@section('brand')
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <ul class="breadcome-menu">
            <li>
                <a href="{{ route('homePers') }}">Accueil</a> <span class="bread-slash">></span>
            </li>
            <li>
                <span class="bread-blod text-primary" style="font-weight: bold;">Liste des profs</span>
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
                @forelse ($profs as $prof)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30 res-mg-b-30"
                            style="border-top: 1px solid rgba(95, 90, 90, 0.233);
                            border-left: 1px solid rgb(95, 90, 90, 0.233);
                            border-right: 1px solid rgb(95, 90, 90, 0.233);
                            border-radius: 0 0 15px 15px;
                            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5), 0 7px 21px 0 rgb(0, 0, 0, 0.1);
                            box-sizing:border-box;">
                            <div class="student-img">
                                @if ($prof->genre == 'Masculin')
                                    <img src="{{ asset('base/img/hom.png') }}" alt="" />
                                @else
                                    <img src="{{ asset('base/img/fem.png') }}" alt="" />
                                @endif
                            </div>
                            <div class="student-dtl" style="background-color: #00FFFF; border-radius: 0 0 15px 15px">
                                <a href="{{ route('professeur.voir', ['prof' => $prof->id]) }}">
                                    <h2>{{ $prof['prenom'] }} <span
                                            style="text-decoration: uppercase">{{ $prof['nom'] }}</span></h2>
                                    <p class="dp" style="font-weight: 600;color:brown; font-size:18px">
                                        {{ $prof->specialite }}</p>

                                    @php
                                        $dt = explode('-', $prof->birthday);
                                        $auj = date('Y');
                                    @endphp

                                    <p class="dp-ag" style="margin-top: 1rem">
                                        Age: <strong>{{ $auj - $dt[0] }} ans</strong></p>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <strong class="text-default text-large text-center align-center">
                        Aucun professeur enr&eacute;gistr&eacute;, veuillez en ajouter
                        <a href="{{ route('professeur.ajouter') }}">ici</a>
                    </strong>
                @endforelse
            </div>
        </div>
    </div>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
@endsection
