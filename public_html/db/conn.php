 <?php

   session_start();
   error_reporting(0);

   $conn = mysqli_connect('mysql.hostinger.in','u207476440_root','Hello12345','u207476440_socia');
   if(!$conn){
	   echo "db conn problem.";
   }


  
 ?>