<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-13
 * Time: 11:41
 */

class Connexion
{

    public function __construct () {

    }
<<<<<<< HEAD
=======

>>>>>>> 3d24a0a11d157785f9ca2f9cb0c6c94fa438276f

    public function connexion ($bdd) {
        if (key_exists("pass",$_POST) && key_exists("name",$_POST)) {
            //requête sur pour récuperer le mot de passe de l'utilisateur dans la base de données
            $usersSQL = "select * from USERS where name ='".$_POST['name']."'";
            $usersSQL=$bdd->query($usersSQL, PDO::FETCH_ASSOC);
            $count = $usersSQL->rowCount();

            if ($count == 0) {
                $_SESSION["feedback"] = "Nom d'utilisateur inexistant";
            }
            else {
                foreach ($usersSQL as $users) {

                    if (password_verify($_POST['pass'], $users['password'])) {
                        if($_POST['name'] == 'toto'){
                            $_SESSION["feedback"]= "Vous êtes connectés en tant qu'admin.";
                            $_SESSION['id'] = $_POST['name'];
                        }
                        else{
                            $_SESSION["feedback"]= "Vous êtes connectés.";
                            $_SESSION['id'] = $_POST['name'];
                        }
                        
                    } else {
                        $_SESSION["feedback"]= "Nom d'utilisateur ou mot de passe incorrect.";

                    }
                }
            }
            $url="/Projet_Web_2019";
            header("Location: " . $url, true, 303);

        }
    }

    public function deconnexion() {
        session_start();
        if (key_exists("id",$_SESSION)) {
            session_destroy();
        }
        $url="/Projet_Web_2019";
        header("Location: " . $url, true, 303);

    }

}