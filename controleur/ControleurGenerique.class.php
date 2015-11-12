<?php

namespace controleur;

abstract class ControleurGenerique {

    protected $vue;

    function setVue ($vue) {
        $this -> vue = $vue;
    }

}