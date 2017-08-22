<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Randonnées</title>


    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>


<table>
    <!-- Afficher la liste des randonnées -->
    <?php
    include("connect.php");
    $reponse = $pdo->query('SELECT * FROM tchat');
    $reponse1 = $reponse->fetchAll();
    // var_dump($reponse1);
    foreach ($reponse1 as $value) {
        ?>
        <div id="corps">
            <div id="text">
                <p><b><span id="oran">Pseudo : </span></b><?= $value->pseudo ?><br>
                    <b><span id="oran">message : </span></b><?= $value->message ?><br>


                </p>
            </div>
        </div>



        <?php
    }
    ?>

</table>
</body>
</html>
