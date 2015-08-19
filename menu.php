<?php
/* * ************************************
 * Script définissiant la barre de navigation supérieur
 * ************************************ */

global $authentification;
global $utilisateur;
?>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Déployer</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php">AEDI</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="./index.php"><span class="glyphicon glyphicon-home white" aria-hidden="true"></span> Accueil</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user white" aria-hidden="true"></span> Etudiants <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Outils</li>
                        <li><a href="http://shareif.insa-lyon.fr/redmine" target="_blank">Redmine</a></li>
                        <li><a href="https://shareif.insa-lyon.fr/" target="_blank">Share IF</a></li>

                        <!--<li role="separator" class="divider"></li>

                        <li class="nav-header"><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Espace Pro.</li>
                        <li><a href="index.php?page=Entretiens_Etudiant">Simulations d'entretiens</a></li>
                        <li><a href="index.php?page=Stages_Etudiant">Stages</a></li>
                        <li><a href="index.php?page=CV_Etudiant">CV</a></li> -->

                        <li role="separator" class="divider"></li>

                        <li class="nav-header"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span> événements</li>
                        <li><a href="index.php?page=Evenements_Etudiant">Présentation</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-flag white" aria-hidden="true"></span> Entreprises <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> événements</li>
                        <li><a href="index.php?page=RIFs_Entreprise">Rencontres IF</a></li>
                        <li><a href="index.php?page=Entretiens_Entreprise">Simulations d'entretiens</a></li>
                        <li><a href="index.php?page=Conferences">Conférences</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="nav-header"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> CVthèque</li>
                        <li><a href="index.php?page=CV_Info">Offre</a></li>
                        <!-- <li><a href="index.php?page=CV_Entreprise">Consultation</a></li> -->

                        <li role="separator" class="divider"></li>

                        <li class="nav-header"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Informations</li>
                        <li><a href="index.php?page=Parrainage">Devenir parrain de promotion</a></li>
                    </ul>
                </li>
                <?php
                if ($authentification->isAuthentifie() && ($utilisateur->getPersonne()->getRole() == Personne::AEDI || $utilisateur->getPersonne()->getRole() == Personne::ADMIN)) {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-eye-open white" aria-hidden="true"></span> 
                            Administration <span class="caret"></span></a>

                        <ul class="dropdown-menu">

                            <?php
                            /* Affichage des outils d'administration uniquement pour les... admins! */
                            if ($utilisateur->getPersonne()->getRole() == Personne::ADMIN) {
                                ?>

                                <li class="nav-header"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Utilisateurs</li>
                                <li><a href="index.php?page=Administration_Utilisateurs">Utilisateurs</a></li>
                                <li><a href="index.php?page=Administration_Journal">Journal</a></li>

                                <li class="divider"></li>

                                <?php
                            }
                            ?>

                            <li class="nav-header"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Modules</li>
                            <li><a href="index.php?page=Administration_Annuaire">Annuaire Entreprises</a></li>
                            <li><a href="index.php?page=Administration_CV">CV</a></li>
                            <li><a href="index.php?page=Administration_RIFs">RIFs</a></li>
                            <li><a href="index.php?page=Administration_Entretiens">Simulations d'entretiens</a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>

                <li class=""><a href="index.php?page=A_Propos"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> A propos</a></li>
                <li class=""><a href="index.php?page=Contact"><span class="glyphicon glyphicon-envelope white" aria-hidden="true"></span> Contact</a></li>
            </ul>
<!-- désactivation de la connection, vu que t'façon on a rien qui marche avec pour l'instant
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <?php
                    /* Affichage du nom prénom ou de la demande de connexion suivant l'état de l'utilisateur */
                    if ($authentification->isAuthentifie()) {
                        echo '<a data-toggle="modal" href="#user_info_dialog">';
                        echo '<i class="icon-user icon-white"></i><span id="navbar_username"> ';
                        echo $utilisateur->getPersonne()->getPrenom() . " " . $utilisateur->getPersonne()->getNom();
                        echo '</span></a>';
                    } else {
                        echo '<a data-toggle="modal" href="#login_dialog">';
                        echo 'Se connecter';
                        echo '</a>';
                    }
                    ?>
                </li>
                <?php
                /* Bouton de déconnexion */
                if ($authentification->isAuthentifie()) {
                    echo '<li>';
                    echo '<a href="?action=logout"><i class="icon-off icon-white"></i></a>';
                    echo '</li>';
                }
                ?>
            </ul> -->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
