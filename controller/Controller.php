<?php

require_once("view/View.php");
require_once ("model/Connexion.php");
<<<<<<< HEAD

=======
require_once ("model/Inscription.php");
>>>>>>> 91b3bd87f9e45624c7c1082df45dcd2065d40d61
class Controller
{
    protected $view;
    protected $connexion;
<<<<<<< HEAD
    protected $weirdObjectStorage;
=======
    protected $inscription;
>>>>>>> 91b3bd87f9e45624c7c1082df45dcd2065d40d61

    /**
     * Controller constructor.
     * @param $view
     */
<<<<<<< HEAD
    public function __construct(View $view, Connexion $connexion, WeirdObjectStorage $weirdObjectStorage)
    {
        $this->view = $view;
        $this->connexion = $connexion;
        $this->weirdObjectStorage = $weirdObjectStorage;
=======
    public function __construct(View $view, Connexion $connexion, Inscription $inscription)
    {
        $this->view = $view;
        $this->connexion = $connexion;
        $this->inscription = $inscription;
>>>>>>> 91b3bd87f9e45624c7c1082df45dcd2065d40d61
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