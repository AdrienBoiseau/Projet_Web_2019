<?php

require_once("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/Inscription.php");

class Controller
{
    protected $view;
    protected $connexion;
    protected $weirdObjectStorage;
    protected $inscription;

    /**
     * Controller constructor.
     * @param $view
     */
    public function __construct(View $view, Connexion $connexion, WeirdObjectStorage $weirdObjectStorage)
    {
        $this->view = $view;
        $this->connexion = $connexion;
        $this->weirdObjectStorage = $weirdObjectStorage;

    public function __construct(View $view, Connexion $connexion, Inscription $inscription)
    {
        $this->view = $view;
        $this->connexion = $connexion;
        $this->inscription = $inscription;
    }

    public function accueil() {
        $this->view->makeAccueilPage();
    }
    public function connexion() {
        $session = "projet_web_2019";
        $usr = "root";
        $mdp = "root";

        $bdd = OuvrirConnexion($session, $usr, $mdp);

        $this->view->makeConnexionPage();
        $this->connexion->connexion($bdd);
    }
    public function deconnexion() {
        $this->connexion->deconnexion();
    }

    public function inscription() {
        $session = "projet_web_2019";
        $usr = "root";
        $mdp = "root";

        $bdd = OuvrirConnexion($session, $usr, $mdp);
        $this->view->makeInscriptionPage();
        $this->inscription->inscription($bdd);

    }

    public function showList(){
        $this->view->makeListPage($this->weirdObjectStorage->readAll());
    }

}