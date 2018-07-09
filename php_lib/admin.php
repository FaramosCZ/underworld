<?php
include 'objects/player.php';  
?>
<p>Noví hráči:</p>
<?php
$hraci = new player;
$hraci->list_of_new_players();  	
?>
<p>Přehled hráčů:</p>
<?php
$hraci->list_of_players();   
?>