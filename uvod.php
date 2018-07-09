<?php 
/*
  $_SESSION['level_menu'] -- úrověň prohlížení webu: uvod, hraci, postava
  $_SESSION['upir'] -- informace, zda postava je upírem: true,false
*/
  session_start();
  if (!isset($_SESSION['level_menu'])) {$_SESSION['level_menu'] = "uvod";}
?>
<?php include "php_lib/common_functions.php"; ?>

<!doctype html>
<html>
<head>
  <title>Hra UNDERWORLD!</title>
  <link rel="stylesheet" href="styles/styles.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>



<body>



  <div id="leve_menu">
    <?php 
      switch ($_SESSION['level_menu'])
        {
         case "uvod": include "menu/menu_leve__verejne.php"; break; 
         case "hraci": include "menu/menu_leve__hraci.php"; break; 
         default: echo ("error of level_menu level=\"".$_SESSION['level_menu']."\""); 
        }
    ?>
  </div>  


  
  <div id="obsah">
    <?php page_from_get(); ?>
  </div>  



  <div id="prave_menu">
    <?php 
      switch ($_SESSION['level_menu']) 
        {
         case "uvod": include "menu/menu_prave__verejne.php"; break;
         case "hraci": include "menu/menu_prave__hraci.php"; break; 
         default: echo ("error of level_menu level=\"".$_SESSION['level_menu']."\""); 
        }
    ?>
  </div>  



  <div id="paticka">
    <?php 
      switch ($_SESSION['level_menu']) 
        {
         case "uvod": include "menu/menu_paticka__verejne.php"; break;
         case "hraci": include "menu/menu_paticka__hraci.php"; break; 
         default: echo ("error of level_menu level=\"".$_SESSION['level_menu']."\""); 
        }
    ?>
  </div>  



</body>
</html>
