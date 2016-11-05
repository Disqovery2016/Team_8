<?php
session_start();
session_destroy();

if(!isset($_SESSION['roll'])){
 header('Location:index.php');
}

echo "<script>   
       alert('You have been successfully LoggedOut');
	   location.href='index.php';
	  </script>";



?>