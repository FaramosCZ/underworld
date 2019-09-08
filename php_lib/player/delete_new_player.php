<?php
require_once 'php_lib/objects/player.php';  
if ($_POST["Smazat"]=="Smazat") 
 {
  $hrac = new player;
  $hrac->delete_new_player($_POST["id"]);
 }
header('Location: ?page=admin');
 ?>