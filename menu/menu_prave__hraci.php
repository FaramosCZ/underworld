<a href="?"><img src=obrazky/vamp_red_mensi.png style="width:100%" /></a>
<br />
<br />
<br />
<?php
  if (isset($character)) 
    {
    echo "&nbsp; $character->name &nbsp;";
    echo '<a class="menu_a" href="?page=to_character" >Hrát!</a>';
    }
    else
    {
    echo "<br /><br /><br /><br />";
    }
 ?>
<br />
<br />
<br />
<br />
<br />
<br>&nbsp;<b>Výsledky ve hře</b> 

<br />
<br>&nbsp;Pořadí: 15.
<br>&nbsp;Body: 1383
<br />
<br />
<br />
<br />
<br />
<br />

    <?php
      echo $player->id."; ";
      echo $player->nick."; ";
      echo $player->email."; ";
      echo $player->is_admin."; ";
      echo "<br />";
//      echo var_dump($player);
    ?>

