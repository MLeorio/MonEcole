@extends('base')


@section('title')
    Eleves ~ Liste des eleves
@endsection

@section('menu')
    @include('personnel.nav-pers')
@endsection

@section('content')
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                @foreach ($eleves as $eleve)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="student-inner-std mg-t-30 res-mg-b-30"
                            style="border-top: 1px solid rgba(95, 90, 90, 0.233);
                            border-left: 1px solid rgb(95, 90, 90, 0.233);
                            border-right: 1px solid rgb(95, 90, 90, 0.233);
                            border-radius: 0 0 15px 15px;
                            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5), 0 7px 21px 0 rgb(0, 0, 0, 0.1);
                            box-sizing:border-box;">
                            <div class="student-img">
                                @if ($eleve->genre == 'Masculin')
                                    <img src="{{ asset('base/img/hom.png') }}" alt="" />
                                @else
                                    <img src="{{ asset('base/img/fem.png') }}" alt="" />
                                @endif
                            </div>
                            <a href="{{ route('eleve.show', ['eleve' => $eleve->id]) }}">
                                <div class="student-dtl" style="background-color: #00FFFF;
                                border-radius: 0 0 15px 15px">
                                    <h2>{{ $eleve['prenom'] }} <span
                                            style="text-decoration: uppercase">{{ $eleve['nom'] }}</span></h2>
                                    <p class="dp" style="font-weight: 600;color:brown; font-size:18px">
                                        {{ $eleve->matricule }}</p>

                                    @php
                                        $dt = explode('-', $eleve->birthday);
                                        $auj = date('Y');
                                    @endphp

                                    <p class="dp-ag" style="margin-top: 1rem">
                                        Age: <strong>{{ $auj - $dt[0] }} ans</strong>
                                    </p> <br>
                                    <p class="dp-ag"><strong
                                            style="font-size: 18px; color:blue">{{ $eleve->adresse }}</strong></p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
