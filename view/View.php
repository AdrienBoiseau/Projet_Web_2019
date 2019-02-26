<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-13
 * Time: 11:25
 */

class View
{

    public function makeConnexionPage() {
        include("connexion.html");
    }
    public function makeInscriptionPage(){
        include ("inscription.html");
    }
    public function makeAccueilPage(){
        include ("accueil.html");
        if (key_exists("feedback", $_SESSION)) {
            echo $_SESSION['feedback'];
            $_SESSION['feedback']="";
        }
    }

}