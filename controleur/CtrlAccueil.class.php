<?php

namespace controleur;

use modele\Connexion;
use modele\dao\CategorieDao;
use vue\Vue;

class CtrlAccueil extends ControleurGenerique {

    function defaut() {

        $pdo = Connexion:: connecter ();

        if ($pdo) {
            $listeCateg = CategorieDao:: getAll ();
        }

        Connexion:: deconnecter ();

        $this -> vue = new Vue ();
        $this -> vue -> setTemplate (__DIR__ . "/../" . "vue/template.inc.php");
        $this -> vue -> ajouter ('titre', "La fleur and co - CTRL");
        $this -> vue -> ajouter ('entete', __DIR__ . "/../" . "vue/vueEntete.inc.php");
        $this -> vue -> ajouter ('gauche', __DIR__ . "/../" . "vue/vueGauche.inc.php");
        $this -> vue -> ajouter ('centre', __DIR__ . "/../" . "vue/vueCentreAccueil.inc.php");
        $this -> vue -> ajouter ('pied', __DIR__ . "/../" . "vue/vuePied.inc.php");
        $this -> vue -> ajouter ('listeCateg', $listeCateg);

        $this -> vue -> afficher ();
    }

}