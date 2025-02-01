<?php
require_once("views/View.php");

class PokemonController
{
    public function displayAddPokemon(?string $var = null)
    {
        $view = new View('AddPokemon');
        $view->generer(['message' => $var]);
    }

    public function displayDeletePokemon(?string $var = null)
    {
        $view = new View('Index');
        $view->generer(['message' => $var]);
    }

    public function addPokemon(array $data)
    {
        try {
            $pokemon = new Pokemon(
                $data['idPokemon'],
                $data['nomEspece'],
                $data['description'],
                $data['typeOne'],
                $data['typeTwo'],
                $data['urlImg']
            );

            $manager = new PokemonManager();
            $manager->createPokemon($pokemon);
        } catch (Exception $e) {
            echo 'Erreur lors de l\'ajout du Pokémon : ' . $e->getMessage();
        }
    }

    public function displayEditPokemon($idPokemon)
    {
        $manager = new PokemonManager();
        $pokemon = $manager->getByID($idPokemon);

        if ($pokemon) {
            $view = new View('EditPokemon');
            $view->generer(['pokemon' => $pokemon]);
        } else {
            header("Location: index.php?message=" . urlencode('Le Pokémon n\'existe pas'));
            exit();
        }
    }

    public function editPokemon(array $data)
    {
        try {
            $pokemon = new Pokemon(
                $data['idPokemon'],
                $data['nomEspece'],
                $data['description'],
                $data['typeOne'],
                $data['typeTwo'],
                $data['urlImg']
            );

            $manager = new PokemonManager();
            $manager->updatePokemon($pokemon);

            header("Location: index.php?message=" . urlencode('Le Pokémon a été mis à jour avec succès'));
            exit();
        } catch (Exception $e) {
            echo 'Erreur lors de la modification du Pokémon : ' . $e->getMessage();
        }
    }
}
?>
