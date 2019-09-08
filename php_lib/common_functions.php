<?php

// Funkce, která do prostředního sloupce vloží text.
// Pokud je zadaná hodnota $_GET['page'], tak ji vyčistí od nebezpečných znaků a pokusí se najít odkazovanou stránku.
// Ověří zda stránka v povolených adresářích existuje, jinak skončí chybou. #bezpečnost
function page_from_get() 
{
 // Test zda je zadána hodnota v $_GET['page']
 if( isset($_GET['page']) && !empty($_GET['page']) )  
   {
    // Zachovám alespoň podrtržítko - původně $mypage=eregi_replace('[^0-9a-z\-\_]', '', $_GET['page']);
    $mypage = preg_replace('[^0-9a-z\-]', '', $_GET['page']);

    $directories[]="texty";
    $directories[]="php_lib";
    $directories[]="php_lib/character";
    $directories[]="php_lib/player";
    $fileexist = false;
    
    foreach ($directories as &$directory)
      {
       $mypage_fullpath = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $mypage . '.php';
       if( file_exists($mypage_fullpath) )
         {
          require $mypage_fullpath;
          $fileexist = true;
          break;
         }
      }
      
    if (false == $fileexist)
      {  
       // Případné zaznamenání chyb
       error_log("This file doesn't exist: $mypage\n", 3, FILE_ERROR);
       echo 'ERROR 404: Stránka ' . $mypage . ' neexistuje.';
      }
   }
 // Žádná hodnota v $_GET['page']; zobrazvelkého netopýra
 else echo '<div class="netopyr" style="height:100%; width:100%"></div>';
}

?>
