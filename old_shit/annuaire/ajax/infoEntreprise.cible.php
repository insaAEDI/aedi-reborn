<?php
/**
 * -----------------------------------------------------------
 * INFOENTREPRISE - CIBLE PHP
 * -----------------------------------------------------------
 * Auteur : Benjamin (Bill) Planche - Aldream (4IF 2011/12)
 *          Contact - benjamin.planche@aldream.net
 * ---------------------
 * Cible pour la récupération d'informations sur une entreprise.
 * Est donc appelée par le moteur JS (Ajax) de la page Annuaire quand une entreprise est sélectionnée dans la liste des noms.
 * Le principe (repris de Bnj Bouv) est très simple :
 * 1) On récupère l'ensemble des variables qui ont été insérées.
 * 2) On appelle le contrôleur 
 * 3) On renvoit les résultats en JSON
 * Le résultat sera de la forme :
 		{
			code : "ok", // ou "error" - si error, le champ entreprise n'est pas présent
			entreprise : {
				description: {
					nom: "Atos",
					description: "Société française recrutant des tonnes de 4IF.",
					secteur: "SSII",
					commentaire: "",
				},
				contacts: [
					{nom: "Chuck", prenom: "Noris", metier: "Dieu", email:"chuck@atos.com", tel:"06666666666", priorite:1, commentaire:""},
					{nom: "Chucky", prenom: "Norissette", metier: "Déesse", email:"chuckky@atos.com", tel:"06666666667", priorite:0, commentaire:"A vérifier"}
				],
				relation: {
					parrainage : [
						{annee: 2012, commentaire:"Ok", couleur:1},
						{annee: 2011, commentaire:"Bof", couleur:0}
					],
					rif : [
						{annee: 2012, commentaire:"Ok", couleur:1},
						{annee: 2011, commentaire:"Retard Paiement", couleur:0}
					],
					stages: [
						{annee: 2012, nbSujets:12},
						{annee: 2011, nbSujets:5}
					],
					entretiens: [
						{annee: 2012, nbSessions:3},
						{annee: 2011, nbSessions:1}
					]
				},
				commentaires: [
					{nom: "Le Roux", prenom: "Bill", poste: "SG", date:1332615354000 , categorie:0, commentaire:"A contacter pour un parteneriat"},
					{nom: "B", prenom: "Dan", poste: "Eq En", date:1332215354000, categorie:3, commentaire:"A contacter pour un calin"}
				]
			}
		}
 */
 
header( 'Content-Type: application/json' );
 
 // Vérification de l'authentification :
require_once dirname(__FILE__) . '/../../commun/php/base.inc.php';
inclure_fichier('modele', 'entreprise.class', 'php');
inclure_fichier('modele', 'contact.class', 'php');
inclure_fichier('modele', 'commentaire_entreprise.class', 'php');

$logger = Logger::getLogger("Annuaire.infoEntreprise");

$utilisateur = controlerAuthentificationJSON( $logger, array( Personne::ADMIN, Personne::AEDI ) );
$logger->debug( "\"".$utilisateur->getLogin()."\" a lancé une requête." );

/*
 * Récupérer et transformer le JSON
 */
/* int */ $id_entreprise = NULL;

if (verifierPresent('id')) {
	$id_entreprise = (int) $_POST['id'];
	
	/*
	 * Appeler la couche du dessous
	 */
	/* objet */ $entreprise = Entreprise::GetEntrepriseByID($id_entreprise);
	if (gettype($entreprise) == "int" && $entreprise == Entreprise::getErreurExecRequete()) {
		$logger->error( 'Une erreur est survenue.' );
                $json = genererReponseStdJSON( 'errorBDD', 'Une erreur est survenue lors de l\'interrogation de la BDD.' );
	}
	else {
		/* objet */ $contacts = NULL;
		/* objet */ $commentaires = NULL;
		if ($entreprise != NULL) {
			$contacts = Contact::GetListeContactsParEntreprise($id_entreprise);
			$commentaires = CommentaireEntreprise::GetListeCommentairesParEntreprise($id_entreprise);

			$json['code'] = 'ok';
			$json['entreprise']['description'] = $entreprise->toArrayObject();
			if (gettype($contacts) == 'array') {
				$json['entreprise']['contacts'] = Array();
				foreach( $contacts as $contact ) {
					array_push($json['entreprise']['contacts'], $contact->toArrayObject(false, true, true, true, false, false, false));
				}
			}
			if (gettype($commentaires) == 'array') {
				$json['entreprise']['commentaires'] = Array();
				foreach( $commentaires as $commentaire ) {
					array_push($json['entreprise']['commentaires'], $commentaire->toArrayObject(false, false, false, true, false, true));
				}
			}
		}
		else {
			$json = genererReponseStdJSON( 'noEntr', 'L\'entreprise n\'a pas été trouvée.' );
		}
	}
}
else {
	$json = genererReponseStdJSON( 'erreurChamp', 'Veuillez vérifier que tous les champs sont renseignés.' );

}

/*
 * Renvoyer le JSON
 */
echo json_encode(array_map('Protection_XSS', $json));


?>
