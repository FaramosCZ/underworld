<?php

include 'php_lib/objects/database.php';
//include 'database.php';

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

  echo "<br />register_new_player: ".$email.", ".$nick.", ".$password."<br />";

  // uložení do databáze
  $res = $this->db->insert_new_player($email,$nick,$password);

  return $res;
  }
}

?>