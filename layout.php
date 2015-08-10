<?php
/* * *************************************************
 * Script contenant le header et le footer et incluant les différentes pages
 * en fonction de la demande et de l'analyse du script d'index.
 * ************************************************* */

global $titre_page;
global $nom_module;
global $lien_module;
global $titre_module;
global $nom_page;
global $theme;
global $authentification;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/png" href="commun/img/logo_aedi_2015.png" >
        <?php
        inclure_fichier('commun', 'bootstrap.min', 'css');
        inclure_fichier('commun', 'style', 'css');
        inclure_fichier('commun', 'ui-lightness/jquery-ui', 'css');

        inclure_fichier('commun', 'jquery-2.1.4.min', 'js');
        inclure_fichier('commun', 'jquery-ui.min', 'js');
        inclure_fichier('commun', 'bootstrap.min', 'js');
        inclure_fichier('commun', 'datepicker.fr', 'js');
        inclure_fichier('commun', 'json2', 'js');
        inclure_fichier('commun', 'utils', 'js');
        inclure_fichier('commun', 'jquery.tablesorter.min', 'js');


        inclure_fichier('commun', 'login', 'js');
        inclure_fichier('commun', 'SHA1', 'js');
        ?>

        <title>AEDI - <?php echo $titre_page; ?></title>
    </head>

    <body>
        <?php
        inclure_fichier('', 'menu', 'php');
        inclure_fichier('', 'login', 'php');
        if ($nom_module == 'accueil') {
            $nom_module = '';
        }
        ?>

        <div class="module">   
            <?php inclure_fichier($nom_module, $nom_page, 'php'); ?>
        </div>

        <hr>

        <div id="layout" class="footer">&copy; AEDI - 2015</div>

    </body>
</html>
