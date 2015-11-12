<?php 

    $titre = $this -> lire ('titre');
    $entete = $this -> lire ('entete');
    $gauche = $this -> lire ('gauche');
    $centre = $this -> lire ('centre');
    $pied = $this -> lire ('pied');

?>

<html>
    <head>
        <link rel="stylesheet" href="../vue/css/styleLargeurFixe.css" />
        <meta charset="UTF-8">
        <title><?php echo $titre; ?></title>
    </head>
    <body>
	<div id="conteneur">
            <div id="header">
               <?php echo $entete; ?>
            </div>
            <div id="gauche">
               <?php echo $gauche; ?>
            </div>
            <div id="centre">
                <?php echo $centre; ?>
            </div>
            <div id="pied">
                <?php echo $pied; ?>
            </div>
        </div>     
    </body>
</html>
