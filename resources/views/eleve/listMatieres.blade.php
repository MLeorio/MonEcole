@extends('base')

@section('title')
Mes mati&egrave;res ~ Eleve
@endsection

@section('menu')
@include('eleve.nav-elev')
@endsection

@section('mobile-menu')
@include('eleve.mobile-menu-elev')
@endsection

@section('brand')
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <ul class="breadcome-menu">
        <li><a href="#">Tableau de bord </a> <span class="bread-slash">/</span>
        </li>
        <li><span class="bread-blod"><strong>Mes mati&egrave;res</strong></span>
        </li>
    </ul>
</div>
@endsection

@section('content')
<div class="courses-area">
    <div class="container-fluid">
        <div class="row mg-b-15">
            @forelse ($matieres as $matiere)
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="courses-inner res-mg-b-30">
                    <a href="">
                        <div class="courses-title">
                            <img src="{{ asset('base/img/product/book-1.jpg') }}" alt="">
                            <h2>{{ $matiere['libelle'] }} :
                                <strong style="color: blue; text-transform:uppercase">
                                    {{ $matiere['code'] }}</strong>
                            </h2>

                        </div>
                        <div class="course-des">
                            @foreach ($matiere->professeurs as $prof)
                            <p>
                                <span>
                                    <i class="fa fa-user"></i>
                                </span>
                                Titulaire :
                                <b>{{ $prof }}</b>
                            </p>
                            @endforeach
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