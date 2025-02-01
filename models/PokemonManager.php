<?php
require_once('models/Pokemon.php');
require_once('models/Model.php');


class PokemonManager extends Model
{
    // Méthode pour récupérer tous les Pokémon
    public function getAll(): array
    {
        $sql = 'SELECT * FROM pokemon';
        $resultat = $this->execRequest($sql);

        $pokemons = [];
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            $pokemon = new Pokemon(
                $row['idPokemon'],
                $row['nomEspece'],
                $row['description'],
                $row['typeOne'],
                $row['typeTwo'],
                $row['urlImg']
            ); //tant que y a encore des pkmn à ajouter, on ajoute les pkmn dans le tableau


            $pokemons[] = $pokemon;
        }

        return $pokemons;
    }

    public function getByID(int $idPokemon): ?Pokemon //le '?' veut dire que ca peut être nul
    {
        $sql = 'SELECT * FROM pokemon WHERE idPokemon = ?'; //ca prend le param
        $execute = $this->execRequest($sql, [$idPokemon]); //on prend precisement l'id

        if ($row = $execute->fetch(PDO::FETCH_ASSOC)) {
            return new Pokemon(
                $row['idPokemon'],
                $row['nomEspece'],
                $row['description'],
                $row['typeOne'],
                $row['typeTwo'],
                $row['urlImg']
            );
        } else {
            return null;
        }
    }

    public function createPokemon(Pokemon $poke)
    {
        $donnees = [
            'idPokemon' => $poke->getIdPokemon(),
            'nomEspece' => $poke->getNomEspece(),
            'description'=> $poke->getDescription(),
            'typeOne' => $poke->getTypeOne(),
            'typeTwo' => $poke->getTypeTwo(),
            'urlImg' => $poke->getUrlImg()
        ];

        $sql = 'INSERT INTO pokemon VALUES (:idPokemon, :nomEspece, :description, :typeOne,:typeTwo,:urlImg)';
        $this->execRequest($sql,$donnees);

        $query = $this->execRequest('SELECT LAST_INSERT_ID() from pokemon');

        $a = $query->fetch();
        $id = $a[0];

        $poke->setIdPokemon($id);

        return $poke;
    }

    public function deletePokemon(int $idPokemon){
        $sql = 'DELETE FROM pokemon WHERE idPokemon = ?';
        $this->execRequest($sql, [$idPokemon]);
    }


    public function updatePokemon(Pokemon $poke) {
        $donnees = [
            'nomEspece' => $poke->getNomEspece(),
            'description' => $poke->getDescription(),
            'typeOne' => $poke->getTypeOne(),
            'typeTwo' => $poke->getTypeTwo(),
            'urlImg' => $poke->getUrlImg(),
            'idPokemon' => $poke->getIdPokemon()
        ];

        $sql = 'UPDATE pokemon SET nomEspece = :nomEspece, description = :description, typeOne = :typeOne, typeTwo = :typeTwo, urlImg = :urlImg WHERE idPokemon = :idPokemon';
        $this->execRequest($sql, $donnees);
    }


}

?>
