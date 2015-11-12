<?php

	use controleur\CtrlProduit;

	require_once (__DIR__ . "/../" . "includes/fonctions.inc.php");

	$ctrl = new CtrlProduit ();
	$ctrl -> afficherTous ();