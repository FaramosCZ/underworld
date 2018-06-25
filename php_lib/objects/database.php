<?php
class database
{
private $conn;

// metoda pro připojení k databázi
protected function db_connect()      
  {
   include "../_pristupy/databaze.php";
   $this->conn = new mysqli($db_servername, $db_username, $db_password, $db_dbname);
   
   // check connection 
   if ($this->conn->connect_errno) 
     {
      die("Database connection failed.");
      return "Database connection failed: ". $this->conn->connect_error; 
     }
   return true;
  }

public function __construct()
  {
    $this->db_connect();
   return true;
  }
 
public function __destruct()
  {
    $this->conn->close();
  }

public function test()
  {
   echo "test databaze je ok!<br />";
  }


public function verify_player($login,$password)
  {
   if ($this->conn->connect_errno) 
     {
      die("Database connection failed.");
      //die("Database connection failed: ". $this->conn->connect_error); 
     }

     $res = $this->conn->query("SELECT `id`,`nick` FROM `players` WHERE `nick`='" . $login . "' OR `email`='" . $login . "' AND `password`='" . $password . "'");
     
      // počet nalezených uživatelů:  $res->num_rows;
      // ověření, že dle zadaných údajů je nalezen právě jeden uživatel
     if ($res->num_rows == 1)
       {
        $res_hrac = $res->fetch_assoc();
        $res->free_result();
        return $res_hrac;
       }
       else
       {
        $res->free_result();
        return false;
       }
  }
} 

?>