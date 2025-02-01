<?php
require_once("views/View.php");
require_once("models/PokemonManager.php");

class MainController
{
    public function Index($param =[])
    {
        $indexView = new View('Index');
        $manager = new PokemonManager();


        $nomDresseur = "L O V E R S";

        if (empty($param)){
        $indexView->generer([
            'nomDresseur' => $nomDresseur,
            'tableauPKMN' => $manager->getAll(),
        ]);}

        else if ($param['action'] == 'del-pokemon'){
            $manager->deletePokemon($param['idPokemon']);
        }

        else if ($param['action'] == 'add-pokemon'){
            $indexView->generer([
                'nomDresseur' => $nomDresseur,
                'tableauPKMN' => $manager->getAll(),
                'message' => $param['message']
            ]);
        }


    }
    public function displaySearch() {
        $view = new View('Search');
        $view->generer([]);
    }
}
?>
