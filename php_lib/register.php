<?php

include 'php_lib/objects/player.php';

$hrac = new player;
//echo $hrac->test."<br />";
//$hrac->test();

$res = $hrac->register_new_player($_POST["email"],$_POST["login"],$_POST["password"]);

  if (true == $res) {echo "Registrace proběhla úspěšně. Byl Ti zaslán email.";}
  if ($res == false) {echo "Chyba při ukládání do databáze. Zkontrolujte vložené údaje.";}
  if ($res != true) {echo $res;}
  


/*
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
*/
?>
