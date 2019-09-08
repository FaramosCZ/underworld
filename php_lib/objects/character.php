<?php

require_once 'database.php';

class character
{
  public $id;
  public $name;
  public $vitality;
  public $qi;
  public $hunger;
  public $thirst;
  public $money;
  public $gold;
  public $diamonds;
  public $blood;
  public $vulnerability;
  public $score;

  
  private $db;

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
   echo "test character je ok!<br />";
   return true;
  }

// načtení vlastností postavy z databáze do objektu character
// (používá se při každém načtení stránky)
public function load_character($character_id)
  {
   $table = 'characters';
   $character_from_db = $this->db->table_item($table,$character_id);
   if (! $character_from_db == false) // AND $character['id']>= 0 )
  {
    $this->id = $character_from_db['id'];
    $this->name = $character_from_db['name'];
    $this->vitality = $character_from_db['vitality'];
    $this->qi = $character_from_db['qi'];
    $this->hunger = $character_from_db['hunger'];
    $this->thirst = $character_from_db['thirst'];
    $this->money = $character_from_db['money'];
    $this->gold = $character_from_db['gold'];
    $this->diamonds = $character_from_db['diamonds'];
    $this->blood = $character_from_db['blood'];
    $this->vulnerability = $character_from_db['vulnerability'];
    $this->score = $character_from_db['score'];
    return true;
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
/*  $characters_list = $this->db->new_characters_list();
  if ($characters_list != null) foreach ($characters_list as $character)
   {
    echo '<form action="?page=approve_new_character" method="post" name="approve_form">';
    echo $character["id"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $character["nick"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $character["email"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo '<input type="hidden" name="id" value="' . $character["id"] . '"><input type="hidden" name="nick" value="' . $character["nick"] . '"><input type="hidden" name="email" value="' . $character["email"] . '"><button type="submit" name="Schválit" value="Schválit">Schválit</button>&nbsp;&nbsp;<button type="submit" name="Odstranit" value="Odstranit">Odstranit</button></form>';
    echo "<br />";

   }
*/  }   
  
public function list_of_characters()
  {
 $characters_list = $this->db->table_list("characters");
  if ($characters_list != null) foreach ($characters_list as $character)
   {
    echo $character["id"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $character["name"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $character["email"];
    echo "<br />";
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