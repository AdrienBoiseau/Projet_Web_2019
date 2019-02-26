<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-13
 * Time: 11:24
 */
require_once("view/View.php");
require_once ("model/Connexion.php");
require_once ("model/Inscription.php");
class Controller
{
    protected $view;
    protected $connexion;
    protected $inscription;

    /**
     * Controller constructor.
     * @param $view
     */
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

}