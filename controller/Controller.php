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
        if(key_exists("id", $_SESSION)) {
            $this->view->makeListPage($this->weirdObjectStorage->readAllFromBase($this->bdd));
        } else {
            $_SESSION['feedback']="Vous devez être connecté pour accéder à cette page.";
            $url="/Projet_Web_2019";
            header("Location: " . $url, true, 303);
        }
    }

    public function addWeirdObject(){
        if(key_exists("id", $_SESSION)) {
            $this->view->makeAddingPage();
            $this->weirdObjectStorage->addWeirdObject($this->bdd);
        } else {
            $_SESSION['feedback']="Vous devez être connecté pour accéder à cette page.";
            $url="/Projet_Web_2019";
            header("Location: " . $url, true, 303);
        }
    }

    public function deleteWeirdObject($id){
        if(key_exists("id", $_SESSION)) {
            $this->weirdObjectStorage->deleteWeirdObject($this->bdd, $id);
        } else {
            $_SESSION['feedback']="Vous devez être connecté pour accéder à cette page.";
            $url="/Projet_Web_2019";
            header("Location: " . $url, true, 303);
        }
    }

    public function modifyWeirdObject($id){
        if(key_exists("id", $_SESSION)) {
            $this->view->makeModifyPage($this->weirdObjectStorage->read($id, $this->bdd));
            $this->weirdObjectStorage->modifyWeirdObject($this->bdd, $this->weirdObjectStorage->read($id, $this->bdd));
        } else {
            $_SESSION['feedback']="Vous devez être connecté pour accéder à cette page.";
            $url="/Projet_Web_2019";
            header("Location: " . $url, true, 303);
        }
    }

    public function weirdObjectPage($id) {
        if(key_exists("id", $_SESSION)) {
            $this->view->makeWeirdObjectPage($this->weirdObjectStorage->read($id, $this->bdd));
        } else {
            $_SESSION['feedback']="Vous devez être connecté pour accéder à cette page.";
            $url="/Projet_Web_2019";
            header("Location: " . $url, true, 303);
        }
    }

}