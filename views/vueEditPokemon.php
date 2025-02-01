<!DOCTYPE html>
<html>
<head>
    <title ><Éditer Pokémon></title>
    <link rel="stylesheet" href="../public/css/editPokemon.css"/>

</head>
<body>
<h1 id = 'titreEdit'>M O D I F I E Z !</h1>

<form id = 'formEditPokemon' align = 'center' action="index.php?action=edit-pokemon" method="post">

    <input type="hidden" name="idPokemon" value="<?= $pokemon->getIdPokemon() ?>">


    <label for="nomEspece">*Nom :</label>
    <input type="text" id="nomEspece" name="nomEspece" size = "10" value="<?= $pokemon->getNomEspece() ?>">
    <br/>
    <br/>

    <input type="text" id="description" name="description" value="<?= $pokemon->getDescription() ?>" size = '30'>
    <br/>    <br/>


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
    </select>

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
    <br/>   <br/>


    <label for="urlImg">*URL de l'image :</label>
    <input type="text" id="urlImg" name="urlImg" value="<?= $pokemon->getUrlImg() ?>"><br>
    <br/>   <br/>

    <input type="submit" value='Mettre à jour'>

</form>
<p align = 'center'>* : obligatoire</p>
</body>
</html>
