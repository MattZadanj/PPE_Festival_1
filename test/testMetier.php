<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>test Metier</title>
    </head>
    <body>
        <?php
            use modele\metier\Categorie;
            use modele\metier\Produit;
        
            require("../includes/fonctions.inc.php");
//            require_once("../modele/metier/Categorie.class.php");
//            require_once("../modele/metier/Produit.class.php");
            
            $uneCateg = new Categorie('bul', 'Bulbes');
            echo "<h4>test 1 : instancier un objet Categorie</h4>";
            echo "<b>Une categorie : </b> $uneCateg <br/>";
            
            $unProduit = new Produit('bo1', '3 bulbes de bégonias',5.50,'bulbes_begonia',$uneCateg);
            echo "<h4>test 2 : instancier un objet Produit</h4>";
            echo "<b> Un produit : </b> $unProduit <br/>";
        ?>
    </body>
</html>
