<?

   $usr=$_POST["txtname"];
   $pwd=$_POST["txtpwd"];
   include"dbcon.php";
   $qry="SELECT * FROM `e_reg` WHERE `u_name` LIKE '%".$_POST["txtname"]."%'";
   $rs=mysql_query($qry);
   while($rec=mysql_fetch_assoc($rs))
    {
	  $pss=$rec["Password"];
	  $usr1=$rec["u_name"];
	}
   if (($usr==$usr1) && ($pwd==$pss))
     {
	  header("Location: employer.php");
     }
    else
      header("Location: Login.php?err=1");
  
?>