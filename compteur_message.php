<?php
include("connect.php");
$reponse = $pdo->query("SELECT COUNT(id) FROM tchat");
$reponse1 = $reponse->fetch();

foreach ($reponse1 as $nombre_de_messages ) {
    ?>

<!--    <div>-->
<!--        <div id="">-->
<!--            <p>-->
<!--                <br> <br><br>-->
<!--                <b><span class="">Numéro d'id : </span></b>--><?//=  $nombre_de_messages ?>
<!---->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
    <?php
}
?>

<?php
//$nombre_de_messages/$value="";
?>


