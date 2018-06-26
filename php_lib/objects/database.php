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

// funkce na kontrolu textu před vkládáním do databáze
public function text_check($input_text)
  {
   // test zda je vůbec zadána hodnota  
   if (isset($input_text) && !empty($input_text) )
   {
    //odstranění mezer v textu
    $verified_text = preg_replace('/\s\s+/', ' ', $input_text);
    //zachovám alespoň podrtržítko - alternativně $verified_text=preg_replace('[^0-9a-z\-\_]', '', $verified_text);
    $verified_text=preg_replace('[^0-9a-z\-]', '', $verified_text);

    return $verified_text;  
   }
  }
 

public function verify_player($login,$password)
  {
   if ($this->conn->connect_errno) 
     {
      die("Database connection failed.");
      //die("Database connection failed: ". $this->conn->connect_error); 
     }

     $res = $this->conn->query("SELECT `id`,`nick`,`email` FROM `players` WHERE `nick`='" . $login . "' OR `email`='" . $login . "' AND `password`='" . $password . "'");
     
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
 
public function insert_new_player($email,$nick,$password)
  {
    // kontrola, zda už není přihlašovací jméno použité v tabulce potvrzených hráčů
   $res = $this->conn->query("SELECT `id`,`nick`,`email`  FROM `players` WHERE `nick`='" . $nick . "' OR `email`='" . $email  . "'");
   echo "<br /> počet nalezených výskytů: " . $res->num_rows . "<br />";
   if ($res->num_rows > 0)
     {
      $res_hrac = $res->fetch_assoc();
      $res->free_result();
      if ($email == $res_hrac["email"])
        {exit ("Hráč s tímto emailem je již registrovaný");}
      if ($nick == $res_hrac["nick"])
        {exit ("Hráč s tímto loginem je již registrovaný");}
     exit ("Hráč je již registrovaný");
     }

    // kontrola, zda už není přihlašovací jméno použité v tabulce NOVÝCH hráčů
   $res = $this->conn->query("SELECT `id`,`nick`,`email`  FROM `players_new` WHERE `nick`='" . $nick . "' OR `email`='" . $email  . "'");
   echo "<br /> počet nalezených výskytů: " . $res->num_rows . "<br />";
   if ($res->num_rows > 0)
     {
      $res_hrac = $res->fetch_assoc();
      $res->free_result();
      if ($email == $res_hrac["email"])
        {exit ("Hráč s tímto emailem je již registrovaný");}
      if ($nick == $res_hrac["nick"])
        {exit ("Hráč s tímto loginem je již registrovaný");}
     exit ("Hráč je již registrovaný");
     }

   // insert into database:
   $sql = "INSERT INTO `players_new` (id, nick, email, password) VALUES (0, '" . $nick . "', '" . $email . "', '" . $password . "')";
   $res = $this->conn->query($sql);
     
   if ($this->conn->connect_errno) 
    {
     die("Database connection failed.");
    }

    $res = $this->conn->query("SELECT `id`,`nick` FROM `players` WHERE `nick`='" . $login . "' OR `email`='" . $login . "' AND `password`='" . $password . "'");

        return $res;
  }
  
} 

?>