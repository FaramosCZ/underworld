<?php

  // funkce, která do prostředního sloupce vloží text. 
  // Pokud je zadaná hodnota $_GET['page'], tak ji vyčistí od nebezpečných znaků a pokusí se najít odkazovanou stránku.
  function page_from_get() 
  {
    if (isset($_GET['page']) && !empty($_GET['page']))  // test zda je zadána hodnota v $_GET['page']
      {
      //  echo "zobraz! <br />";
               
        $mypage=preg_replace('[^0-9a-z\-]', '', $_GET['page']);   //zachovám alespoň podrtržítko - původně $mypage=eregi_replace('[^0-9a-z\-\_]', '', $_GET['page']);
        $mypage_fullpath=dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'texty' . DIRECTORY_SEPARATOR . $mypage . '.php';
          if(file_exists($mypage_fullpath)){
          require $mypage_fullpath;
          } else {
          error_log("This file doesn't exist: $mypage\n", 3, FILE_ERROR);  // případné zaznamenání chyb
          echo 'ERROR 404: Stránka ' . $mypage . ' neexistuje.';
          }
       } else {
       // pokud není hodnota v $_GET['page']zobraz úvodní stránku
//        $uvod_fullpath=dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'texty' . DIRECTORY_SEPARATOR . '00_logo_netopyr.php';
//        require $uvod_fullpath;
    }                
  }
  
?>
