<?php
/*
 * @author Loïc Gevrey
 *
 *
 */

require_once dirname(__FILE__) . '/../commun/php/base.inc.php';
inclure_fichier('commun', 'bd.inc', 'php');

class CV_Langue {

//****************  Attributs  ******************//
    private $ID_CVLANGUE;
    private $ID_LANGUE;
    private $ID_NIVEAU;
    private $ID_CERTIF;
    private $SCORE_CERTIF;
    private $ID_CV;
    private $LIBELLE_LANGUE;
    private $LIBELLE_NIVEAU;
    private $LIBELLE_CERTIF;
    private $MAX_SCORE_CERTIF;

//****************  Fonctions statiques  ******************//
//recuperation de l'objet CV par l'ID du CV
    public static function GetLangueByIdCV($_id_cv) {
        if (is_numeric($_id_cv)) {
            return BD::Prepare('SELECT * FROM CV_LANGUE, LANGUE, CERTIF_LNG, NIVEAU_LANGUE 
                WHERE ID_CV = :id_cv 
                AND LANGUE.ID_LANGUE = CV_LANGUE.ID_LANGUE 
                AND CERTIF_LNG.ID_CERTIF = CV_LANGUE.ID_CERTIF
                AND NIVEAU_LANGUE.ID_NIVEAU = CV_LANGUE.ID_NIVEAU'
                            , array('id_cv' => $_id_cv), BD::RECUPERER_TOUT, PDO::FETCH_CLASS, __CLASS__);
        }
        return NULL;
    }

//Recupération de la liste des langues possible
    public static function GetListeLangue() {
        return BD::Prepare('SELECT * FROM LANGUE ORDER BY LIBELLE_LANGUE ASC', array(), BD::RECUPERER_TOUT);
    }

//Recupération de la liste des niveaux possible
    public static function GetListeNiveau() {
        return BD::Prepare('SELECT * FROM NIVEAU_LANGUE ORDER BY LIBELLE_NIVEAU ASC', array(), BD::RECUPERER_TOUT);
    }

//Recupération de la liste des certification possible
    public static function GetListeCertif() {
        return BD::Prepare('SELECT * FROM CERTIF_LNG ORDER BY ID_CERTIF ASC', array(), BD::RECUPERER_TOUT);
    }

    public static function GetScoreMaxCertif($_id_certif) {
        if (is_numeric($_id_certif)) {
            $score_max = BD::Prepare('SELECT MAX_SCORE_CERTIF FROM CERTIF_LNG WHERE ID_CERTIF = :id_certif', array('id_certif' => $_id_certif), BD::RECUPERER_UNE_LIGNE);
            return $score_max['MAX_SCORE_CERTIF'];
        } else {
            return "Erreur 12 veuillez contacter l'administrateur du site";
        }
    }

    public static function AjouterLangue($_id_langue, $_id_niveau, $_id_certif, $_score, $_id_cv) {

        if ($_id_cv > 0 && is_numeric($_id_cv)) {
            $info_langue = array(
                'id_cv' => $_id_cv,
                'id_langue' => $_id_langue,
                'id_niveau' => $_id_niveau,
                'id_certif' => $_id_certif,
                'score' => $_score,
            );

            BD::Prepare('INSERT INTO CV_LANGUE SET 
                    ID_LANGUE = :id_langue,
                    ID_NIVEAU = :id_niveau,
                    ID_CERTIF = :id_certif,
                    SCORE_CERTIF = :score, 
                    ID_CV = :id_cv', $info_langue);
            return true;
        } else {
            return "Erreur 4 veuillez contacter l'administrateur du site";
        }
    }

    public static function SupprimerLangueByIdCV($_id_cv) {
        if ($_id_cv > 0 && is_numeric($_id_cv)) {
            BD::Prepare('DELETE FROM CV_LANGUE WHERE ID_CV = :id_cv', array('id_cv' => $_id_cv));
            return true;
        } else {
            return "Erreur 5 veuillez contacter l'administrateur du site";
        }
    }

//****************  Fonctions  ******************//
//****************  Getters & Setters  ******************//
    public function getId() {
        return $this->ID_CVLANGUE;
    }

    public function getIdCV() {
        return $this->ID_CV;
    }

    public function getIdLAngue() {
        return $this->ID_LANGUE;
    }

    public function getNomLangue() {
        return $this->LIBELLE_LANGUE;
    }

    public function getIdNiveau() {
        return $this->ID_NIVEAU;
    }

    public function getNomNiveau() {
        return $this->LIBELLE_NIVEAU;
    }

    public function getIdCertif() {
        return $this->ID_CERTIF;
    }

    public function getNomCertif() {
        return $this->LIBELLE_CERTIF;
    }
    
     public function getMaxScoreCertif() {
        return $this->MAX_SCORE_CERTIF;
    }

    public function getScoreCertif() {
        return $this->SCORE_CERTIF;
    }

}

?>
