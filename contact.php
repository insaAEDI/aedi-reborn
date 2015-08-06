<?php
/**
 * -----------------------------------------------------------
 * Vue - CONTACT
 * -----------------------------------------------------------
 * Auteur : Benjamin (Bill) Planche - Aldream (4IF 2011/12)
 *          Contact - benjamin.planche@aldream.net
 * ---------------------
 * Page affichant les coordonnées de l'AEDI (emails des équipes, adresse, ...).
 */
?>

<div id="contact" class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="well">
                <h1>Contact</h1>
                <p style="text-align:justify;">Vous souhaitez obtenir des informations sur les évènements organisés, entamer un partenariat, ou tout simplement nous dire bonjour ? <span class="hero_motcle" style="margin-left:10px;">L'échange est notre priorité !</span><br/>
                    Voici nos coordonnées :</p>
                <h2>Emails</h2>
                <table id="contact-mails">
                    <tr>
                        <td>Bureau de l'Association : </td>
                        <td>
                            <a href="#" e-name="aedi.bureau" class="e-noBot btn btn-mini btn-info" e-domain="listes.insa-lyon.fr">
                                <i class="icon-eye-open icon-white"></i> Afficher Email</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Relations avec les Entreprises : </td>
                        <td>
                            <a href="#" e-name="aedi.entreprise.asso" class="e-noBot btn btn-mini btn-info" e-domain="listes.insa-lyon.fr">
                                <i class="icon-eye-open icon-white"></i> Afficher Email
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Animation : </td>
                        <td>
                            <a href="#" e-name="aedi.anim.asso" class="e-noBot btn btn-mini btn-info" e-domain="listes.insa-lyon.fr">
                                <i class="icon-eye-open icon-white"></i> Afficher Email
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Communications : </td>
                        <td>
                            <a href="#" e-name="aedi.com.asso" class="e-noBot btn btn-info" e-domain="listes.insa-lyon.fr">
                                <i class="icon-eye-open icon-white"></i> Afficher Email
                            </a>
                        </td>
                    </tr>
                </table>
                <h2>Téléphone</h2>
                <p>+33 (0) 4 78 89 69 02</p>

                <h2>Adresse</h2>
                <address>
                    AEDI - INSA de Lyon<br />
                    Département Informatique, Bat. 502<br />
                    20, av. Albert Einstein<br />
                    69621 Villeurbanne Cedex - France
                </address>
            </div>
        </div>
        <div class="col-sm-5">
            <iframe style="border-radius:5px" id="gmap" class="adapt-width" span=5 width="470" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?ie=UTF8&cid=15394763513657611469&q=Association+des+Etudiants+Informatique+de+l%27INSA-Lyon&iwloc=A&gl=FR&hl=fr&amp;output=embed"></iframe>
        </div>
    </div>
</div>
