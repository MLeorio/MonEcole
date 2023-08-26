<nav id="dropdown" aria-label="Mon menu">
    <ul class="mobile-menu-nav">

        <li><a href="{{ route('homeProf') }}">Accueil</a></li>
        <li>
            <a data-toggle="collapse" data-target="#demoevent" href="">
                Mati&egrave;res
                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
            </a>
            <ul id="demoevent" class="collapse dropdown-header-top">
                <li>
                    <a href="{{ route('matiere.list') }}" title="Liste des mati&egrave;res">Liste des mati&egrave;res</a>
                </li>
                <li>
                    <a href="{{ route('matiere.ajouter') }}" title="Ajouter une mati&egrave;re">Ajouter une mati&egrave;re</a>
                </li>
            </ul>
        </li>

        <li>
            <a data-toggle="collapse" data-target="#demoevent" href="">
                Classes
                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
            </a>
            <ul id="demoevent" class="collapse dropdown-header-top">
                <li>
                    <a href="{{ route('classe.list') }}" title="Liste des classes">Liste des classes</a>
                </li>
                <li>
                    <a href="{{ route('classe.ajouter') }}" title="Ajouter une classe">Ajouter une classe</a>
                </li>
            </ul>
        </li>

        <li>
            <a data-toggle="collapse" data-target="#demoevent" href="">
                Professeurs
                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
            </a>
            <ul id="demoevent" class="collapse dropdown-header-top">
                <li>
                    <a href="{{ route('professeur.list') }}" title="Liste des professeurs">Liste des professeurs</a>
                </li>
                <li>
                    <a href="{{ route('professeur.ajouter') }}" title="Ajouter un professeur">Ajouter un professeur</a>
                </li>
            </ul>
        </li>

        <li>
            <a data-toggle="collapse" data-target="#demoevent" href="">
                &Eacute;l&egrave;ves
                <span class="admin-project-icon edu-icon edu-down-arrow"></span>
            </a>
            <ul id="demoevent" class="collapse dropdown-header-top">
                <li>
                    <a href="{{ route('eleve.list') }}" title="Liste des &eacute;l&egrave;ves">Liste des &eacute;l&egrave;ves</a>
                </li>
                <li>
                    <a href="{{ route('eleve.ajouter') }}" title="Ajouter un &Eacute;l&egrave;ve">Ajouter un &Eacute;l&egrave;ve</a>
                </li>
            </ul>
        </li>

        <li><a href="">Emploi du temps</a></li>
        
        <li><a href="{{ route('logout') }}">D&eacute;connexion</a></li>
    </ul>
</nav>
