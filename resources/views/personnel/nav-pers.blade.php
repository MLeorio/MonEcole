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
        
                <li class=" {{ Request::is('personnel/dashboard') ? 'f-active' : '' }}">
                    <a title="Home" href="{{ route('homePers') }}" aria-expanded="false">
                        <span class="educate-icon educate-home icon-wrap"></span>
                        <span
                            class="mini-click-non
                            {{ Request::is('personnel/dashboard') ? 'pers' : '' }} ">Accueil</span>
                    </a>
                </li>
        
                <li class="{{ Request::is('personnel/matiere') ? 'f-active' : '' }}">
                    <a class="has-arrow" href="{{ route('matiere.list') }}" aria-expanded="false">
                        <span class="educate-icon educate-library icon-wrap"></span>
                        <span class="mini-click-non {{ Request::is('personnel/matiere') ? 'pers' : '' }}">
                            Mati&egrave;res
                        </span>
                    </a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li><a title="All Courses" href="{{ route('matiere.list') }}">
                            <span class="mini-sub-pro">
                                Liste des mati&egrave;res
                            </span>
                        </a></li>
                        
                        <li><a title="Add Courses" href="{{ route('matiere.ajouter') }}">
                                <span class="mini-sub-pro">
                                    Cr&eacute;er une mati&egrave;re
                                </span>
                        </a></li>
                    </ul>
                </li>
        
                <li>
                    <a class="has-arrow" href="{{ route('classe.list') }}" aria-expanded="false"><span
                            class="educate-icon educate-department icon-wrap"></span> <span
                            class="mini-click-non">Classes</span></a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li><a title="Liste des classes" href="{{ route('classe.list') }}">
                            <span class="mini-sub-pro">Liste
                                    des classes</span></a></li>
                        <li><a title="Cr&eacute;e une classe" href="{{ route('classe.ajouter') }}"><span
                                    class="mini-sub-pro">Cr&eacute;er une classe</span></a></li>
                    </ul>
                </li>
        
                <li>
                    <a class="has-arrow" href="{{ route('professeur.list') }}" aria-expanded="false"><span
                            class="educate-icon educate-professor icon-wrap"></span> <span
                            class="mini-click-non">Professeurs</span></a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li><a title="All Professors" href="{{ route('professeur.list') }}">
                                <span class="mini-sub-pro">Liste
                                    des Profs</span></a></li>
                        <li><a title="Add Professor" href="{{ route('professeur.ajouter') }}">
                                <span class="mini-sub-pro">Nouveau
                                    Prof</span></a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="{{ route('eleve.list') }}" aria-expanded="false"><span
                            class="educate-icon educate-student icon-wrap"></span> <span
                            class="mini-click-non">El&egrave;ves</span></a>
                    <ul class="submenu-angle" aria-expanded="false">
                        <li><a title="All Students" href="{{ route('eleve.list') }}"><span class="mini-sub-pro">Liste
                                    des &eacute;l&egrave;ves</span></a></li>
                        <li><a title="Add Students" href="{{ route('eleve.ajouter') }}">
                            <span class="mini-sub-pro">Nouveau
                                    &eacute;l&egrave;ve</span></a></li>
                    </ul>
                </li>
        
                <li>
                    <a title="Landing Page" href="" aria-expanded="false"><span
                            class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                        <span class="mini-click-non">Calendrier</span></a>
                </li>
        
                <li>
                    <a title="Landing Page" href="" aria-expanded="false" style="color: red">
                        <i class="fa fa-lock"  aria-hidden="true"></i>
                        <span class="mini-click-non" style="margin-left: 10px; font-size:18px">
                            D&eacute;connexion</span></a>
                </li>
            </ul>
        </nav>
        
    </div>
</nav>
