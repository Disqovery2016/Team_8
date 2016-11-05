function login(){
	   
	   //--------LOGIN-------------   
	 var lroll=document.log.lroll.value;
	 var lpass=document.log.lpass.value;
	 
	 
	    if(lroll==""){
		  alert("Enter Your University RollNo. ");
          document.log.lroll.value="";
	  	  document.log.lroll.focus();
      	  return false;
	    }
	        
		
	 if(lpass==""){
		 alert("Enter Your Password");
		 document.log.lpass.value="";
		 document.log.lpass.focus();
		 return false;
	 }
	 
}