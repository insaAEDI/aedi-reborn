<?php
/* * ************************************
 * Author : Sébastien Mériot
 * Date : 28.03.2012
 * Description : Ajout de code html en fonction de l'authentification de l'utilisateur
 * pour le logger ou le délogger justement.
 * ************************************** */

global $authentification;
global $utilisateur;


if ($authentification->isAuthentifie() == false) {
    /*     * ************************** Non authentifie ! ******************** */
    ?>

    <div id="login_dialog" class="modal fade">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Authentification</h3>
                </div>
                <div class="modal-body">
                    <form id="login_form" role="form">
                        <div id="login_error" class="alert alert-error hide" style="padding-right: 10px;" > </div>
                        <div class="form-group">
                            <label class="control-label" for="username">Utilisateur</label><br>
                            <input class="input-medium" style="margin: 0px;" id="username" type="text" />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Mot de passe</label><br>
                            <input class="input-medium" style="margin: 0px;" id="password" type="password" />
                        </div>
                        <button id="regular_login" class="btn btn-primary">S'authentifier</button>
                    </form>
                    <hr>
                    <form id="cas_login_form" method="post" role="form">
                        <button id="cas_login" href="#" class="btn btn-primary" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Authentification par le CAS INSA</button>
                        <input type="hidden" name="action" value="login_cas" />
                    </form>
                </div>
                <div class="modal-footer" style="text-align: center;">
                    <a href="#" data-dismiss="modal" class="btn btn-danger">Annuler</a>
                </div>
            </div>
        </div>
    </div>

    <?php
} else {

    /*     * **************************** Authentifié ! ************************** */
    ?>

    <div id="user_info_dialog" class="modal hide fade">
        <div class="modal-header">
            <a class="close" data-dismiss="modal" >&times;</a>
            <h3>Vos informations</h3>
        </div>
        <div class="modal-body" style="text-align: center;">

            <form id="user_info_form">
                <div id="user_info_error" class="alert alert-error hide" style="padding-right: 10px; text-align: justify;" > </div>

                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="username">Utilisateur</label>
                        <div class="controls">
                            <input class="input-medium disabled" style="margin: 0px;" id="username" type="text" disabled="disabled" value="<?= $utilisateur->getLogin(); ?>"/>
                        </div>
                    </div>
                    <?php
                    if ($authentification->getAuthentificationMethode() == Authentification::AUTH_NORMAL) {
                        ?>
                        <div class="control-group">
                            <label class="control-label" for="password">Mot de passe</label>
                            <div class="controls">
                                <input class="input-medium" style="margin: 0px;" id="password" type="password" />
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="control-group">
                        <label class="control-label" for="password">Nom</label>
                        <div class="controls">
                            <input class="input-medium" style="margin: 0px;" id="nom" type="text" value="<?= $utilisateur->getPersonne()->getNom(); ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Prénom</label>
                        <div class="controls">
                            <input class="input-medium" style="margin: 0px;" id="prenom" type="text" value="<?= $utilisateur->getPersonne()->getPrenom(); ?>" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Adresse mail</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <?php
                                $mails = $utilisateur->getPersonne()->getMails();
                                ?>
                                <span class="add-on" style="margin-top: -9px;"><i class="icon-info-sign"></i></span><input class="input-medium libelle_mail" type="text" value="<?= @$mails[0][0]; ?>" />
                                <span class="add-on" style="margin-top: -9px;">@</span><input class="input-medium mail" type="text" value="<?= @$mails[0][1]; ?>" />
                            </div>
                            <div class="input-prepend">
                                <span class="add-on" style="margin-top: -9px;"><i class="icon-info-sign"></i></span><input class="input-medium libelle_mail" type="text" value="<?= @$mails[1][0]; ?>" />
                                <span class="add-on" style="margin-top: -9px;">@</span><input class="input-medium mail" type="text" value="<?= @$mails[1][1]; ?>" />
                            </div>
                            <div class="input-prepend">
                                <span class="add-on" style="margin-top: -9px;"><i class="icon-info-sign"></i></span><input class="input-medium libelle_mail" type="text" value="<?= @$mails[2][0]; ?>" />
                                <span class="add-on" style="margin-top: -9px;">@</span><input class="input-medium mail" type="text" value="<?= @$mails[2][1]; ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="telephone">Téléphone</label>
                        <div class="controls">
                            <div class="input-prepend">
                                <div class="input-prepend">
                                    <?php
                                    $telephones = $utilisateur->getPersonne()->getTelephones();
                                    ?>
                                    <span class="add-on" style="margin-top: -9px;"><i class="icon-info-sign"></i></span><input class="input-medium libelle_telephone" type="text" value="<?= @$telephones[0][0]; ?>" />
                                    <span class="add-on" style="margin-top: -9px;"><i class="icon-volume-up"></i></span><input class="input-medium telephone" type="text" value="<?= @$telephones[0][1]; ?>" />
                                </div>
                                <div class="input-prepend">
                                    <span class="add-on" style="margin-top: -9px;"><i class="icon-info-sign"></i></span><input class="input-medium libelle_telephone" type="text" value="<?= @$telephones[1][0]; ?>" />
                                    <span class="add-on" style="margin-top: -9px;"><i class="icon-volume-up"></i></span><input class="input-medium telephone" type="text" value="<?= @$telephones[1][1]; ?>" />
                                </div>
                                <div class="input-prepend">
                                    <span class="add-on" style="margin-top: -9px;"><i class="icon-info-sign"></i></span><input class="input-medium libelle_telephone" type="text" value="<?= @$telephones[2][1]; ?>" />
                                    <span class="add-on" style="margin-top: -9px;"><i class="icon-volume-up"></i></span><input class="input-medium telephone" type="text" value="<?= @$telephones[2][2]; ?>" />
                                </div>
                            </div>
                        </div>

                        <p>Groupe</p>
                        <input class="input-medium disabled" disabled="disabled" value="<?php echo Personne::$ROLES[$utilisateur->getPersonne()->getRole()]; ?> " />
                    </div></fieldset>

            </form>
        </div>
        <div class="modal-footer">
            <a id="user_info_save" href="#" class="btn btn-primary">Enregistrer les modifications</a>
        </div>
    </div>

    <?php
}




/**
 * Si l'utilisateur se connecte pour la première fois avec le CAS, on le force à rentrer ses informations perso
 */
if ($utilisateur != null && $utilisateur->getPersonne()->premiereConnexion() == true) {
    ?>
    <script type="text/javascript">
        $(document).ready(function () {

            $("#user_info_error").html("C'est la première fois que vous vous connectez? Prenez le temps de saisir ces quelques informations pour votre confort ! Vous pourrez les modifier à tout moment, en cliquant sur votre nom d'utilisateur, en haut, à gauche.")
                    .removeClass("hide")
                    .removeClass("alert-error");

            $("#user_info_dialog").modal({
                backdrop: true,
                keyboard: false,
                show: true
            });
        });
    </script>
    <?php
}
?>
