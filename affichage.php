<?php
include("connect.php");
$reponse = $pdo->query('SELECT pseudo, message FROM tchat ORDER BY ID DESC LIMIT 0,10');
$reponse1 = $reponse->fetchAll();
// var_dump($reponse1);



//<div class="demo-card-wide mdl-card mdl-shadow--2dp">
//<div class="mdl-card__title">
//<h2 class="mdl-card__title-text">Welcome</h2>
//
//</div>
//<div class="mdl-card__supporting-text">
//Lorem ipsum dolor sit amet, consectetur adipiscing elit.
//Mauris sagittis pellentesque lacus eleifend lacinia...
//</div>
//  <div class="mdl-card__actions mdl-card--border">
//<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
//Get Started
//</a>
//          </div>
//            <div class="mdl-card__menu">
//<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
//<i class="material-icons">share</i>
//                                 </button>
//                                   </div>
//                                     </div
foreach ($reponse1 as $value) {
    ?>
    <div>
        <div id="text">
           <p>
               <?php

               ?>
               <b><span class="pseudMess">Pseudo : </span></b><?=  $value->pseudo ?><span> ///  </span>
                <b><span class="pseudMess">message : </span></b><?= $value->message ?><hr>
            </p>
        </div>
    </div>
    <?php
}
?>

<!--;-->
