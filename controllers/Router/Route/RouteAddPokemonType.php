<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonTypeController.php");

class RouteAddPokemonType extends Route {
    private $controller;

    public function __construct($controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayAddPokemonType();
    }

    public function post($params = []) {
    }
}
?>