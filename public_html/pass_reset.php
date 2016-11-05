<?php
	
    include 'db/conn.php';

   //------Getting value from Url----

   if(isset($_SESSION['roll'])){
     header('Location:dashboard.php');
}
  


 $code = $_GET[token];

   if(!$code == ""){
                if(isset($_POST["change-submit"])) {
                     $pass = mysqli_real_escape_string($conn,$_POST['pass']);
                     $hash = sha1($pass);     
                     $sql = mysqli_query($conn,"UPDATE users SET password='$hash' where reset_code='$code'");
                     if($sql){
                        
                        $sql1= mysqli_query($conn,"Select * from users where reset_code='$code'");
                        $data= mysqli_fetch_array($sql1); 
                        echo "<script>alert('Your password has been changed.')</script>";
                         $message = "Reset Your Password";
                         $to=$data['email'];
                         $subject="Your Password just changed.";
                   $body="
Hello, 
     ".$data['name']." 
     Your password has been changed. If you didn't do that please contact us fast.
     Your security is our major concern.
							 
     CVSURE-Team";
                         $headers = "From: CVSURE-Security-Team";
                         mail($to,$subject,$body,$headers);
                        echo "<script>location.href='login.php'</script>";
                        
                   }
                 }

else
 {
echo "<script>alert('Something Happened!!!')";
echo "<script>location.href=pass_reset.php</script>";
   }}else{
	echo "<script>alert('link is wrong !!!');
	        location.href='login.php';</script>";
}
?>
?>
<!DOCTYPE html>

<html lang="en">
<head>
<script>
function validate_reset(){
	   
	   //--------Confirmation_Password-------------  
             
         var pass=document.reset.pass.value;
	     var repass=document.reset.repass.value;
	 
	 
	 if(pass!="" && pass.length<3){
		 alert("Your Password is very small");
		 document.reset.pass.focus();
		 return false;
	 }
	 
	 if(pass !="" && pass.search(/[a-zA-Z]/)==-1){
		alert("Your Password doesn't have any letter.");
		 document.reset.pass.value="";
		 document.reset.repass.value="";
		 document.reset.pass.focus();
		 return false;
		 
	 }
	 
	 if(pass !="" && pass.search(/[0-9]/)==-1){
		 alert("Your Password doesn't have any Number Digit.");
		 document.reset.pass.value="";
		 document.reset.repass.value="";
		 document.reset.pass.focus();
		 return false;
	 }
	 
 
	 if(repass!="" && repass!=pass){
	     alert("Password doesn't match");
		 document.reset.repass.value="";
		 document.reset.repass.focus();
         return false;	
	 }

}




</script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>New Password</title>
<?php    
  require 'includes/header.php'; 
?>

    <body>
				<?php include 'includes/top_menu.php'?>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="scroll-link" onclick="location.href='index.php'">Home</a></li>	
					</ul>
				</div>
			</div>
		</nav>
		

          <!-- Reset -->
        <div class="block-3-container section-container register-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2-box block-2-left" >
				               <div class="panel panel-login">
				               	 <div class="panel-heading">
				               		<div class="row">
				               			<div class="col-xs-6" style="width:100%">
				               				<a href="#" class="active" id="login-form-link">Change Password</a>
				               			</div>
				               		</div>
				               		<hr>
				               	</div>
				               	<div class="panel-body" style="width:100%">
				               		<div class="row">
				               			<div class="col-lg-12">
                                  
								  <!-- Reset -->
								  
								  <form name="reset" id="login-form" action="pass_reset.php?token=<?php echo $code;?>" onsubmit="return validate_reset();" method="post" role="form" style="display: block;" >
									<div class="form-group">
										<input type="text" name="pass" id="username" tabindex="1" class="form-control" placeholder="New Password" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="repass" id="password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="change-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Change Password">
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
		
 <?php include 'includes/contact_us.php'; include 'includes/footer.php' ?>