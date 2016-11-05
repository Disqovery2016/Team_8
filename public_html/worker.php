<?php include'db/conn.php';

if(!isset($_SESSION['roll'])){
    header('Location:login.php');

}  ?>

<!DOCTYPE html>
<html lang="en">
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>
<?php    
  require 'includes/header.php'; 
?>

    <body>
		<?php include 'includes/top_menu.php'?>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="scroll-link" href="#top-content">Home</a></li>
						<li><a class="scroll-link" href="profile">Profile</a></li>
						<li><a class="scroll-link" onclick="location.href='logout.php'">logout</a></li>
						<li><a class="scroll-link" href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
		

		
		
		
		<div class="block-3-container section-container profile-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-3 section-description wow fadeIn">
	                    <h2>Your Profile</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
						<div class="col-sm-6 block-2-box block-2-left wow fadeInLeft">
                                                      <?php include 'includes/profile.php' ?>
                                                </div>
                                               
	            	</div>
	                </div>

                                             <center><b>Hire Labor</b></center>
       <FORM method=post action=hire.php>
	<center>
    <table >
       
        <TR>
            <TD>Profession:</TD>
            <TD><select name="Profession">
  <option value="Select">Select...</option>
  <option value="Agricultural Labor">Agricultural Labor</option>
  <option value="Carpenter">Carpenter</option>
  <option value="Artisan">Artisan</option>
  <option value="Tailor">Tailor</option>
  <option value="House maid">House maid</option>
  <option value="Tailor">Tailor</option>
</select></TD>
        </TR>
        <TR>
            <TD>Will you go for far distance:</TD>
            <TD><input type="radio" name="cat" value="yes">Yes
   <input type="radio" name="cat" value="no">No</TD>
        </TR>
        <TR>
            <TD  align=center><input type=submit name=s1 value="Apply">
			<input type=reset name=s2 value="Reset"></TD>
            
        </TR>
    </TABLE>
	</center>
   </FORM>
	            		

	            </div>
	            
	        </div>
        </div>
		


	