<?php
   
    include 'db/conn.php';
  
 if(isset($_SESSION['roll'])){
     header('Location:dashboard.php');
}
	
 

if(empty($_POST) === false){
      
	    $name = mysqli_real_escape_string($conn,$_POST['name']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$roll = mysqli_real_escape_string($conn,$_POST['roll']);
		$pass = mysqli_real_escape_string($conn,$_POST['pass']);
		$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);

		//-----password hashing--------
		
		$hash = sha1($pass);
		
		date_default_timezone_set('Asia/Kolkata');
		$t = date('l j M, Y || G:i:s');
		
		//------creating random code-------
		$a = rand(11111111,99999999);
		$code = sha1($a);

		
		$sql = "INSERT into users(name, email, rollno, password, active, active_code, mobile, time) 
				           VALUES('$name', '$email', '$roll', '$hash', 0, '$code', '$mobile', '$t')";
						   
		$sql1 = "SELECT * from users where email = '$email'";
        $vemail = mysqli_query($conn,$sql1);

        $sql2 = "SELECT * from users where rollno = '$roll'";
        $vroll = mysqli_query($conn,$sql2);
		
		if(mysqli_num_rows($vemail) > 0){
			
			    echo "<script>alert('You are already registered.')</script>";
		        echo "<script>location.href='reg.php'</script>";

		          }else if(mysqli_num_rows($vroll) > 0){
			
			           echo "<script>alert('This ID is  already registered.')</script>";
                                   
		                   echo "<script>location.href='reg.php'</script>";
			
			
		    } else{
				
                            //--------mail------------
                     
		              $to = "$email";
		              $subject = 'Verify your account';
		              $message = "Welcome to Infinity Sorting Solutions.\nYou have been successfully signed up.\nPlease click on spartanmdg.esy.es/activation.php?code=$code to continue witht t the registraion.  Kind Regards,\nInfinity Sorts ";
		              $headers = 'From: Infinity Sort Solutions';
                            
                                if(!mail($to,$subject,$message,$headers)){
						  
						               echo "We couldn't signup at this time. Try again.";
						              echo "<script>location.href='index.php'</script>";

            
								}else{
		                       if(mysqli_query($conn,$sql)){
			              					  
			              					 echo "<script>alert('Congratulations $name'+'\\n'+'Registration Successfull.!!!')</script>";
			              					 echo "<script>location.href='login.php'</script>";
			              					 
			              				  }
			              				
			              				   else echo "problem in registering";
			              			}
 }}
 else{		
	?>


<!DOCTYPE html>

<html lang="en">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
<?php    
  require 'includes/header.php'; 
?>

    <body>
				<?php include 'includes/top_menu.php'?>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="scroll-link" onclick="location.href='index.php'">Home</a></li>
						<li><a class="scroll-link" onclick="location.href='login.php'">Login</a></li>
						<li><a class="scroll-link" onclick="location.href='reset.php'">Forgot Password?</a></li
					</ul>
				</div>
			</div>
		</nav>

				<!-- Register -->
        <div class="block-3-container section-container register-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2-box block-2-left">
				               <div class="panel panel-login">
				               	 <div class="panel-heading">
				               		<div class="row">
				               			<div class="col-xs-12" style="width:100%">
				               				<a href="#" class="active" id="register-form-link">Register</a>
				               			</div>
				               		</div>
				               		<hr>
				               	</div>
				               	<div class="panel-body">
				               		<div class="row">
				               			<div class="col-lg-12">
                                  
								  <!-- Register -->
								  
								  <form name="reg" id="register-form" action="reg.php" method="post" role="form" style="display: block;" onsubmit='return validate();'>
									<div class="form-group">
										<input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Name" value="">
									</div>
									<div class="form-group">
										<input type="email" style="color:green" name="email" id="username" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="text" name="mobile" id="username" tabindex="1" class="form-control" placeholder="Mobile Number" value="" maxlength=10>
									</div>
									<div class="form-group">
										<input type="text" name="roll" id="username" tabindex="1" class="form-control" placeholder="Identity Number" value="">
									</div>
									<div class="form-group">
										<input type="password" name="pass" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="repass" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
	                </div>
	            </div>
                 </div>
        
        </div>		
		
 <?php include 'includes/contact_us.php'; include 'includes/footer.php'; } ?>