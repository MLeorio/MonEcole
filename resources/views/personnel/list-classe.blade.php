@extends('base')

@section('menu')
    @include('personnel.nav-pers')
@endsection

@section('content')
    <div class="courses-area">
        <div class="container-fluid">
            <div class="row mg-b-15">
                @forelse ($classes as $classe)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <a href="{{ route("classe.show", ['classe' => $classe]) }}">
                                <div class="courses-title">
                                    <img src="{{ asset('base/img/courses/1.jpg') }}" alt="">
                                    <h2>{{ $classe['libelle'] }} :
                                        <strong style="color: blue; text-transform:uppercase">
                                        {{ $classe['niveau'] }}</strong></h2>

                                </div>
                                <div class="course-des">
                                    @foreach ($classe->professeurs as $titulaire)
                                        @if ($titulaire->pivot->titulaire == 1)
                                            @php
                                                $date = explode('-', $titulaire->pivot->created_at);
                                                $an = $date[0];
                                            @endphp
                                            <p><span><i class="fa fa-clock"></i></span> Titulaire :
                                                <b>{{ $titulaire->nom }} ( {{ $an }} )</b>
                                            </p>
                                        @endif
                                    @endforeach

                                    <p><span><i class="fa fa-clock"></i></span>
                                        Effectif : <b>{{ $classe->eleves->count() }}
                                            &eacute;l&egrave;ve(s)</b></p>
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
