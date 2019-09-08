<?php

//include 'php_lib/objects/database.php';
require_once 'database.php';

class page
{

  public $get_page;

public function __construct()
  {
   $this->db = new database;
   return true;
  }
 
public function __destruct()
  {
   return true;
  }

public function test()
  {
   echo "test page library is ok!<br />";
   return true;
  }


public function compose_page($get_page, $player_id, $character_id)
// na základě vložených informací poskládá, co bude možné na stránce vidět 
  {
     //return false;
    return $res;
   }
   else
   {
    return false;    
   }
  }

public function register_new_character($name)
  {
  // kontrola jmena
  $name = $this->db->text_check(strtolower($name));
  // hodilo by se ještě ověření proti duplikaci

  // uložení do databáze
  $res = $this->db->insert_new_character($name);

  return $res;
  }
  
public function list_of_new_characters()
  {
/*  $players_list = $this->db->new_players_list();
  if ($players_list != null) foreach ($players_list as $player)
   {
    echo '<form action="?page=approve_new_player" method="post" name="approve_form">';
    echo $player["id"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $player["nick"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $player["email"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo '<input type="hidden" name="id" value="' . $player["id"] . '"><input type="hidden" name="nick" value="' . $player["nick"] . '"><input type="hidden" name="email" value="' . $player["email"] . '"><button type="submit" name="Schválit" value="Schválit">Schválit</button>&nbsp;&nbsp;<button type="submit" name="Odstranit" value="Odstranit">Odstranit</button></form>';
    echo "<br />";
*/
   }
  }   
  
public function list_of_characters()
  {
/*  $players_list = $this->db->players_list();
  if ($players_list != null) foreach ($players_list as $player)
   {
    echo $player["id"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $player["nick"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $player["email"];
    echo "<br />";
*/
   }
  }   

public function create_new_character($id)
// uživatel zadá jméno s požadavkem na vytvoření postavy, kterou reálně musí vytvořit administrátor
  {
/*  $player = $this->db->get_player_new($id);
  echo $this->db->insert_player($player["email"],$player["nick"],$player["password"]);
  $this->db->delete_player_new($id);
*/
  }   

public function refuse_new_character($id)
// odmítnout požadavek na novou postavu
  {
//  $this->db->delete_player_new($id);
  }   
 
}

?>