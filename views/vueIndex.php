<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="../public/css/index.css"/>
</head>

<body>


<?php require_once('models/PokemonManager.php');

$tableauType = array('Plante', 'Eau', 'Feu', 'Spectre', 'Dragon', 'Fée', 'Glace', 'Combat', 'Psy', 'Ténèbres', 'Électrique', 'Acier', 'Roche', 'Poison', 'Vol', 'Insecte', 'Sol', 'Normal','');
$tableauCouleur = array('#62cc70', '#7dace8', '#eb6f46', '#423252', '#2e3c85', '#fa8cdd', '#5ba4bd', '#804c3b', '#f073be', '#3a2945', '#dec254', '#91918e', '#696969', '#876eb8', '#76a7ab', '#8ae070', '#b09b6d', '#9c9484','');
?>

<h1 id = 'titreIndex'>P O K E D E X&nbsp;&nbsp; D E&nbsp;&nbsp; <?php echo $nomDresseur ?> </h1>


<?php for ($i = 0;
           $i < count($tableauPKMN);
           $i++) {
    for ($j = 0;
         $j < count($tableauType);
         $j++) { ?>

        <table id = 'tablePokemon'>

            <tbody>

            <tr>
                <?php if ($tableauPKMN[$i]->getTypeOne() == $tableauType[$j]){ ?>
                <td align="center" colspan="5" bgcolor=<?php echo $tableauCouleur[$j] ?>><img id='imgPoke'
                                                                                              src='<?= $tableauPKMN[$i]->getUrlImg() ?>'
                                                                                              width=10% height=10%>

            </tr>
            <tr>
                <th style="width:10%">ID</th>
                <th style="width:30%">Pokemon</th>
                <th colspan="2" style="width:30%">Type(s)</th>
                <th style="width:15%">Options</th>
            </tr>

            <tr>
                <td><?= $tableauPKMN[$i]->getIdPokemon() ?></td>
                <td><?= $tableauPKMN[$i]->getNomEspece() ?></td>


                <td id='type1' style='background-color: <?php echo $tableauCouleur[$j] ?>; border-radius : 10px 10px 10px 10px; overflow : hidden;'><?= $tableauPKMN[$i]->getTypeOne() ?></td>

                <?php for ($k = 0;
                $k < count($tableauType);
                $k++) { ?>
            <?php if ($tableauPKMN[$i]->getTypeTwo() == $tableauType[$k]){ ?>
                <td id='type2' style='background-color: <?php echo $tableauCouleur[$k] ?>; border-radius : 10px 10px 10px 10px; overflow : hidden;'><?= $tableauPKMN[$i]->getTypeTwo() ?></td>
                <?php }}?>

                <td rowspan="4"><a
                            href="./index.php?action=edit-pokemon&idPokemon=<?= $tableauPKMN[$i]->getIdPokemon() ?>"><img  id = 'iconOption1'
                                src='https://static-00.iconduck.com/assets.00/pencil-icon-2048x2048-b2kyfub6.png' width=13% height=13%></a>
                    <a href="./index.php?action=del-pokemon&idPokemon=<?= $tableauPKMN[$i]->getIdPokemon() ?>"><img id = 'iconOption2'
                                src='https://cdn2.iconfinder.com/data/icons/apple-inspire-white/100/Apple-64-512.png'
                                width=14%
                                height=14%></a>
                </td>
            </tr>

            <tr>
                <td id='description' colspan="4"><?= $tableauPKMN[$i]->getDescription() ?></td>
            </tr>
            <?php } ?>

            </tbody>

        </table>
    <?php }
} ?>

</body>
</html>