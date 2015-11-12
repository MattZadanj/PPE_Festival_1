<?php 

    $titre = $this -> lire ('titre');
    $entete = $this -> lire ('entete');
    $gauche = $this -> lire ('gauche');
    $centre = $this -> lire ('centre');
    $pied = $this -> lire ('pied');
    $listeCateg = $this -> lire ('listeCateg');

?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./vue/css/styleLargeurFixe.css" />
        <title><?php echo $titre; ?></title>
    </head>
    <body>
	<div id="conteneur">
            <div id="header">
               <?php include("$entete"); ?>
            </div>
            <div id="gauche">
               <?php include("$gauche"); ?>
            </div>
            <div id="centre">
                <?php include("$centre");?>
            </div>
            <div id="pied">
                <?php include("$pied");?>
            </div>
        </div>
    </body>
</html>
