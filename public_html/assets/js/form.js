$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});


function validate(){
	   
	   //--------REGISTRATION-------------   
	 var n=document.reg.name.value;
	 var email=document.reg.email.value;
     var mob=document.reg.mobile.value;
	 var roll=document.reg.roll.value;
	 var pass=document.reg.pass.value;
	 var repass=document.reg.repass.value;
	 var mobtest=/^[7-9]{1}[0-9]{9}$/;
	 var emailtest=/^([a-zA-Z0-9+\.{1}])+\@(([a-zA-Z0-9])+\.)+[a-zA-Z0-9]{2,3}$/;
	 var ntest = /^ +[a-zA-Z]+$/;
	 
	 if(n==""){
		 alert("Enter your Name");
		 document.reg.name.focus();
		 return false;
	    }
		
		if (n!="" &&  n.length< 3) 
         {
            alert('Name is small');
            return false;
			
         }
         
		
        if (n!="" &&  (n.search(/[\!\@\#\$\%\^\&\*\-\=\+\(\)\/\.\,\<\>\?\"\:\;\|\\{\}\[\]\-\_0-9]/)!=-1 || n.match(ntest))) 
         {
            alert("Your Name is not valid");
            document.reg.name.focus();
	        return false;	
         }	

		 
         if(email==""){
		 alert("Enter Email..");
		 document.reg.email.focus();
		 return false;
	     }
	 
	     if(email!="" && (!email.match(emailtest))){
		 alert("Please enter correct email ID");
		 document.reg.email.focus();
		 return false;
		 
	    }

	    if(mob==""){
		 alert("Enter 10 digit Mobile Number");
		 document.reg.mobile.focus();
         return false;	
	     }
	 
	    if(mob!="" && (isNaN(mob)) || (!mob.match(mobtest))){
	     alert("Enter Correct Mobile number");
		 document.reg.mobile.focus(); 
		 return false;	
	    }
	   
	    if(roll==""){
		  alert("Enter Your University RollNo. ");
          document.reg.roll.value="";
	  	  document.reg.roll.focus();
	  	  
		  return false;
	    }
	 
        if(roll!="" && roll.length<8 || (isNaN(roll))){
		 alert("Your RollNo. is not correct");
		 document.reg.roll.focus();
		 return false;
	    }
         
		
	 if(pass==""){
		 alert("Enter Your Password");
		 document.reg.repass.value="";
		 document.reg.pass.focus();
		 return false;
	 }
	 
 
	 if(pass!="" && pass.length<3){
		 alert("Your Password is very small");
		 document.reg.pass.focus();
		 return false;
	 }
	 
	 if(pass !="" && pass.search(/[a-zA-Z]/)==-1){
		alert("Your Password doesn't have any letter.");
		 document.reg.pass.value="";
		 document.reg.repass.value="";
		 document.reg.pass.focus();
		 return false;
		 
	 }
	 
	 if(pass !="" && pass.search(/[0-9]/)==-1){
		 alert("Your Password doesn't have any Number Digit.");
		 document.reg.pass.value="";
		 document.reg.repass.value="";
		 document.reg.pass.focus();
		 return false;
	 }
	 
        if(repass==""){
	     alert("Re-enter your Password..");
		 document.reg.repass.focus();
         return(false);	
	 }
	 
	 if(repass!="" && repass!=pass){
	        alert("Password doesn't match");
		 document.reg.repass.value="";
		 document.reg.repass.focus();
         return(false);	
	 }

}
