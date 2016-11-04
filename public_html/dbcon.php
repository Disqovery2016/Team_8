<?
   
   $con=mysql_connect("localhost:3036","root");
   
  $db=mysql_select_db("un_sector",$con);
  
 $con=mysql_connect("localhost","root");
  if($con)
       echo "connection established" ;
  else
      echo"worng arguments";  
      $db=mysql_select_db("un_sector",$con);
     if($db)
        echo"Succesfully database open";
      else
         echo"Database not found or unauthorized user";  
       //  mysql_close($con);*/

	
?>