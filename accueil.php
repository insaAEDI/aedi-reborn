<?php
/**
 * -----------------------------------------------------------
 * Vue - ACCUEIL
 * -----------------------------------------------------------
 * Auteur : Benjamin (Bill) Planche - Aldream (4IF 2011/12)
 *          Contact - benjamin.planche@aldream.net
 * ---------------------
 * Page d'accueil avec une description générale, les principaux sponsors, ... UNE PUTAIN DE LICORNE, SPECE D'ABRUTI
 */
?>

<div id="accueil">
    <div class="row" style="margin-top: 20px;">
        <div class="span4">
            <div class="row">
                <p class="span4">
                    <img id="logo" style="float:left; margin-left:10%;" src="commun/img/logo_aedi_2015.png" width="120px" alt="AEDI" />
                    <img style="float:right; margin-right:10%;" id="nom_aedi" src="commun/img/nom_aedi.png" alt="AEDI" class="adapt-width" span=2 scale=0.85 max=150 />
                </p>
            </div>
            <div class="well">
                <p><span class="hero_motcle">AEDI</span> <small>(nf)</small> : <em>Association de l'INSA-Lyon créée pour renforcer la cohésion entre les étudiants du Département Informatique, les aider dans leur cursus, et établir des contacts privilégiés avec les entreprises.</em></p>
                <p>Cela fait plus de vingt-neuf ans que notre association étoffe son éventails d'évènements, de la Semaine d'Intégration des nouveaux élèves aux Rencontres IF, forum ouvert aux entreprises, en passant par le Week-End Ski, le Concert IF, le Voyage de fin d'étude, ...</p>
                <p>Avec à sa tête une équipe dynamique, l'AEDI s'épanouit et grandit, riche des liens qu'elle tisse avec les entreprises et anciens étudiants.</p>
                <p style="text-align:justify; margin-bottom:20px;"><strong>Soyez le ou la bienvenu(e) sur notre site !</strong>
                </p>
                <div style="width:50%; float:left; display:inline-block;" >
                    <div style="position:relative; top:-3px; display:inline-block;" class="fb-like" data-href="http://www.facebook.com/AEDI.INSA.Lyon" data-send="false" data-layout="button_count" data-width="0" data-show-faces="false"></div>
                    <p style="margin-top:10px; margin-left: 5%; display:inline-block;"><a href="https://twitter.com/AEDInsa" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-show-screen-name="false">Suivre @AEDInsa</a></p>
                </div>
                <p style="width:50%; text-align:right; display:inline-block;">
                    <a href="index.php?page=A_Propos" class="btn btn-primary btn-large"><i class="icon-search icon-white"></i> En savoir plus</a>
                </p>
            </div>
        </div>
        <div class="span8 columns">
            <div id="photoCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="adapt-width" span=8 src="./commun/img/photo_caroussel/conference.jpg" width="770px" alt="Conférence AEDI">
                        <div class="carousel-caption">
                            <h4>Une association qui relie Etudiants et Entreprises</h4>
                            <p>A travers les évènements qu'elle organise, l'AEDI a pour but de renforcer la cohésion entre les étudiants du Département, tout en leur offrant des contacts privilégiés avec les entreprises.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="adapt-width" span=8 src="./commun/img/photo_caroussel/total.jpg" width="770px" alt="Equipe AEDI">
                        <div class="carousel-caption">
                            <h4>Une équipe dynamique prête à vous accueillir</h4>
                            <p>L'AEDI est gérée par une équipe d'étudiants bénévoles et actifs, aussi à l'aise pour les évènements étudiants que pour le dialogue avec les entreprises.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="adapt-width" span=8 src="./commun/img/photo_caroussel/rif.jpg" width="770px" alt="Rencontres IF">
                        <div class="carousel-caption">
                            <h4>De multiples évènements professionnels</h4>
                            <p>Tout au long de l'année, l'AEDI convie des entreprises à des conférences, déjeunes-métiers, etc, le but étant de créer des liens forts entre étudiants et sociétés. Le point fort de cette politique est la Journée de Rencontres IF, durant laquelle sont conviées une trentaine de grandes entreprises.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="adapt-width" span=8 src="./commun/img/photo_caroussel/integration.jpg" width="770px" alt="Rencontres IF">
                        <div class="carousel-caption">
                            <h4>Détente et Cohésion</h4>
                            <p>Car il n'est pas facile de débarquer dans l'univers insalien, l'AEDI prévoit chaque année de multiples évènements pour intégrer les nouveaux venus et instaurer une ambiance chaleureuse.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="adapt-width" span=8 src="./commun/img/photo_caroussel/integration2.jpg" width="770px" alt="Equipe AEDI">
                        <div class="carousel-caption">
                            <h4>... alors rejoignez-nous !</h4>
                            <p>N'hésitez pas à nous contacter, au local, par mails, par téléphone, etc ... Nous nous ferons un plaisir de discuter avec vous !</p>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#photoCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#photoCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
    </div>
    <div class="logos">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <a href="http://www.insa-lyon.fr/" title="INSA-Lyon"><img src="./commun/img/insa_logo.png" alt="INSA-Lyon"></a>
                </div>
                <div class="col-md-2">
                    <a href="http://if.insa-lyon.fr/" title="Département Informatique"><img src="./commun/img/if_logo.png" alt="Département Informatique"></a>
                </div>
                <div class="col-md-2">
                    <a href="http://www.axa.fr/" title="Axa - Parrain Promo 2015"><img src="./commun/img/parrains_caroussel/axa2.png" alt="Axa"></a>
                </div>
                <div class="col-md-2">
                    <a href="http://hardis.fr" title="Hardis - Parrain Promo 2016"><img src="./commun/img/parrains_caroussel/hardis.png" alt="Hardis"></a>
                </div>
                <div class="col-md-2">
                    <a href="http://www.bull.fr/" title="Bull - Parrain Promo 2017"><img src="./commun/img/parrains_caroussel/bull.png" alt="Bull"></a>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="row" style="text-align:center;">
                <p class="span12 centre">
                    <embed style="margin-top:-20px;" src="./commun/img/societe_generale.swf" class="adapt-width" span="8" scale="0.60" max="800" width="372px">
                </p>
            </div>
    -->
</div>
<div id="fb-root"></div>
<script>
    $(document).ready(function () {
        adaptWidthToSpan();
        adaptHeightToSpan();
    });

    // Facebook :
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Tweeter :
    !function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");

    var konami_keys = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
    var konami_index = 0;
    $(document).keydown(function (e) {
        if (e.keyCode === konami_keys[konami_index++]) {
            if (konami_index === konami_keys.length) {
                $(document).unbind('keydown', arguments.callee);
                alert("Les nouveaux responsables de ce site tiennent à préciser que, s'il est tout moche, c'est parce que ses créateurs ont sans doute passé plus de temps à faire ça qu'autre chose. Ils souhaitent aussi faire savoir qu'ils ne cautionnent pas du tout ce genre de comportement, oh non alors.\n\n 			- 2015");
                $('.footer').append('<p>Ok, nous aussi on sait rigoler :D - 2015</p><iframe width="420" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allowfullscreen></iframe>');
                $('body').css('background', 'url("logo/oystercage.jpg")').css('background-repeat', 'true');
                $.getScript('http://www.cornify.com/js/cornify.js', function () {
                    cornify_add();
                    $(document).keydown(cornify_add);
                });
            }
        } else {
            konami_index = 0;
        }
    });

    // Caroussels :
    $('#photoCarousel').carousel({
        interval: 10000
    })

    $('#parrainsCarousel').carousel({
        interval: 5000
    })
</script>
