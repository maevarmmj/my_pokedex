<?php require_once('models/Pokemon.php');
$poke = new Pokemon(0,'null','null','null','null','null');
$ReflectionClass = new ReflectionClass($poke);
$reflection = $ReflectionClass->getProperties(ReflectionProperty::IS_PRIVATE);

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/search.css"/>
</head>

<body>
<h1 id='tableAddPkmn'>R E C H E R C H E Z !</h1>

<form align = 'center' id = 'formAddPokemon' action="./index.php?" method="post">


    <label>Type de recherche :</label>


    <select name="search">
        <?php
            echo '<option value="'.$reflection[0]->getName().'">'.'ID Pokémon'.'</option>';
        echo '<option value="'.$reflection[1]->getName().'">'.'Nom Pokémon'.'</option>';
        echo '<option value="'.$reflection[2]->getName().'">'.'Description'.'</option>';
        echo '<option value="'.$reflection[3]->getName().'">'.'Type 1'.'</option>';
        echo '<option value="'.$reflection[4]->getName().'">'.'Type 2'.'</option>';
        echo '<option value="'.$reflection[5]->getName().'">'.'URL (image)'.'</option>';

        ?>
    </select><br><br>

    <input type="text" id="search" name="searchWrite" value="Ecrivez votre recherche" size = 20><br><br>

    <input type="submit" value="<?= 'Rechercher' ?>">

</form>
</body>
</html>


<?php


?>