<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 2019-02-13
 * Time: 12:01
 */
set_include_path("./Projet_Web");

require_once ("Router.php");
require_once ("view/View.php");

$router = new Router();
$router->main();
