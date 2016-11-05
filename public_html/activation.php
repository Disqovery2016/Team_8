<?php

   require 'db/conn.php';
   
     if(isset($_SESSION['roll'])){
     header('Location:dashboard.php');
}


   $code = $_GET[code];
              
   //----accessing data of the user----------
   
   $sql1 = "SELECT * from users WHERE active_code='$code'";
   $data = mysqli_fetch_array(mysqli_query($conn,$sql1));
   
  if(!$code){
	   echo "No Code was Provided.";
   }elseif($code == $data['active_code']){
          
              $activate = mysqli_query($conn,"UPDATE users SET active='1' , active_code= sha1('$code') WHERE active_code='$code'");
              echo '<script>alert("Hello, "+"'.$data["name"].'" +"\\n"+ " Your account has been activated.You can login now.")</script>';
              echo "<script>location.href='login.php'</script>"; 

	  }
	   else{
	       echo "<script>alert('Oops !!! You have used an old OR wrong link')</script>";
	       echo "<script>location.href='login.php'</script>";
   }