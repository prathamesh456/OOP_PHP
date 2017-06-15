
<?php
      $con = mysqli_connect('localhost','root','root','OOP_PHP');
      
      if(!$con)
      {
      	echo "Database OOP_PHP connection failed !! ";
      }

      else
      {
      	echo "Database OOP_PHP connection successful !! ";
      }
     
      
?>