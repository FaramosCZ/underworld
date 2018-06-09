<?php include "php_lib/common_functions.php"; ?>

<?php ## test GitHub ## ?>

<!doctype html>
<html>
<head>
  <title>Hra UNDERWORLD!</title>
  <link rel="stylesheet" href="styles/styles.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>



<body>



  <div id="leve_menu">
    <?php include "menu/menu_leve.php"; ?>
  </div>  


  
  <div id="obsah" class="netopyr">
    <?php page_from_get(); ?>
  </div>  



  <div id="prave_menu">
    <?php include "menu/menu_prave.php"; ?>
  </div>  



  <div id="paticka">
    <?php include "menu/paticka.php"; ?>
  </div>  



</body>
</html>
