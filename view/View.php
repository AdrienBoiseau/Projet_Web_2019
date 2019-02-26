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
    public function makeListPage($weirdObjects){
    	foreach ($weirdObjects as $weirdObject) {
    		include("templateList.php");
    	}
    }
}