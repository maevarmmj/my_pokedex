<?php
require_once 'controllers/MainController.php';
require_once("controllers/Router/Router.php");


$router = new Router();
$router->routing($_GET, $_POST);


?>

