<?php

require_once("Router.php");

class View
{
	private $router; 

	public function __construct(Router $router){
		$this->router = $router;
	}
    public function makeConnexionPage() {
        include("connexion.html");
    }
    public function makeListPage($weirdObjectList){
    	foreach ($weirdObjectList as $weirdObject) {
    		include("templateList.php");
    	}
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
    public function makeAddingPage(){
        include ("addingTemplate.html");
    }
    public function makeWeirdObjectPage(){
        include ("weirdObjectPage.html");
    }
}