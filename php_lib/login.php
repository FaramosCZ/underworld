<?php

include 'php_lib/objects/player.php';
$hrac = new player;
echo $hrac->test."<br />";
// $hrac->test();
if(isset($_POST["login"]) and isset($_POST["password"]))                  
  {
   if ($hrac->login($_POST["login"],$_POST["password"]))
     {
      // nastavení sessions pro násludující ověřování, že je uživatel přihlášený;
      header('Location: ?');
     }
     else
     {
      echo "Neplatný login nebo heslo.";
     }
  }
  else
  {
   echo "Chyba v zadání loginu nebo hesla.";
  }
?>
