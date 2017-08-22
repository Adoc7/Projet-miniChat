<?php

//$cookie_value = $_POST['pseudo'];
//$cookie_value="SUPERMAN";


setcookie('sample3',
    $_POST['pseudo'],
    time() + 365*24*3600,
    null,
    null,
    false,
    true)
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
</head>

<body>
<p>
    hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['sample3']; ?>
    c'est bien ça ?
</p>
</body>
</html>