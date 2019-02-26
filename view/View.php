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
<<<<<<< HEAD
    public function makeListPage($weirdObjects){
    	foreach ($weirdObjects as $weirdObject) {
    		include("templateList.php");
    	}
    }
=======
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

>>>>>>> 91b3bd87f9e45624c7c1082df45dcd2065d40d61
}