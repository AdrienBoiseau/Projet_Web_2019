<?php

require_once ("controller/Controller.php");
require_once ("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/fonc_bdd.php");
require_once ("model/WeirdObjectStorageCrud.php");
require_once ("model/Inscription.php");

class Router
{

    public function main() {

        $view = new View($this);
        $connexion = new Connexion();
        $weirdObjectStorage = new WeirdObjectStorageCrud();
        $inscription = new Inscription();

        $ctrl = new Controller($view, $connexion, $weirdObjectStorage, $inscription);

        $ctrl->accueil();

        if (key_exists('list', $_GET)) {
            $ctrl->showList();
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
        if(key_exists('addWeirdObject', $_GET)){
            $ctrl->addWeirdObject();
        }
        if(key_exists('id', $_GET)){
            $ctrl->weirdObjectPage($_GET['id']);
            $ctrl->deleteWeirdObject($_GET['id']);
        }
        if(key_exists('modify', $_GET)){
            $ctrl->modifyWeirdObject($_GET['modify']);
        }
    }
}