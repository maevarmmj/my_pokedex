<?php

require_once 'controllers/PokemonController.php';
require_once 'controllers/MainController.php';
require_once 'controllers/PokemonTypeController.php';

require_once 'controllers/Router/Route/RouteIndex.php';
require_once 'controllers/Router/Route/RouteAddPokemon.php';
require_once 'controllers/Router/Route/RouteAddPokemonType.php';
require_once 'controllers/Router/Route/RouteSearch.php';
require_once 'controllers/Router/Route/RouteDelete.php';
require_once 'controllers/Router/Route/RouteEditPokemon.php';




class Router
{
    public array $routeList;
    public array $ctrlList;
    private string $action_key;

    public function __construct($name_of_action_key = "action")
    {
        $this->action_key = $name_of_action_key;
        $this->routeList = [];
        $this->ctrlList = [];

        $this->createControllerList();
        $this->createRouteList();
    }

    public function createControllerList()
    {
        $this->ctrlList = [
            'main' => new MainController(),
            'pokemon' => new PokemonController(),
            'type' => new PokemonTypeController(),
            'search' => new MainController(),
        ];
    }

    public function createRouteList()
    {
        $this->routeList = [
            "index" => new RouteIndex($this->ctrlList["main"]),
            "add-pokemon" => new RouteAddPokemon($this->ctrlList["pokemon"]),
            "add-pokemon-type" => new RouteAddPokemonType($this->ctrlList["type"]),
            "search" => new RouteSearch($this->ctrlList["search"]),
            "del-pokemon" => new RouteIndex($this->ctrlList["main"]),
            "edit-pokemon" => new RouteEditPokemon($this->ctrlList["pokemon"]),
        ];
    }

    public function routing($get, $post)
    {
        if (isset($get[$this->action_key])) {
            $route = $this->routeList[$get[$this->action_key]];
            $route->action($get, 'GET');
            $route->action($post, 'POST');
        } else {
            $this->routeList['index']->action();
        }
    }

    private function getParam(array $array, string $paramName, bool $canBeEmpty = true)
    {
        if (isset($array[$paramName])) {
            if (!$canBeEmpty && empty($array[$paramName])) {
                throw new Exception("Paramètre '$paramName' vide");
            }
            return $array[$paramName];
        } else {
            throw new Exception("Paramètre '$paramName' absent");
        }
    }
}
