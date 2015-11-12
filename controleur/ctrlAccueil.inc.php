<?php

    use modele\Connexion;
    use modele\dao\CategorieDao;
    use vue\Vue;

    $pdo = Connexion::connecter();
    if ($pdo) {
        $listeCateg = CategorieDao::getAll();
    }
    Connexion::deconnecter();
    $maVue = new Vue();
    $maVue->setTemplate(__DIR__."/../"."vue/template.inc.php");
    $maVue->ajouter('titre', "La fleur and co - CTRL");
    $maVue->ajouter('entete', "./vue/vueEntete.inc.php");
    $maVue->ajouter('gauche', "./vue/vueGauche.inc.php");
    $maVue->ajouter('centre', "./vue/vueCentreAccueil.inc.php");
    $maVue->ajouter('pied', "./vue/vuePied.inc.php");
    $maVue->ajouter('listeCateg', $listeCateg);

    $maVue->afficher();

?>
