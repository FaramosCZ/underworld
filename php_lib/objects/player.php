<?php

include 'database.php';
//include 'php_lib/objects/database.php';

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
}

?>