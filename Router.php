<?php

require_once ("controller/Controller.php");
require_once ("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/fonc_bdd.php");
require_once ("model/WeirdObjectStorageStub.php");
require_once ("model/Inscription.php");

class Router
{

    public function main() {

        $view = new View($this);
        $connexion = new Connexion();
        $weirdObjectStorage = new WeirdObjectStorageStub();
        $inscription = new Inscription();

        $ctrl = new Controller($view, $connexion, $weirdObjectStorage, $inscription);
        
        session_start();

        $ctrl->accueil();
        if (key_exists('list', $_GET)) {
            $ctrl->showList();
        }

        if (key_exists("id",$_SESSION)) {
            echo "Bonjour ".$_SESSION['id'];
        }
        
        if (key_exists('connexion', $_GET)) {
            $ctrl->connexion();
        }
        if (key_exists('inscription', $_GET)) {
            $ctrl->inscription();
        }
        if (key_exists('deconnexion', $_GET)) {
            $ctrl->deconnexion();
        }

    }

}