<?php

	use controleur\CtrlAccueil;
	
	require_once (__DIR__ . "/../" . "includes/fonctions.inc.php");
	// require_once ("../controleur/CtrlAccueil.class.php");

	$ctrl = new CtrlAccueil ();
	$ctrl -> defaut ();