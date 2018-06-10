<?php
if( session_id() )
  {
   echo '<a class="menu_a" href="?page=login">Přihlaš se</a>
         <a class="menu_a" href="?page=register">Zaregistruj se</a>';
  }
else echo '<a class="menu_a" href="php_lib/logout.php">Odhlásit</a>';
?>
