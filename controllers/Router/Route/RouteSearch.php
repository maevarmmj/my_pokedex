<?php
require_once("controllers/Router/Route.php");
require_once("controllers/MainController.php");

class RouteSearch extends Route {
    private $controller;

    public function __construct($controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displaySearch();
    }

    public function post($params = []) {
    }
}
?>