<?php

require_once('controllers/Router/Router.php');
require_once("controllers/Router/Route.php");

require_once('controllers/MainController.php');


class RouteIndex extends Route {
private MainController $controler;
public function __construct($controler){
    parent::__construct();

    $this->controler = $controler;
}

public function get($params = []){
$this -> controler ->Index($params);
}

public function post($params = []){
    $this -> controler ->Index();
}
}

?>