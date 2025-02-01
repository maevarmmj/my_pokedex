<?php
require_once("controllers/Router/Route.php");
require_once("controllers/MainController.php");

class RouteDelete extends Route {
    private $controller;

    public function __construct($controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = [])
    {
    }


    public function post($params = [])
    {
        if (!empty($params)){
            try {
                $donnees = [
                    "idPokemon" => parent::getParam($_POST, "idPokemon"),
                    "nomEspece" => parent::getParam($_POST, "nomEspece", false),
                    "description" => parent::getParam($_POST, "description"),
                    "typeOne" => parent::getParam($_POST, "typeOne", false),
                    "typeTwo" => parent::getParam($_POST, "typeTwo"),
                    "urlImg" => parent::getParam($_POST, "urlImg")
                ];
                $this->controller->deletePokemon($donnees);
            } catch (Exception $e) {
                echo "<h3 align='center'>Une erreur a été détectée dans la suppression</h3>";
            }}
    }
}
?>