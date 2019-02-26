<?php

require_once("view/View.php");
require_once ("model/Connexion.php");

class Controller
{
    protected $view;
    protected $connexion;
    protected $weirdObjectStorage;

    /**
     * Controller constructor.
     * @param $view
     */
    public function __construct(View $view, Connexion $connexion, WeirdObjectStorage $weirdObjectStorage)
    {
        $this->view = $view;
        $this->connexion = $connexion;
        $this->weirdObjectStorage = $weirdObjectStorage;
    }

    public function connexion() {
        $session = "projet_tutore";
        $usr = "root";
        $mdp = "root";

        $bdd = OuvrirConnexion($session, $usr, $mdp);

        $this->view->makeConnexionPage();
        $this->connexion->connexion($bdd);
    }

    public function showList(){
        $this->view->makeListPage($this->weirdObjectStorage->readAll());
    }

}