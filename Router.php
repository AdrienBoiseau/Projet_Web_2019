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
class Router
{

    public function main() {


        $view = new View($this);
        $connexion = new Connexion();

        $ctrl = new Controller($view, $connexion);
        if (key_exists('list', $_GET)) {
            $ctrl->connexion();
        }
    }

}