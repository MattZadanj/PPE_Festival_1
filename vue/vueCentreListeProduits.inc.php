<?php

    echo "<h3>Liste des produits</h3>\n";
    echo "<table>\n";
    echo "<tr><th >designation</th><th>prix</th><th>image</th></tr>\n";
    $listeProduits = $this->lire('listeProd');
    
    for ($i=0; $i < count($listeProduits) ; $i++) {
        
        $produit= $listeProduits[$i];
        echo "<tr>\n";
        echo "<td>".$produit->getDesignation()."</td>\n";
        echo "<td>".$produit->getPrix()."</td>\n";
        echo "<td><img src=\"./vue/images/". $produit->getImage().".jpg\"> </img></td>\n";
        echo "</tr>\n";
        
    }
    
    echo "</table>\n";

?>