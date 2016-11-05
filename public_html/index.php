<!DOCTYPE html>

<html lang="en">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Infinity Sort Solutions</title>
<?php    
  require 'includes/header.php'; 
?>

    <body>
		<?php include 'includes/top_menu.php'?>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="scroll-link" href="#top-content">Home</a></li>
						<li><a class="scroll-link" href="#what-we-do">What We Do?</a></li>
						<li><a class="scroll-link" href="#about">About</a></li>
						<li><a class="scroll-link" href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
        <!-- Page title -->
        <div class="page-title top-content">
            <div class="page-title-text wow fadeInUp">
            	<h1></h1>
            	<p><br>Systemization of the problems faced by Unorganized sector workers digitally !</p>
            	<div class="page-title-bottom-link">
            		<a class="big-link-1 btn scroll-link" onclick="location.href='reg.php'">Register Now</a>
            		<a class="big-link-2 btn scroll-link" onclick="location.href='login.php'"><?php if(isset($_SESSION['roll'])){echo "Logout";}else{echo "Login";} ?></a><br>
		            <br><a style="color:lightblue" href="reset.php">Forgot Password?</a>
            	</div>
            </div>
        </div>
	
		
		 <!-- What we do -->
        <div class="block-3-container section-container what-we-do-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-3 section-description wow fadeIn">
	                    <h2>What we do ?</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>We route your job to you.</p>
						<div class="col-sm-6 block-2-box block-2-left wow fadeInLeft">

	            		<ul>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Collect your information.
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Register on the portal.
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Wait for the match of your skill set 
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Decide on the final agreement/offer.
	            			</li>
							<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Confirm your acceptance on the server.
	            			</li>
	            		</ul>
	            	</div>
	                </div>
	            </div>
	            
	        </div>
        </div>

        

		
      
        <!-- About us -->
        <div class="about-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    
	                </div>
	            </div>
	        </div>
        </div>
        
		
      <!-- Block 2 (team member) -->
        <div class="block-2-container section-container about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left block-2-media wow fadeInLeft">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/2.png" alt="" data-at2x="assets/img/about/1.png">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            	<div class="col-sm-8 block-2-box block-2-right wow fadeInUp">
	            		<h3>Infinity Sort Solutions
	            		<p>Developed at TCS Thane, Mumbai campus.
	            		</p>
	            		<h3>Follow Us:</h3>
	            		<div class="about-social">
		                	<a href="https://www.facebook.com/DigitalImpactSq"><i class="fa fa-facebook"></i></a>
		                	<a href="#"><i class="fa fa-dribbble"></i></a>
		                    <a href=https://www.twitter.com/DigitalImpactSq"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            </div>
	        </div>
        </div>

        <?php include 'includes/contact_us.php'; include 'includes/footer.php' ?>
