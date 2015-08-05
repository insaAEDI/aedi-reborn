﻿<?php
/* * ************************************
 * Script définissiant la barre de navigation supérieur
 * ************************************ */

global $authentification;
global $utilisateur;
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Déployer</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.php"><img src="commun/img/logo_aedi_2015.png" alt="AEDI" height="20px" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="./index.php"><i class="icon-home icon-white"></i> Accueil</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-user icon-white"></i> Etudiants <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header"><i class="icon-pencil"></i> Outils</li>
                        <li><a href="http://shareif.insa-lyon.fr/redmine" target="_blank">Redmine</a></li>
                        <li><a href="https://shareif.insa-lyon.fr/" target="_blank">Share IF</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="nav-header"><i class="icon-road"></i> Espace Pro.</li>
                        <li><a href="index.php?page=Entretiens_Etudiant">Simulations d'entretiens</a></li>
                        <li><a href="index.php?page=Stages_Etudiant">Stages</a></li>
                        <li><a href="index.php?page=CV_Etudiant">CV</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="nav-header"><i class="icon-glass"></i> Evènements</li>
                        <li><a href="index.php?page=Evenements_Etudiant">Présentation</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-flag icon-white"></i> Entreprises <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="nav-header"><i class="icon-star"></i> Evénements</li>
                        <li><a href="index.php?page=RIFs_Entreprise">Rencontres IF</a></li>
                        <li><a href="index.php?page=Entretiens_Entreprise">Simulations d'entretiens</a></li>
                        <li><a href="index.php?page=Conferences">Conférences</a></li>

                        <li role="separator" class="divider"></li>

                        <li class="nav-header"><i class="icon-book"></i> CVthèque</li>
                        <li><a href="index.php?page=CV_Info">Offre</a></li>
                        <!-- <li><a href="index.php?page=CV_Entreprise">Consultation</a></li> -->

                        <li role="separator" class="divider"></li>

                        <li class="nav-header"><i class="icon-search"></i> Informations</li>
                        <li><a href="index.php?page=Parrainage">Devenir parrain de promotion</a></li>
                    </ul>
                </li>
                <?php
                if ($authentification->isAuthentifie() && ($utilisateur->getPersonne()->getRole() == Personne::AEDI || $utilisateur->getPersonne()->getRole() == Personne::ADMIN)) {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-eye-open icon-white"></i>
                            Administration <b class="caret"></b></a>

                        <ul class="dropdown-menu">

                            <?php
                            /* Affichage des outils d'administration uniquement pour les... admins! */
                            if ($utilisateur->getPersonne()->getRole() == Personne::ADMIN) {
                                ?>

                                <li class="nav-header"><i class="icon-user"></i> Utilisateurs</li>
                                <li><a href="index.php?page=Administration_Utilisateurs">Utilisateurs</a></li>
                                <li><a href="index.php?page=Administration_Journal">Journal</a></li>

                                <li class="divider"></li>

                                <?php
                            }
                            ?>

                            <li class="nav-header"><i class="icon-cog"></i> Modules</li>
                            <li><a href="index.php?page=Administration_Annuaire">Annuaire Entreprises</a></li>
                            <li><a href="index.php?page=Administration_CV">CV</a></li>
                            <li><a href="index.php?page=Administration_RIFs">RIFs</a></li>
                            <li><a href="index.php?page=Administration_Entretiens">Simulations d'entretiens</a></li>
                        </ul>
                    </li>
                    <?php
                }
                ?>

                <li class=""><a href="index.php?page=A_Propos"><i class="icon-info-sign icon-white"></i> A propos</a></li>
                <li class=""><a href="index.php?page=Contact"><i class="icon-envelope icon-white"></i> Contact</a></li>
            </ul>
            
            <script>
                //Fonction permettant de changer le theme par le numéro
                // du theme passé en paramètre
                function change_theme(theme) {
                    $.ajax({// fonction permettant de faire de l'ajax
                        type: "POST", // methode de transmission des données au fichier php
                        url: "index.php", // url du fichier php
                        data: {theme: theme},
                        success: function (retour) { // si l'appel a bien fonctionné
                            location.reload();
                        }
                    });
                }
            </script>
            
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
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>