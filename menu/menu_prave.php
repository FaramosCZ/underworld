<?php
if( session_id() )
{
?>

<div class="menu_vertical_spacer">
<a class="menu_login" href="php_lib/login.php">Přihlaš se</a>
<a class="menu_login" href="php_lib/register.php">Zaregistruj se</a>
</div>

<?php
}
else
{
?>

<div class="menu_vertical_spacer">
<a class="menu_login" href="php_lib/logout.php">Odhlásit</a>
</div>


<?php
}
?>
