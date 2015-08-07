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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="presentation well">
                    <div>
                        <img id="logo" height="150px" src="commun/img/logo_aedi_2015.png" alt="Logo AEDI" />
                        <h1>Association des Elèves du Département Informatique</h1>
                    </div>
                    <p><em>Association de l'INSA-Lyon créée pour renforcer la cohésion entre les étudiants du Département Informatique, les aider dans leur cursus, et établir des contacts privilégiés avec les entreprises.</em></p>
                    <p>Cela fait plus de trente ans que notre association étoffe son éventails d'évènements, de la Semaine d'Intégration des nouveaux élèves aux Rencontres IF, forum ouvert aux entreprises, en passant par le Week-End Ski, le Concert IF, le Voyage de fin d'étude, ...</p>
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
                </div> <!-- presentation -->
            </div>

            <div class="col-md-8">
                <div id="photoCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#photoCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#photoCarousel" data-slide-to="1"></li>
                        <li data-target="#photoCarousel" data-slide-to="2"></li>
                        <li data-target="#photoCarousel" data-slide-to="3"></li>
                        <li data-target="#photoCarousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="./commun/img/photo_caroussel/conference.jpg" alt="Conférence AEDI">
                            <div class="carousel-caption">
                                <h4>Une association qui relie Etudiants et Entreprises</h4>
                                <p>A travers les évènements qu'elle organise, l'AEDI a pour but de renforcer la cohésion entre les étudiants du Département, tout en leur offrant des contacts privilégiés avec les entreprises.</p>
                            </div>
                        </div>
                        <div class="item" role="listbox">
                            <img src="./commun/img/photo_caroussel/total.jpg" alt="Equipe AEDI">
                            <div class="carousel-caption">
                                <h4>Une équipe dynamique prête à vous accueillir</h4>
                                <p>L'AEDI est gérée par une équipe d'étudiants bénévoles et actifs, aussi à l'aise pour les évènements étudiants que pour le dialogue avec les entreprises.</p>
                            </div>
                        </div>
                        <div class="item" role="listbox">
                            <img src="./commun/img/photo_caroussel/rif.jpg" alt="Rencontres IF">
                            <div class="carousel-caption">
                                <h4>De multiples évènements professionnels</h4>
                                <p>Tout au long de l'année, l'AEDI convie des entreprises à des conférences, déjeunes-métiers, etc, le but étant de créer des liens forts entre étudiants et sociétés. Le point fort de cette politique est la Journée de Rencontres IF, durant laquelle sont conviées une trentaine de grandes entreprises.</p>
                            </div>
                        </div>
                        <div class="item" role="listbox">
                            <img src="./commun/img/photo_caroussel/integration.jpg" alt="Rencontres IF">
                            <div class="carousel-caption">
                                <h4>Détente et Cohésion</h4>
                                <p>Car il n'est pas facile de débarquer dans l'univers insalien, l'AEDI prévoit chaque année de multiples évènements pour intégrer les nouveaux venus et instaurer une ambiance chaleureuse.</p>
                            </div>
                        </div>
                        <div class="item" role="listbox">
                            <img  src="./commun/img/photo_caroussel/integration2.jpg" alt="Equipe AEDI">
                            <div class="carousel-caption">
                                <h4>... alors rejoignez-nous !</h4>
                                <p>N'hésitez pas à nous contacter, au local, par mails, par téléphone, etc ... Nous nous ferons un plaisir de discuter avec vous !</p>
                            </div>
                        </div>
                    </div> <!-- carrousel-inner -->

                    <a class="left carousel-control" href="#photoCarousel" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#photoCarousel" data-slide="next">&rsaquo;</a>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container-fluid -->

    <hr>

    <div class="logos">
        <div class="container-fluid">
            <table>
                <tr>
                    <td><a href="http://www.insa-lyon.fr/" title="INSA-Lyon"><img class="img-responsive" src="./commun/img/insa_logo.png" alt="INSA-Lyon"></a></td>
                    <td><a href="http://if.insa-lyon.fr/" title="Département Informatique"><img class="img-responsive" src="./commun/img/if_logo.png" alt="Département Informatique"></a></td>
                    <td><a href="http://hardis.fr" title="Hardis - Parrain Promo 2016"><img class="img-responsive" src="./commun/img/parrains_caroussel/hardis.png" alt="Hardis"></a></td>
                    <td><a href="http://www.bull.fr/" title="Bull - Parrain Promo 2017"><img class="img-responsive" src="./commun/img/parrains_caroussel/bull.png" alt="Bull"></a></td>
                    <td><a href="http://www.soprasteria.com/" title="Sopra Steria - Parrain Promo 2018"><img class="img-responsive" src="./commun/img/parrains_caroussel/sopra.png" alt="Sopra"></a></td>
                </tr>
            </table>
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
