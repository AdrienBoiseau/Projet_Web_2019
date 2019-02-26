<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-26
 * Time: 11:22
 */

class Inscription
{
    function __construct()
    {

    }

    function inscription($bdd) {
        if (key_exists("pass",$_POST) && key_exists("name",$_POST)) {
            //Encrypt du mot de passe
            $hash = password_hash($_POST['pass'], PASSWORD_BCRYPT);

            //Récupération de l'ID+1
            $usersIDSQL = "select max(id)+1 as id from USERS";
            $usersIDSQL = $bdd->query($usersIDSQL, PDO::FETCH_ASSOC);
            foreach ($usersIDSQL as $id) {
                $id = $id['id'];
            }

            //Insertion dans la base de données
            $name = $_POST['name'];
            $subscribeSQL = "insert into USERS (id,name,password) values (\"$id\",\"$name\",\"$hash\")";
            $bdd->exec($subscribeSQL);

            $_SESSION["feedback"] = "Vous êtes inscrit";

            $url="/Projet_Web_2019";
            header("Location: " . $url, true, 303);
        }

    }

}