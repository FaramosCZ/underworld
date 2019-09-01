<?php

//include 'php_lib/objects/database.php';
include 'database.php';

class player
{

  public $id;
  public $nick;
  public $email;
 
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
   echo "test player je ok!<br />";
   return true;
  }

public function login($login,$password)
  {
   $hrac_from_db = $this->db->verify_player($login,$password);
   if (! $hrac_from_db == false) // AND $hrac['id']>= 0 )
   {
    $_SESSION['level_menu'] = "hraci";
    $_SESSION['player_id'] = $hrac_from_db['id'];
    $_SESSION['player_nick'] = $hrac_from_db['nick'];
    //return false;
    return true;
   }
   else
   {
    return false;    
   }
  }

public function register_new_player($email,$nick,$password)
  {
  // kontrola jmena, hesla
  $nick = $this->db->text_check(strtolower($nick));
  //$this->db->text_check($nick);
  $password = $this->db->text_check($password);
  // kontrola emailu
  $email = $this->db->text_check(strtolower($email));

  // uložení do databáze
  $res = $this->db->insert_new_player($email,$nick,$password);

  return $res;
  }
  
public function list_of_new_players()
  {
  $players_list = $this->db->new_players_list();
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
   }
  }   
  
public function list_of_players()
  {
  $players_list = $this->db->players_list();
  if ($players_list != null) foreach ($players_list as $player)
   {
    echo $player["id"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $player["nick"];
    echo "&nbsp;&nbsp;&nbsp;";
    echo $player["email"];
    echo "<br />";
   }
  }   

//approve new player means move new player from table players_new to table players
public function approve_new_player($id)
  {
  $player = $this->db->get_player_new($id);
  echo $this->db->insert_player($player["email"],$player["nick"],$player["password"]);
  $this->db->delete_player_new($id);
  }   

public function delete_new_player($id)
  {
  $this->db->delete_player_new($id);
  }   
 
}

?>