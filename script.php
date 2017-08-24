

<?php
include("connect.php");

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = ($_POST['message']);
$message = str_replace(':)','<img src="../Projet-miniChat/smile_cat.png"/>',$message);
//$_COOKIE['pseudo']=$_POST['pseudo'];

$req = $pdo->prepare("INSERT INTO tchat (pseudo, message)
VALUES (:pseudo, :message)");

$req->execute(array(
'pseudo' => $pseudo,
'message' => $message
));

setcookie('sample3', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);// On écrit un cookie

print_r($pdo->errorInfo());



header("location: index.php");
?>