<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php

// define variables and set to empty values
$fnameErr = $skillErr = $genderErr = $unameErr = $vnameErr= $ConoErr =$pwdErr = $conpwdErr = $lnameErr= $catErr = $adharErr = $farErr = "";
$txtfname = $txtlname =$cat = $gender = $txtadhar = $txtuname=$txtvname=$txtno=$txtpwd=$txtconpwd =$txtskill = $far = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$flg=0;
   if (empty($_POST["txtfname"])) {
     $fnameErr = "First Name is required";
	 $flg=0;
   } else {
     $txtfname = test_input($_POST["txtfname"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$txtfname)) {
       $nameErr = "Only letters and white space allowed"; 
	   $flg=0;
     }
   }
   if (empty($_POST["txtlname"])) {
     $lnameErr = "Last Name is required";
	 $flg=0;
   } else {
     $txtlname = test_input($_POST["txtlname"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$txtlname)) {
       $lnameErr = "Only letters and white space allowed"; 
	   $flg=0;
     }
   }
   
   if (empty($_POST["txtuname"])) {
     $unameErr = "User name is required";
	 $flg=0;
   } else {
     $txtuname = test_input($_POST["txtuname"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$txtuname)) {
       $unameErr = "Only letters and white space allowed"; 
	   $flg=0;
     }
   }
   if (empty($_POST["txtvname"])) {
     $vnameErr = "Village Name is required";
	 $flg=0;
   } else {
     $txtvname = test_input($_POST["txtvname"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$txtvname)) {
       $vnameErr = "Only letters and white space allowed"; 
	   $flg=0;
     }
   }
   if (empty($_POST["txtno"])) {
     $ConoErr = "Mobile number is required";
	 $flg=0;
   } else {
     $txtno = test_input($_POST["txtno"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^\d{10}$/",$txtno)) {
       $ConoErr = "Invalid phone number"; 
	   $flg=0;
     }
   }
   if (empty($_POST["txtadhar"])) {
     $adharErr = "Adhar card number is required";
	 $flg=0;
   } else {
     $txtadhar = test_input($_POST["txtadhar"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^\d{12}$/",$txtadhar)) {
       $adharErr = "Invalid adhar card number"; 
	   $flg=0;
     }
   }
   if (empty($_POST["txtpwd"])) {
     $pwdErr = "Password is required";
	 $flg=0;
   } else {
     $txtpwd = test_input($_POST["txtpwd"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9_!$@#^&]{8,15}$/",$txtpwd)) {
       $pwdErr = "Invalid password"; 
	   $flg=0;
     }
   }
   if (empty($_POST["txtconpwd"])) {
     $conpwdErr = "Confirm password is required";
	 $flg=0;
   } else {
     $txtconpwd = test_input($_POST["txtconpwd"]);
	 $flg=1;
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z0-9_!$@#^&]{8,15}$/",$txtconpwd)) {
       $conpwdErr = "Invalid Confirm password"; 
	   $flg=0;
     }
   }
   if($txtpwd!=$txtconpwd)
       {
	      echo"Password and confirm password is not match";
		  $flg=0;
	   }
   
  
     
   if (empty($_POST["txtskill"])) {
     $skillErr = "skill is required";
	 $flg=0;
   } else {
     $txtskill = test_input($_POST["txtskill"]);
	 $flg=1;
   }
   if (empty($_POST["cat"])) {
     $catErr = "category is required";
	 $flg=0;
   } else {
     $cat = test_input($_POST["cat"]);
	 $flg=1;
   }
   if (empty($_POST["far"])) {
     $farErr = "select your option";
	 $flg=0;
   } else {
     $far = test_input($_POST["far"]);
	 $flg=1;
   }
   

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
	 $flg=0;
   } else {
     $gender = test_input($_POST["gender"]);
	 $flg=1;
   }
   if($flg==1)
   {
   include"dbcon.php";
  
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
  // echo"hello";
   
   $qry="INSERT INTO `un_sector`.`e_reg` (`f_name`, `l_name`, `category`, `gender`, `village_name`, `u_name`, `password`, `con_pass`, `skill`, `m_no`, `Adhar_no`, `far_distance`) VALUES ( '$txtfname', '$txtlname',$cat,'$gender', '$txtvname', '$txtuname','$txtpwd', '$txtconpwd','$txtskill','$txtno', '$txtadhar')";
   print_r($qry);
   $rs=mysql_query($qry);
   
   if($rs) 
  {
    echo"sucessfully registered";
	//header("Location: login.php");
  }
  }
  else
  {
     echo"incorrect value";
  }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

   
?>

<h2><Center>  Registration Form</Center></h2>
<Center><p><span class="error"><font size=0.5>* required field.</font></span></p></Center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<center>
  <table width="531" border="0" align="center">
    <tr>
      <td width="112" height="38">First Name</td>
	 <td> <input type="text" name="txtfname">
  <span class="error">* <?php echo $fnameErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Last Name</td>
	 <td> <input type="text" name="txtlname">
  <span class="error">* <?php echo $lnameErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Gender</td>
   <td><input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male <span class="error"> <?php echo $genderErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">category</td>
   <td><input type="radio" name="cat" value="employer">Employer
   <input type="radio" name="cat" value="labour">Skill Labour 
   <span class="error"> <?php echo $catErr;?></span></td>
   </tr>
 <tr>
      <td width="112" height="38">Village Name:</td> 
	  <td><input type="text" name="txtvname"><span class="error"> <?php echo $vnameErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Adhacard no:</td> 
	  <td><input type="text" name="txtadhar">  <span class="error">* <?php echo $adharErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">User Name</td><td> <input type="text" name="txtuname"> <span class="error">* <?php echo $unameErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Contact no:</td>
    <td><input type="text" name="txtno"> <span class="error">* <?php echo $ConoErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Password:</td>
    <td><input type="password" name="txtpwd">
	<span class="error">* <?php echo $pwdErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Confirm Password:</td>
   <td> <input type="password" name="txtconpwd">
   <span class="error">* <?php echo $conpwdErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Skill</td><td> <input type="text" name="txtskill"> <span class="error">* <?php echo $skillErr;?></span></td>
   </tr>
   <tr>
      <td width="112" height="38">Willing to go far distance</td>
   <td><input type="radio" name="far" value="yes">Yes
   <input type="radio" name="far" value="no">No 
   <span class="error"> <?php echo $farErr;?></span></td>
   </tr>
   <tr>
   <td align=center><input type="submit" name="submit" value="Submit"> </td>
   <td align=left><input type="reset" name="Reset" value="Reset"> </td>
   </tr>
   </table>
   </center>
</form>

</body>
</html>
