<?php
	require 'db/conn.php';
   if(isset($_SESSION['roll'])){
     header('Location:dashboard.php');
}
	if(empty($_POST) === false){
		          //-------Creating Variables-------------
                    $lroll = mysqli_real_escape_string($conn,$_POST['lroll']);
                    $lpass  = mysqli_real_escape_string($conn,$_POST['lpass']);
					$cat = mysqli_real_escape_string($conn,$_POST['cat']);
                    $pass_check = sha1($lpass);
		  
	              //---------lroll Checking--------
                    $sql = "SELECT * from users WHERE rollno ='$lroll'";
                    $result = mysqli_query($conn,$sql);
                    $lroll_check= mysqli_num_rows($result);
		            $dtls = mysqli_fetch_array($result);
//---------category Checking--------
                   /* $sql = "SELECT * from users WHERE category ='$cat'";
                    $result = mysqli_query($conn,$sql);
                    $cat_check= mysqli_num_rows($result);
		            $dtls = mysqli_fetch_array($result);*/					
                    
	             //-----------Combination-------------
	                $sql1 = "SELECT * from users WHERE rollno ='$lroll' AND password = '$pass_check' " ;
                    $result1 = mysqli_query($conn,$sql);
                    $verify = mysqli_num_rows($result);
					
					
	
	             //---------Login-----
	
	
	                $sql2 = "SELECT * from users WHERE rollno ='$lroll' AND password='$pass_check'";
	                $result2 = mysqli_query($conn,$sql2);
	                $login = mysqli_num_rows($result2);
			     //-----------Activation checking------ 
    	
	                $sql3 = "SELECT * from users WHERE rollno ='$lroll' AND active = 1 ";
	                $result3 = mysqli_query($conn,$sql3);
	                $active = mysqli_num_rows($result3);   
				  
				  
	           if(!$lroll_check){
		          echo("<script>alert('Ooops, You are not registered')</script>");
				  echo("<script>
                       location.href='login.php'; 
                      </script>");
                    
	                   }
	 
	           elseif(!$login){
		                 echo("<script>alert('Ooops !, Wrong Details..');</script>");
				         echo("<script>location.href='login.php';</script>");
                    
	                      }else if(!$active){
                                  echo "<script>alert('Please activate your account. Check your inbox of your email.')</script>";
                                  echo "<script>location.href='login.php'</script>";
                                 
                                 }
                          else{
                          
			     echo "<script>alert('Nice, You are being redirected to your login-page...')</script>";
						  
                            //-----Getting Data------------
                             session_start();
                           if ($_SESSION['roll'] = $_POST['lroll'] && $cat="Employer"){  
			    echo "<script>location.href='dashboard.php'</script>";    }
				else
				{
				echo "<script>location.href='worker.php'</script>";  
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
        <title>Login</title>
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
					</ul>
				</div>
			</div>
		</nav>
		
          <!-- Login -->
        <div class="block-3-container section-container register-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2-box block-2-left" >
				               <div class="panel panel-login">
				               	 <div class="panel-heading">
				               		<div class="row">
				               			<div class="col-xs-6" style="width:100%">
				               				<a href="#" class="active" id="login-form-link">Login</a>
				               			</div>
				               		</div>
				               		<hr>
				               	</div>
				               	<div class="panel-body" style="width:100%">
				               		<div class="row">
				               			<div class="col-lg-12">
                                  
								  <!-- Login -->
								  
								  <form name="log" id="login-form" action="login.php" method="post" role="form" style="display: block;" >
									<div class="form-group">
										<input type="text" name="lroll" id="username" tabindex="1" class="form-control" placeholder="Identity Number" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="lpass" id="password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<table> <tr rowspan=2><td >Category:&nbsp;&nbsp;&nbsp;&nbsp;</td>
									 <td cellspacing="10" align="center">
   										<input type="radio" name="cat" value="Employer" >Employer &nbsp;&nbsp;&nbsp;&nbsp;</td><td colspan="2" align="center">
                                <input type="radio" name="cat" value="Worker">Worker</td> </tr></table>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="reset.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
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
