<?php

// Funkce, která do prostředního sloupce vloží text. 
// Pokud je zadaná hodnota $_GET['page'], tak ji vyčistí od nebezpečných znaků a pokusí se najít odkazovanou stránku.
function page_from_get() 
{
 // Test zda je zadána hodnota v $_GET['page']
 if( isset($_GET['page']) && !empty($_GET['page']) )  
   {
    // Zachovám alespoň podrtržítko - původně $mypage=eregi_replace('[^0-9a-z\-\_]', '', $_GET['page']);
    $mypage = preg_replace('[^0-9a-z\-]', '', $_GET['page']);
    $mypage_fullpath = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'texty' . DIRECTORY_SEPARATOR . $mypage . '.php';

    if( file_exists($mypage_fullpath) )
      {
       require $mypage_fullpath;
      }
    else
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
