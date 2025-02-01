<?php
require_once("views/View.php");

class PokemonTypeController {
    public function displayAddPokemonType() {
        $view = new View('AddType');
        $view->generer([]);
    }
}
?>
