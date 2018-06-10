<a href="?"><img src=obrazky/vamp_red_mensi.png style="width:100%" /></a>

<?php
if( session_id() )
  {
   echo '<a class="menu_a" href="php_lib/login.php">Přihlaš se</a>
         <a class="menu_a" href="php_lib/register.php">Zaregistruj se</a>';
  }
else echo '<a class="menu_a" href="php_lib/logout.php">Odhlásit</a>';
?>
