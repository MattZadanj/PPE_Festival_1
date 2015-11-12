<?php

    use modele\Connexion;
    use modele\dao\CategorieDao;
    use modele\dao\ProduitDao;
    use vue\Vue;

    $ok = FALSE;
    $pdo = Connexion::connecter ();
    
    if ($pdo) {
        
        $listeCateg = CategorieDao::getAll ();
        
        if (isset ($_GET["id"])) {
            
            $listeProduits = ProduitDao::getAllByCateg ($_GET["id"]);
            $ok = TRUE;
        
        }
        
    }
    
    Connexion::deconnecter ();

    $maVue = new Vue ();
    $maVue -> setTemplate (__DIR__."/../"."vue/template.inc.php");
    $maVue -> ajouter ('titre', "La fleur and co - CTRL");
    $maVue -> ajouter ('entete', "./vue/vueEntete.inc.php");
    $maVue -> ajouter ('gauche', "./vue/vueGauche.inc.php");

    if ($ok) {
        $centre = "./vue/vueCentreListeProduits.inc.php";
    } else {
        $centre = "./vue/vueCentreAccueil.inc.php";
    }

    $maVue -> ajouter ('centre', $centre);
    $maVue -> ajouter ('pied', "./vue/vuePied.inc.php");
    $maVue -> ajouter ('listeCateg', $listeCateg);
    $maVue -> ajouter ('listeProd', $listeProduits);
    $maVue -> afficher ();
 
?>