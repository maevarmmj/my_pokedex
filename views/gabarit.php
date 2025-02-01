<?php require_once("index.php");?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../public/css/main.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $titre; ?></title>
</head>

<body>


<header>
    <a href = https://youtu.be/YhN4oAS3O4c?si=ga2PYdRZhNd5TiR-''><img id = 'eseo' align = left src = "https://moncompte.eseo.fr/images/logo.png" height= 10% width=10%></a>

    <nav align = 'center'>
        <table id = 'tabGabarit'>
            <tr>
                <td id = 'tab'><a id = 'text' href="./index.php?action=add-pokemon">&nbsp;AJOUTER UN POKEMON&nbsp;</a></td>
                <td id = 'tab'><a id = 'text' href="./index.php?action=add-pokemon-type">&nbsp;AJOUTER UN TYPE&nbsp;</a></td>
                <td id = 'tab'><a id = 'text' href="./index.php?action=search">&nbsp;RECHERCHE&nbsp;</a></td>
                <td id = 'tab'><a id = 'text' href="./index.php?">&nbsp;ACCUEIL&nbsp;</a></td>
            </tr>
            <tr>
                <td id = 'icon'><img src = 'https://cdn-icons-png.flaticon.com/128/188/188995.png' height= 10% width=10%></td>
                <td id = 'icon'><img src = 'https://cdn-icons-png.flaticon.com/128/3531/3531515.png' height= 10% width=10%></td>
                <td id = 'icon'><img src = 'https://cdn-icons-png.flaticon.com/128/428/428094.png' height= 12% width=12%></td>
                <td id = 'icon'><img src = 'https://cdn-icons-png.flaticon.com/128/14079/14079425.png' height= 20% width=20%></td>
            </tr>
        </table>
    </nav>

<div id = 'banner'>
    <center><img id = "pokemon" src = "./public/img/gifPokeBanner.gif" height= 40% width=40%></center>
</div>
</header>
<div id = 'professeurChen'>
    <img src = './public/img/ProfChen.png' height= 50% width=50%>
</div>

<div id = 'professeurJuniper'>
    <img src = './public/img/ProfJuniper.png' height= 48% width=48%>
</div>
<!-- #contenu -->
<main id="contenu">
    <?php echo $contenu; ?>

</main>
<footer>

</footer>
</body>

</html>
