<?php

require_once("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/Inscription.php");
require_once ("model/fonc_bdd.php");

class Controller
{
    protected $view;
    protected $connexion;
    protected $weirdObjectStorage;
    protected $inscription;
    protected $bdd;
    /**
     * Controller constructor.
     * @param $view
     */
    public function __construct(View $view, Connexion $connexion, WeirdObjectStorage $weirdObjectStorage, Inscription $inscription)
    {
        $this->bdd = OuvrirConnexion();
        $this->view = $view;
        $this->connexion = $connexion;
        $this->weirdObjectStorage = $weirdObjectStorage;
        $this->inscription = $inscription;
    }

    public function accueil() {
        $this->view->makeAccueilPage();
    }

    public function connexion() {
        $this->view->makeConnexionPage();
        $this->connexion->connexion($this->bdd);
    }
    public function deconnexion() {
        $this->connexion->deconnexion();
    }

    public function inscription() {
        $this->view->makeInscriptionPage();
        $this->inscription->inscription($this->bdd);
    }

    public function showList(){
        //$this->init();
        $this->view->makeListPage($this->weirdObjectStorage->readAllFromBase($this->bdd));
    }

    public function addWeirdObject(){
        $this->view->makeAddingPage();
        $this->weirdObjectStorage->addWeirdObject($this->bdd);
    }

    public function deleteWeirdObject($id){
        $this->weirdObjectStorage->deleteWeirdObject($this->bdd, $id);
    }

    public function weirdObjectPage($id) {
        $this->view->makeWeirdObjectPage($id);
    }

}