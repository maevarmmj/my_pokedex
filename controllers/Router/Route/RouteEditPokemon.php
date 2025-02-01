<?php
require_once("controllers/Router/Route.php");
require_once("controllers/PokemonController.php");

class RouteEditPokemon extends Route {
    private $controller;

    public function __construct($controller) {
        parent::__construct();
        $this->controller = $controller;
    }

    public function get($params = []) {
        if (isset($params['idPokemon'])) {
            return $this->controller->displayEditPokemon($params['idPokemon']);
        } else {
            echo 'Erreur : idPokemon manquant';
        }
    }

    public function post($params = []) {
        if (!empty($params)) {
            try {
                $donnees = [
                    "idPokemon" => parent::getParam($_POST, "idPokemon",false),
                    "nomEspece" => parent::getParam($_POST, "nomEspece", false),
                    "description" => parent::getParam($_POST, "description"),
                    "typeOne" => parent::getParam($_POST, "typeOne", false),
                    "typeTwo" => parent::getParam($_POST, "typeTwo"),
                    "urlImg" => parent::getParam($_POST, "urlImg",false)
                ];
                $this->controller->editPokemon($donnees);
                echo "<h3 align='center'>Les données ont été modifiées !</h3>";
            } catch (Exception $e) {
                echo "<h3 align='center'>Vous n'avez pas tout rempli !</h3>";
            }
        }
    }
}
?>
