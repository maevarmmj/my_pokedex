<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Type</title>
    <link rel="stylesheet" href="../public/css/addPokemon.css"/>

</head>
<body>
<h1 id='tableAddPkmn'>A J O U T E Z !</h1>

<form id = 'formAddPokemon'  align = 'center' action="index.php?action=add-pokemon-type" method="post">

    <label for="nomEspece">Nom du type :</label><br>
    <input type="text" id="nomEspece" name="nomEspece" size = '20'><br><br>
    <br><br>

    <input type="submit" value="Ajouter">

</form>
</body>
</html>
