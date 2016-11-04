<?
  
    //include_once"header.php";
	?>
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
            <TD>No.of Days:</TD>
            <TD><input type=text name=txtnoday></TD>
        </TR>
		<TR>
            <TD>No.of workers:</TD>
            <TD><input type=text name=txtworker></TD>
        </TR>
        <TR>
            <TD  align=center><input type=submit name=s1 value="submit">
			<input type=reset name=s2 value="Reset"></TD>
            
        </TR>
    </TABLE>
	</center>
   </FORM>
 
   
    <?
	//include_once"footer.php";
?>