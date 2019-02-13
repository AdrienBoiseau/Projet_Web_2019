<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-13
 * Time: 11:24
 */
require_once("view/View.php");
require_once ("model/Connexion.php");
class Controller
{
    protected $view;
    protected $connexion;

    /**
     * Controller constructor.
     * @param $view
     */
    public function __construct(View $view, Connexion $connexion)
    {
        $this->view = $view;
        $this->connexion = $connexion;
    }

    public function connexion() {
        $session = "projet_tutore";
        $usr = "root";
        $mdp = "root";

        $bdd = OuvrirConnexion($session, $usr, $mdp);

        $this->view->makeConnexionPage();
        $this->connexion->connexion($bdd);
    }

}