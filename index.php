<?php

set_include_path("./Projet_Web_2019");

require_once ("Router.php");
require_once ("view/View.php");

$router = new Router();
$router->main();
