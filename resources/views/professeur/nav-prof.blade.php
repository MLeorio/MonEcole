<nav id="sidebar" aria-label="">
    <div class="sidebar-header">
        <a href="{{ route('homeProf') }}">
            <!-- logo -->
            <h1 style="padding: 20px; width:200px;" class="main-logo">Mon &Eacute;cole</h1>
        </a>
        <strong>
            <a href="{{ route('homeProf') }}">
                <img src="{{ asset('base/img/logo/logosn.png') }}" alt="" />
            </a>
        </strong>
    </div>
    <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro" aria-label="">
            <ul class="metismenu" id="menu1">

                {{-- Le lien de l'accueil --}}
                <li class="{{ Request::is('professeur/dashboard') ? 'f-active' : '' }}">
                    <a title="Home" href="{{ route('homeProf') }}" aria-expanded="false">
                        <span class="educate-icon educate-home icon-wrap"></span>
                        <span
                            class="mini-click-non
                            {{ Request::is('professeur/dashboard') ? 'pers' : '' }} ">Accueil</span>
                    </a>
                </li>

                {{-- Le lien pour Classe --}}
                <li class="{{ Request::is(['professeur/classe', 'professeur/classe/*']) ? 'f-active' : '' }}">
                    <a title="Emploi du temps" href="{{ route('prof.classes') }}" aria-expanded="false">
                        <span class="educate-icon educate-department icon-wrap"></span>
                        <span class="mini-click-non {{ Request::is(['professeur/classe', 'professeur/classe/*']) ? 'pers' : '' }}">Mes Classes</span></a>
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
