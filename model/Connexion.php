<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-13
 * Time: 11:41
 */

class Connexion
{

    function __construct () {

    }
    
    function connexion ($bdd) {
        if (key_exists("pass",$_POST) && key_exists("name",$_POST)) {
            //requête sur pour récuperer le mot de passe de l'utilisateur dans la base de données
            $usersSQL = "select * from professeur where name ='".$_POST['name']."'";
            $usersSQL=$bdd->query($usersSQL, PDO::FETCH_ASSOC);
            $count = $usersSQL->rowCount();

            if ($count == 0) {
                echo "aucune ligne renvoyée";
            }
            else {
                foreach ($usersSQL as $users) {

                    if (password_verify($_POST['pass'], $users['password'])) {
                        echo "Vous êtes connectés.";
                        $_SESSION['id'] = $_POST['name'];
                    } else {
                        echo "Nom d'utilisateur ou mot de passe incorrect.";

                    }
                }
            }
            ?>
            <script language="javascript">

            </script>
            <?php
        }
    }

}