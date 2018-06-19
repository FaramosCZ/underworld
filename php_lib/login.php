<?php

include 'php_lib/objects/player.php';
$hrac = new player;
echo $hrac->test."<br />";
// $hrac->test();

if ($hrac->login("Jarik","mojeheslo"))
  {
   // nastavení sessions pro násludující ověřování, že je uživatel přihlášený;
    echo "session level je: ". $_SESSION['level_menu'];

//   header('Location: ?');
  }
  else
  {
   echo "Neplatný login nebo heslo.";
  }
?>
