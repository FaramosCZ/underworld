<?php
require_once 'php_lib/objects/player.php';  
if (isset($_POST["Schválit"]) and ($_POST["Schválit"]=="Schválit")) 
 {
  $hrac = new player;
  $hrac->approve_new_player($_POST["id"]);
  header('Location: ?page=admin');
 }
else
{
 if ($_POST["Odstranit"]=="Odstranit") 
  {
   echo "<br />";
   echo $_POST["id"];
   echo "&nbsp;&nbsp;";
   echo $_POST["nick"];
   echo "&nbsp;&nbsp;";
   echo $_POST["email"];
   echo "<br /><br />";
   echo "Opravdu tuto registraci smazat?<br /><br />";
   echo '<form action="?page=delete_new_player" method="post" name="approve_form">';
   echo '<input type="hidden" name="id" value="' . $_POST["id"] . '">';
   echo '<input type="hidden" name="nick" value="' . $_POST["nick"] . '">';
   echo '<input type="hidden" name="email" value="' . $_POST["email"] . '"><br />';
   echo '<button type="submit" name="Smazat" value="Smazat">Smazat</button>';
   echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
   echo '<button type="submit" name="Zpět" value="Zpět">Zpět</button></form>';
  }
  else
  {
  echo "Chybná data z formuláře!";
  }
}
?>