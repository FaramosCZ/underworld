<a href="?"><img src=obrazky/vamp_red_mensi.png style="width:100%" /></a>


<a class="menu_a" href="?page=character" >Jméno postavy</a>
<p>&nbsp;Vlastnosti:&nbsp;</p>
<?php  

echo "&nbsp;Vitalita: ".$character->vitality."%";
echo "<br>&nbsp;Zranitelnost: ".$character->vulnerability."%";
//if ($_SESSION['upir']) 
echo "<br>&nbsp;Čchi: ".$character->qi."";
echo "<br>&nbsp;Hlad: ".$character->hunger."%";
echo "<br>&nbsp;Žízeň: ".$character->thirst."%";
echo "<br>";
echo "<br>&nbsp;Peníze: ".$character->money."Kč";
echo "<br>&nbsp;Zlato: ".$character->gold."g";
echo "<br>&nbsp;Diamanty: ".$character->diamonds."ks";
//if ($_SESSION['upir']) 
echo "<br>&nbsp;Zásoby krve: ".$character->blood." balení";

echo "<br>";
echo "<br>&nbsp;Herní bodování: ".$character->score."";

?>
