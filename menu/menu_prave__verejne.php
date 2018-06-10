<?php
if( session_id() )
{
?>

<div class="menu_vertical_spacer">
<a class="menu_login" href="?page=login">Přihlaš se</a> 
<a class="menu_login" href="?page=register">Zaregistruj se</a>
</div>

<?php
}
else
{
?>

<div class="menu_vertical_spacer">
<a class="menu_login" href="?page=logout">Odhlásit</a>
</div>


<?php
}
?>
