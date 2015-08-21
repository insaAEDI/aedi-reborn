<?php
require_once dirname(__FILE__) . '/../../commun/php/base.inc.php';
inclure_fichier('controleur', 'creneau.class', 'php');

//Si l'utilisateur n'est pas une etudiant, on arrete tout
if (!Utilisateur_connecter('etudiant')) {
      die;
}
	
	if( empty($_POST) ) {
        die;
    }
	
	// On verifie la presence de l'id du creneau choisis
	if( !empty($_POST['id_creneau']) ){
		$_id_creneau = $_POST['id_creneau'];
	}
	
	//TODO: On recupere l'id de l'etudiant
	if( $authentification->isAuthentifie() ){
		// On r�cup�re l'objet utilisateur associ�
		$utilisateur = $authentification->getUtilisateur();
		$id_utilisateur = $utilisateur->getId();
		if ($utilisateur == null) {
			$authentification->forcerDeconnexion();
		}
	}else{
		die;
	}
	
	$retour = Creneau::ReserverCreneau($_id_creneau, $id_utilisateur);
	
	
	//Test du retour
	if( $retour != $_id_creneau ){
		echo 'erreur de traitement en base de donnee';
	}else{
		echo 'Ok';
	}

?>