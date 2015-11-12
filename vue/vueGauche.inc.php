<ul class="menugauche">
    <p><b>Menu</b></p>
    <li><a href="./index.php" >Accueil</a></li>
    <hr/>
    <b>Nos produits</b>
    <li><a href="./index.php?controleur=produit&action=afficherTous" >Tous</a></li>
<?php
    foreach ($listeCateg as $categ) {
        echo "<li><a href=\"./index.php?controleur=produit&action=afficherUneCateg&id=".$categ->getCode()."\" >".$categ->getLibelle()."</a></li>";
    }
?>
</ul>

