<?php

require_once ("controller/Controller.php");
require_once ("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/fonc_bdd.php");
<<<<<<< HEAD
require_once ("model/WeirdObjectStorageStub.php");
=======
require_once ("model/Inscription.php");
>>>>>>> 91b3bd87f9e45624c7c1082df45dcd2065d40d61

class Router
{

    public function main() {

<<<<<<< HEAD
        $view = new View($this);
        $connexion = new Connexion();
        $weirdObjectStorage = new WeirdObjectStorageStub();

        $ctrl = new Controller($view, $connexion, $weirdObjectStorage);
        if (key_exists('list', $_GET)) {
            //$ctrl->connexion();
            $ctrl->showList();
=======
        session_start();

        if (key_exists("id",$_SESSION)) {
            echo "Bonjour ".$_SESSION['id'];
        }


        $view = new View($this);
        $connexion = new Connexion();
        $inscription = new Inscription();

        $ctrl = new Controller($view, $connexion, $inscription);

        $ctrl->accueil();
        if (key_exists('connexion', $_GET)) {
            $ctrl->connexion();
>>>>>>> 91b3bd87f9e45624c7c1082df45dcd2065d40d61
        }
        if (key_exists('inscription', $_GET)) {
            $ctrl->inscription();
        }
        if (key_exists('deconnexion', $_GET)) {
            $ctrl->deconnexion();
        }

    }

}