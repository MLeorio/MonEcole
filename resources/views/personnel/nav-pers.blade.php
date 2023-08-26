<nav id="sidebar" aria-label="">
    <div class="sidebar-header">
        <a href="{{ route('homePers') }}">
            <!-- logo -->
            <h1 style="padding: 20px; width:200px;" class="main-logo">Mon &Eacute;cole</h1>
        </a>
        <strong>
            <a href="{{ route('homePers') }}">
                <img src="{{ asset('base/img/logo/logosn.png') }}" alt="" />
            </a>
        </strong>
    </div>
    <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro" aria-label="">
            <ul class="metismenu" id="menu1">

                {{-- Le lien de l'accueil --}}
                <li class="{{ Request::is('personnel/dashboard') ? 'f-active' : '' }}">
                    <a title="Home" href="{{ route('homePers') }}" aria-expanded="false">
                        <span class="educate-icon educate-home icon-wrap"></span>
                        <span
                            class="mini-click-non
                            {{ Request::is('personnel/dashboard') ? 'pers' : '' }} ">Accueil</span>
                    </a>
                </li>

                {{-- Le lien pour Matiere --}}
                <li class="{{ Request::is('personnel/matiere/detail/*') ? 'f-active' : '' }}">
                    <a class="has-arrow" href="" aria-expanded="false">
                        <span class="educate-icon educate-library icon-wrap"></span>
                        <span class="mini-click-non {{ Request::is('personnel/matiere/detail/*') ? 'pers' : '' }}">
                            Mati&egrave;res
                        </span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li class="{{ Request::is('personnel/matiere') ? 'active f-active' : '' }}">
                            <a title="Liste des mati&egrave;res" href="{{ route('matiere.list') }}">
                                <span class="mini-sub-pro {{ Request::is('personnel/matiere') ? 'pers' : '' }}">
                                    Liste des mati&egrave;res
                                </span>
                            </a>
                        </li>

                        <li class="{{ Request::is('personnel/matiere/ajouter-matiere') ? 'f-active active' : '' }}">
                            <a title="Ajouter une mati&egrave;re" href="{{ route('matiere.ajouter') }}">
                                <span
                                    class="mini-sub-pro {{ Request::is('personnel/matiere/ajouter-matiere') ? 'pers' : '' }}">
                                    Ajouter une mati&egrave;re
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Le lien pour Classe --}}
                <li class="{{ Request::is('personnel/classe/detail/*') ? 'f-active' : '' }}">
                    <a class="has-arrow" href="{{ route('classe.list') }}" aria-expanded="false">
                        <span class="educate-icon educate-department icon-wrap"></span>
                        <span class="mini-click-non {{ Request::is('personnel/classe/detail/*') ? 'pers' : '' }}">
                            Classes
                        </span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li class="{{ Request::is('personnel/classe') ? 'active f-active' : '' }}">
                            <a title="Liste des classes" href="{{ route('classe.list') }}">
                                <span class="mini-sub-pro {{ Request::is('personnel/classe') ? 'pers' : '' }}">
                                    Liste des classes
                                </span>
                            </a>
                        </li>
                        <li class="{{ Request::is('personnel/classe/ajouter-classe') ? 'active f-active' : '' }}">
                            <a title="Cr&eacute;e une classe" href="{{ route('classe.ajouter') }}">
                                <span
                                    class="mini-sub-pro {{ Request::is('personnel/classe/ajouter-classe') ? 'pers' : '' }}">
                                    Cr&eacute;er une classe
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Le lien pour Profs --}}
                <li class="{{ Request::is('personnel/professeur/detail/*') ? 'f-active' : '' }}">
                    <a class="has-arrow" href="{{ route('professeur.list') }}" aria-expanded="false">
                        <span class="educate-icon educate-professor icon-wrap"></span>
                        <span class="mini-click-non {{ Request::is('personnel/professeur/detail/*') ? 'pers' : '' }}">
                            Professeurs
                        </span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li class="{{ Request::is('personnel/professeur') ? 'active f-active' : '' }}">
                            <a title="Liste des profs" href="{{ route('professeur.list') }}">
                                <span class="mini-sub-pro {{ Request::is('personnel/professeur') ? 'pers' : '' }}">
                                    Liste des Profs
                                </span>
                            </a>
                        </li>
                        <li class="{{ Request::is('personnel/professeur/ajouter-prof') ? 'active f-active' : '' }}">
                            <a title="Add Professor" href="{{ route('professeur.ajouter') }}">
                                <span
                                    class="mini-sub-pro {{ Request::is('personnel/professeur/ajouter-prof') ? 'pers' : '' }}">
                                    Nouveau Prof
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Le lien pour Eleve --}}
                <li class="{{ Request::is('personnel/eleve/detail/*') ? 'f-active' : '' }}">
                    <a class="has-arrow" href="{{ route('eleve.list') }}" aria-expanded="false">
                        <span class="educate-icon educate-student icon-wrap"></span>
                        <span class="mini-click-non {{ Request::is('personnel/eleve/detail/*') ? 'pers' : '' }}">
                            El&egrave;ves
                        </span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li class="{{ Request::is('personnel/eleve') ? 'active f-active' : '' }}">
                            <a title="Liste des &eacute;l&egrave;ves" href="{{ route('eleve.list') }}">
                                <span class="mini-sub-pro {{ Request::is('personnel/eleve') ? 'pers' : '' }}">
                                    Liste des &eacute;l&egrave;ves
                                </span>
                            </a>
                        </li>
                        <li class="{{ Request::is('personnel/eleve/ajouter-eleve') ? 'active f-active' : '' }}">
                            <a title="Ajouter un &eacute;l&egrave;ve" href="{{ route('eleve.ajouter') }}">
                                <span class="mini-sub-pro {{ Request::is('personnel/eleve/ajouter-eleve') ? 'pers' : '' }}">
                                    Nouvel &eacute;l&egrave;ve
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Le lien pour calendrier --}}
                <li>
                    <a title="Emploi du temps" href="" aria-expanded="false">
                        <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                        <span class="mini-click-non">Emploi du temps</span></a>
                </li>

                {{-- Le lien pour Deconnexion --}}
                <li>
                    <a title="Se d&eacute;connecter" href="" aria-expanded="false" style="color: red">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <span class="mini-click-non" style="margin-left: 10px; font-size:18px">
                            D&eacute;connexion</span></a>
                </li>
            </ul>
        </nav>

    </div>
</nav>
