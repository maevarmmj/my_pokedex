<!DOCTYPE html>
<html>
<head>
    <title><?= isset($pokemon) ? 'Éditer Pokémon' : 'Ajouter Pokémon' ?></title>
    <!-- si y a déjà pkmn alors on édite sinon on ajoute -->
    <link rel="stylesheet" href="../public/css/addPokemon.css"/>

</head>
<body>
<h1 id='tableAddPkmn'>A J O U T E Z !</h1>


<form id='formAddPokemon' align='center' action="index.php?action=add-pokemon" method="post">
    <table id = 'tableauAddPokemon' align = 'center'>
        <tr>
            <td><label>*ID :</label>
                <input type="number" name="idPokemon" size="4"></td>

            <td><label for="nomEspece">*Nom :</label>
            <input type="text" id="nomEspece" name="nomEspece" size="10"></td>
        </tr>

        <tr><td colspan = "2">
            <textarea id="description" name="description">Décrivez votre pokémon</textarea>
            </td>
        </tr>

<tr><td>
        <label for="typeOne">*Type 1 :</label>
        <select name="typeOne" id="typeOne">
            <option class="type-eau" selected value="Eau">Eau</option>
            <option class="type-feu" value="Feu">Feu</option>
            <option class="type-plante" value="Plante">Plante</option>
            <option class="type-spectre" value="Spectre">Spectre</option>
            <option class="type-tenebre" value="Ténèbre">Ténèbre</option>
            <option class="type-psy" value="Psy">Psy</option>
            <option class="type-glace" value="Glace">Glace</option>
            <option class="type-insecte" value="Insecte">Insecte</option>
            <option class="type-combat" value="Combat">Combat</option>
            <option class="type-acier" value="Acier">Acier</option>
            <option class="type-roche" value="Roche">Roche</option>
            <option class="type-fee" value="Fée">Fée</option>
            <option class="type-normal" value="Normal">Normal</option>
            <option class="type-poison" value="Poison">Poison</option>
            <option class="type-sol" value="Sol">Sol</option>
            <option class="type-electrique" value="Électrique">Électrique</option>
            <option class="type-vol" value="Vol">Vol</option>
            <option class="type-dragon" value="Dragon">Dragon</option>
        </select></td>
<td>
        <label for="typeTwo">Type 2 :</label>
        <select name="typeTwo" id="typeTwo">
            <option class="type-none" selected value="">Aucun</option>
            <option class="type-eau" value="Eau">Eau</option>
            <option class="type-feu" value="Feu">Feu</option>
            <option class="type-plante" value="Plante">Plante</option>
            <option class="type-spectre" value="Spectre">Spectre</option>
            <option class="type-tenebre" value="Ténèbre">Ténèbre</option>
            <option class="type-psy" value="Psy">Psy</option>
            <option class="type-glace" value="Glace">Glace</option>
            <option class="type-insecte" value="Insecte">Insecte</option>
            <option class="type-combat" value="Combat">Combat</option>
            <option class="type-acier" value="Acier">Acier</option>
            <option class="type-roche" value="Roche">Roche</option>
            <option class="type-fee" value="Fée">Fée</option>
            <option class="type-normal" value="Normal">Normal</option>
            <option class="type-poison" value="Poison">Poison</option>
            <option class="type-sol" value="Sol">Sol</option>
            <option class="type-electrique" value="Électrique">Électrique</option>
            <option class="type-vol" value="Vol">Vol</option>
            <option class="type-dragon" value="Dragon">Dragon</option>
        </select>

</td>
</tr>
        <tr><td colspan = "2">
        <label for="urlImg">*URL de l'image :</label>
        <input type="text" id="urlImg" name="urlImg">
            </td>
        </tr>
        <tr><td colspan = "2">
                <input type="submit" value="Ajouter"></td></tr>

    </table>
</form>

<p align='center'>* : obligatoire</p>
</body>
</html>
