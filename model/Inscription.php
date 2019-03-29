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
            $usersIDSQL = "select max(id_users)+1 as id from users";
            $usersIDSQL = $bdd->query($usersIDSQL, PDO::FETCH_ASSOC);
            foreach ($usersIDSQL as $id) {
                $id = $id['id'];
            }

            //Insertion dans la base de données
            $name = $_POST['name'];
            $subscribeSQL = "insert into users (id_users,name,password) values (\"$id\",\"$name\",\"$hash\")";
            $bdd->exec($subscribeSQL);

            $_SESSION["feedback"] = "Vous êtes inscrit";
            ?>
            <script language="javascript">
                setTimeout("location.href = './'",1);
            </script>
            <?php
        }

    }

}