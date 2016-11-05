<?php

include 'db/conn.php';
   
if(isset($_SESSION['roll'])){
     header('Location:dashboard.php');
}


	if(!empty($_POST["reset-submit"])){
		
		if(!empty($_POST["remail"])){

	    $email =  mysqli_real_escape_string($conn,$_POST['remail']);
        $query = "SELECT * FROM users where email='$email'";
        $result = mysqli_query($conn,$query);
        $Results = mysqli_fetch_array($result);

		
     if(count($Results)>=1)
         {
           
             
            $encrypt = hash('sha512',rand(11111111,99999999).$Results['id']);
            
			$sql  =  mysqli_query($conn,"UPDATE users SET reset_code='$encrypt' where email='$email'");
            if(!$sql){
                          
                    echo "<script>alert('Code Error SE')</script>";  
                    }
            $message = "Reset Your Password";
            $to=$email;
            $subject="Forgot Password?";
            $body="
     Hello, 
      ".$Results['name']."
       Click here to reset your password : 
       http://cvsure.esy.es/pass_reset.php?token=$encrypt
       
       CVSURE-Team";
            $headers = "From: CVSURE-Team";

            mail($to,$subject,$body,$headers);
			
			echo "<script>alert('Reset link has been sent to you email')</script>";
                        echo "<script>location.href='login.php'</script>";
        }
        else
        {
            echo "<script>alert('Account not found please signup now!!')</script>";
            echo "<script>location.href='reset.php'</script>";
			
        }
			
			
		}
	
	}
?>

<!DOCTYPE html>

<html lang="en">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forgot Password?</title>
<?php    
  require 'includes/header.php'; 
?>

    <body>
				<?php include 'includes/top_menu.php'?>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="scroll-link" onclick="location.href='index.php'">Home</a></li>
						<li><a class="scroll-link" onclick="location.href='reg.php'">Register</a></li>
						<li><a class="scroll-link" onclick="location.href='login.php'">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
		

          <!-- Reset -->
        <div class="block-3-container section-container register-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2-box block-2-left" >
				               <div class="panel panel-login" style="margin-top:13%">
				               	 <div class="panel-heading">
				               		<div class="row">
				               			<div class="col-xs-6" style="width:100%">
				               				<a href="#" class="active" id="login-form-link">Resetting Password</a>
				               			</div>
				               		</div>
				               		<hr>
				               	</div>
				               	<div class="panel-body" style="width:100%">
				               		<div class="row">
				               			<div class="col-lg-12">
                                  
								  <!-- Reset -->
								  
								  <form name="log" id="login-form" action="#" method="post" role="form" style="display: block;" >
									<div class="form-group">
										<input type="email" name="remail" id="username" tabindex="1" class="form-control" placeholder="Email" value="" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="reset-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Reset Password">
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
