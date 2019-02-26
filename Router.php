<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-13
 * Time: 11:24
 */
require_once ("controller/Controller.php");
require_once ("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/fonc_bdd.php");
require_once ("model/Inscription.php");

class Router
{

    public function main() {

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
        }
        if (key_exists('inscription', $_GET)) {
            $ctrl->inscription();
        }
        if (key_exists('deconnexion', $_GET)) {
            $ctrl->deconnexion();
        }

    }

}