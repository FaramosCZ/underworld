
  <hr>
  
    <?php echo "<H2>Začátek testu DB</H2><br>"; ?>
    
    <?php 
      echo "Natažení knihovny běžných funkcí.";
      require_once "php_lib/common_functions.php";
      echo " -- OK<br>"; 
    ?>
    
    <?php 
      echo "Natažení administrace."; 
      require  "php_lib/admin.php";
      echo " -- OK<br>"; 
    ?>
