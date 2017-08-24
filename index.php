<?php
/// je declare la superglobale tjrs avant HTML
$cookiePseudo=$_COOKIE['sample3'];
?>

<?php

include("compteur_message.php");

?>

<!DOCTYPE>
<html>

<head>
    <title>MiniChat Project II - The Return</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Material Design Light -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div>
    <form action="script.php" class="mdl-grid" method="POST">
        <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="pseudo" value="<?php echo $cookiePseudo ?>" id="pseudo">
            <label class="mdl-textfield__label" for="sample3">Pseudo</label>
        </div>
        <div class="mdl-cell mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" name="message" value=""  id="message">
            <label class="mdl-textfield__label" for="sample3">Message</label>
        </div>
        <button id="send" class="mdl-cell mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored">
            <i class="material-icons">send</i>
        </button>



</div>

<div class="mdl-layout mdl-js-layout">
    <main class="mdl-layout__content">
        <div class="page-content">
            <div>
<!--//////////////////////////////////////////////////////-->
                <!-- Afficher la liste des messages -->
<!--                ///////////////////////////////////////-->
                <?php
//                include("connect.php");
//                include("compteur_message.php");

                $nbr_msg_affich=12;
                $nombre_de_pages=ceil($nombre_de_messages/$nbr_msg_affich);

                for($i=1; $i<=$nombre_de_pages; $i++)
                {
                    ?>
                    <a href="index.php?page=<?php echo $i ?> "><?php echo $i ?></a>
                    <?php
                }
//                ?>
<!--                --><?php
                if(isset($_GET['page'])&&$_GET['page']>0&&$_GET['page']<$nombre_de_pages){
//                {

                    $page_actu=$_GET['page'];
                    }

                    else {
                    $page_actu = 1;
                        }

                $deb_msg_affich=ceil($page_actu-1) * $nbr_msg_affich;

                $reponse = $pdo->query("SELECT pseudo, message FROM tchat ORDER BY ID DESC LIMIT $deb_msg_affich, $nbr_msg_affich");


                $reponse1 = $reponse->fetchAll();

                foreach ($reponse1 as $value) {
                    ?>
                    <div>
                        <div id="text">
                            <p>
                                <?php
                                $pseudo= $value->pseudo;
                                $message= $value->message;
                                ?>
                                <b><span class="pseudMess">Pseudo : </span></b><?=  $pseudo ?><span> ///  </span>
                                <b><span class="pseudMess">message : </span></b><?= $message ?><hr>
                            </p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

<!--            //////////////////////////////////-->


            <div>
                <?php

                echo  $deb_msg_affich;
                ?>

            </div>

        </div>
    </main>

    <a id="act" href="javascript: window.refresh();">actualiser</a>

    <!--    <input type="button" value="Click !" name="btnActualiser" onclick="document.location.reload(); return false;" />-->
</div>

<script type="text/javascript">
    window.setTimeout("window.location.reload();",30000);
</script>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<!-- Material Design Light -->
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</body>

</html>












