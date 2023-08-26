<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lyse Ent | GestEcole</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('base/img/favicon.ico') }}">

    <link href='{{ asset('asset/css/bootstrap.css') }}' rel='stylesheet' />

    <link href="{{ asset('asset/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <link href='{{ asset('asset/css/rotating-card.css') }}' rel='stylesheet' />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <style>
        body {
            margin-top: 100px;
        }

        .btn-info,
        .btn-info:hover,
        .btn-info:focus {
            color: #FFF !important;
            background-color: #00bbff !important;
            border-color: #00bbff !important;
        }

        .btn-info {
            opacity: .8;
            transition: all 0.1s;
            -webkit-transition: all 0.1s;
        }

        .btn-info:hover,
        .btn-info:focus {
            opacity: 1;
        }

        .st {
            color: rgba(236, 243, 131, 0.603);
            font-size: 34px;
            font-family: 'comic sans ms', sans-serif;
            letter-spacing: 7px;
        }

        .mlink {
            font-family: 'comic sans ms', sans-serif;
            font-size: 22px;
            color: crimson;
        }

        .mlink:hover {
            text-decoration: none;
            font-size: 26px;
        }

        .test {
            margin-top: 70px;
            margin-bottom: 160px;
        }

        .ex {
            font-weight: 700;
            font-size: 18px;
            color: crimson;
        }
    </style>
</head>
<div class="container">

    <div class="row">
        <h1 class="title test">
            Lyse Ent | Mon &Eacute;cole
            <br>
            <span class="st">
                Plateforme de gestion d'&eacute;cole
            </span>
        </h1>

        @if (Session::has('fail'))
            <p style="text-align: center; color:rgba(243, 62, 62, 0.849); padding-bottom: 10px; font-size:28px; font-weight:600">
                {{ Session::get('fail') }} <br>
                <i class="fa fa-arrow-circle-down"></i>
            </p>
        @endif

        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">

                                <img src="{{ asset('asset/images/rotating_card_thumb.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Bienvenue Personnel</h3>
                                    <p class="profession">Connectez-vous</p>
                                    <p class="text-center">
                                        " La s&eacute;curit&eacute; est un concept important dans notre monde.
                                        Ainsi pour acc&eacute;der &agrave; cette plate-forme et toutes ces fonctions,
                                        vous devez &ecirc;tre autoris&eacute; &agrave; en avoir acc&egrave;s. "
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Connectez-vous pour avoir acc&egrave;s &agrave; votre compte"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Mon &Eacute;cole</h4>
                                    <p class="text-center">Acc&egrave;s &agrave; la plate-forme des
                                        <span class="ex">Personnels</span> de l'&eacute;cole.
                                    </p>

                                    <div class="stats-container">
                                        <p class="text-center">
                                            <a href="{{ route('logPers') }}" class="mlink">Connexion</a>
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->



            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card-container ">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="{{ asset('asset/images/rotating_card_thumb.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Bienvenue Professeur</h3>
                                    <p class="profession">Connectez-vous</p>
                                    <p class="text-center">
                                        " La s&eacute;curit&eacute; est un concept important dans notre monde.
                                        Ainsi pour acc&eacute;der &agrave; cette plate-forme et toutes ces fonctions,
                                        vous devez &ecirc;tre autoris&eacute; &agrave; en avoir acc&egrave;s. "
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Connectez-vous pour avoir acc&egrave;s &agrave; votre compte"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Mon &Eacute;cole</h4>
                                    <p class="text-center">Acc&egrave;s &agrave; la plate-forme des
                                        <span class="ex">Professeurs</span> de l'&eacute;cole.
                                    </p>

                                    <div class="stats-container">
                                        <p class="text-center">
                                            <a href="{{ route('logProf') }}" class="mlink">Connexion</a>
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->


            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="{{ asset('asset/images/rotating_card_thumb.jpg') }}" alt="" />
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Bienvenue &Eacute;l&egrave;ve</h3>
                                    <p class="profession">Connectez-vous</p>
                                    <p class="text-center">
                                        " La s&eacute;curit&eacute; est un concept important dans notre monde.
                                        Ainsi pour acc&eacute;der &agrave; cette plate-forme et toutes ces fonctions,
                                        vous devez &ecirc;tre autoris&eacute; &agrave; en avoir acc&egrave;s. "
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Connectez-vous pour avoir acc&egrave;s &agrave; votre compte"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Mon &Eacute;cole</h4>
                                    <p class="text-center">Acc&egrave;s &agrave; la plate-forme des
                                        <span class="ex">&Eacute;l&egrave;ves</span> de l'&eacute;cole.
                                    </p>

                                    <div class="stats-container">
                                        <p class="text-center">
                                            <a href="{{ route('logElev') }}" class="mlink">Connexion</a>
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col-sm-3 -->
        </div> <!-- end col-sm-10 -->

    </div> <!-- end row -->

    <div class="space-200"></div>

</div>

<script src="{{ asset('asset/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}" type="text/javascript"></script>

<script type="text/javascript">
    $().ready(function() {
        $('[rel="tooltip"]').tooltip();

        $('a.scroll-down').click(function(e) {
            e.preventDefault();
            scroll_target = $(this).data('href');
            $('html, body').animate({
                scrollTop: $(scroll_target).offset().top - 60
            }, 1000);
        });

    });

    function rotateCard(btn) {
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if ($card.hasClass('hover')) {
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }
</script>

</body>
</html>
