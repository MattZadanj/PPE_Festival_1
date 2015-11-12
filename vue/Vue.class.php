<?php

namespace vue;
use vue\VueInterface;

/**
 * Implémentation d'une classe vue pour ce projet
 */
class Vue implements VueInterface {

    private $template;   // chemin d'accès vers le gabarit de cette vue (template)
    private $donnees;   // tableau associatif des valeurs permettant de garnir le gabarit

    function __construct() {
        // initialisation des valeurs par défaut
        $this->template = "../vue/template.inc.php";
        $this->donnees = array();
//        $this->ajouter('titre',"Titre par défaut");
//        $this->ajouter('entete',"../vue/vueEntete.inc.php");
//        $this->ajouter('gauche',"../vue/vueGauche.inc.php");
//        $this->ajouter('centre',"../vue/vueCentreAccueil.inc.php");
//        $this->ajouter('pied',"../vue/vuePied.inc.php");

    }

    /**
     *  Afficher la vue signifie l'inclure au flux de sortie
     */
     function afficher() {
        include($this->template);
    }

    /**
     * ajouter une information à transmettre à la vue : un couple (nom, valeur)
     * @param string $nomDonnee : nom de l'information
     * @param string $valeurDonnee : valeur de l'information
     */
    function ajouter($nomDonnee, $valeurDonnee) {
        $this->donnees[$nomDonnee] = $valeurDonnee;
    }

    /**
     * retourne valeur d'une information liée à la vue
     * @param string $nomDonnee : nom de l'information recherchée
     * @return string : valeur de l'information recherchée ; null sinon
     */
    function lire($nomDonnee) {
        $retour = null;
        if (isset($this->donnees[$nomDonnee])) {
            $retour = $this->donnees[$nomDonnee];
        }
        return $retour;
    }

    function getTemplate() {
        return $this->template;
    }

    function setTemplate($fichierTemplate) {
        $this->template = $fichierTemplate;
    }

    
    
}
