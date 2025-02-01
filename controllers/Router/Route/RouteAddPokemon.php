<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonController.php");

class RouteAddPokemon extends Route {
    private $controller;

    public function __construct($controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        return $this->controller->displayAddPokemon();
    }

    public function post($params = [])
    {
        if (!empty($params)){
        try {
            $donnees = [
                "idPokemon" => parent::getParam($_POST, "idPokemon",false),
                "nomEspece" => parent::getParam($_POST, "nomEspece", false),
                "description" => parent::getParam($_POST, "description"),
                "typeOne" => parent::getParam($_POST, "typeOne", false),
                "typeTwo" => parent::getParam($_POST, "typeTwo"),
                "urlImg" => parent::getParam($_POST, "urlImg",false)
            ];
            $this->controller->addPokemon($donnees);
            echo "<h3 align='center' >Le pokémon a été ajouté !</h3>";

        } catch (Exception $e) {
            echo "<h3 align='center' style = 'color : red'>Vous n'avez pas tout rempli !</h3>";
        }}
    }
}
?>

