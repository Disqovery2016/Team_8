
    

<center><b>Login Form</b></center>
    <FORM method=post action=admin1.php>
	<center>
    <table >
        <!--?
          //  if(isset($_GET["err"]))
          //echo "<caption><font color=red>Invalid Username orPassword</font></caption>";
        ?-->
        <TR>
            <TD>User Name:</TD>
            <TD><input type=text name=txtname></TD>
        </TR>
        <TR>
            <TD>Password:</TD>
            <TD><input type=password name=txtpwd></TD>
        </TR>
        <TR>
            <TD  align=center><input type=submit name=s1 value="Login">
			<input type=reset name=s2 value="Reset"></TD>
            <TD  align=center>
			<a href="reg_emp.php" title="">Registration</a></td>
        </TR>
    </TABLE>
	</center>
   </FORM>
 
</div>
