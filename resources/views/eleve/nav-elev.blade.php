<nav id="sidebar" aria-label="">
    <div class="sidebar-header">
        <a href="{{ route('homeEle') }}">
            <!-- logo -->
            <h1 style="padding: 20px; width:200px;" class="main-logo">Mon &Eacute;cole</h1>
        </a>
        <strong>
            <a href="{{ route('homeEle') }}">
                <img src="{{ asset('base/img/logo/logosn.png') }}" alt="" />
            </a>
        </strong>
    </div>
    <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro" aria-label="">
            <ul class="metismenu" id="menu1">

                <li class="{{ Request::is('professeur/dashboard') ? 'f-active' : '' }}">
                    <a title="Home" href="{{ route('homeProf') }}" aria-expanded="false">
                        <span class="educate-icon educate-home icon-wrap"></span>
                        <span
                            class="mini-click-non
                        {{ Request::is('professeur/dashboard') ? 'pers' : '' }} ">Accueil</span>
                    </a>
                </li>

                <li class="{{ Request::is('professeur/dashboard/matiere') ? 'f-active' : '' }}">
                    <a title="Mes matier&egrave;s" href="{{ route('matiere.index') }}" aria-expanded="false">
                        <span class="educate-icon educate-library icon-wrap"></span>
                        <span
                            class="mini-click-non
                        {{ Request::is('professeur/dashboard/matiere') ? 'pers' : '' }} ">Mes
                            mati&egrave;res</span>
                    </a>
                </li>

                <li class="{{ Request::is('professeur/dashboard/classe') ? 'f-active' : '' }}">
                    <a title="Ma classe" href="{{ route('classe.index') }}" aria-expanded="false">
                        <span class="educate-icon educate-department icon-wrap"></span>
                        <span
                            class="mini-click-non
                        {{ Request::is('professeur/dashboard/classe') ? 'pers' : '' }} ">Ma
                            classe</span>
                    </a>
                </li>

                <li class="{{ Request::is('professeur/dashboard/eleve') ? 'f-active' : '' }}">
                    <a title="Emploi du temps" href="" aria-expanded="false">
                        <span class="educate-icon educate-event icon-wrap"></span>
                        <span
                            class="mini-click-non
                        {{ Request::is('professeur/dashboard/eleve') ? 'pers' : '' }} ">Mon
                            calendrier</span>
                    </a>
                </li>

                <li>
                    <a title="Home" href="{{ route('logout') }}" aria-expanded="false" style="color: red">
                        <i class="fa fa-lock" aria-label="true"></i>
                        <span class="mini-click-non" style="margin-left: 10px;font-size:18px">
                            D&eacute;connexion
                        </span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</nav>
