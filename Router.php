<?php

require_once ("controller/Controller.php");
require_once ("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/fonc_bdd.php");
require_once ("model/WeirdObjectStorageStub.php");

class Router
{

    public function main() {

        $view = new View($this);
        $connexion = new Connexion();
        $weirdObjectStorage = new WeirdObjectStorageStub();

        $ctrl = new Controller($view, $connexion, $weirdObjectStorage);
        if (key_exists('list', $_GET)) {
            //$ctrl->connexion();
            $ctrl->showList();
        }
    }

}