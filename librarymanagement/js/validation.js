<script>
        // Validate username
		function validateuid(x)
		{
            var userid=document.getElementById(x);
			  var uu=userid.value;
			  var chrlen=uu.length;
			  if(chrlen==0)  
			  {
				 document.getElementById(x).style.background ='#FF9B9B';
				 document.getElementById(x + 'error').style.display = "block";
				 document.getElementById(x + 'valid').style.display = "none";
			   return false;
				}
				else{
				document.getElementById(x).style.background ='#ccffcc';
                document.getElementById(x + 'valid').style.display = "block";
				 document.getElementById(x + 'error').style.display = "none";
                return true;
				}
        }
		
		 // Validate email
        function validateEmail(email){
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(re.test(email)){
                document.getElementById('email').style.background ='#ccffcc';
                document.getElementById('emailerror').style.display = "none";
				document.getElementById('emailvalid').style.display = "block";
                return true;
            }
			else{
                document.getElementById('email').style.background ='#FF9B9B';
				document.getElementById('emailvalid').style.display = "none";
				document.getElementById('emailerror').style.display = "block";
                return false;
            }
        }
		
		// Validate password
		function validatepassword(pass){
            var passw=document.getElementById('pass');
			  var wordsss=passw.value;
			  var chr=wordsss.length;
			  if(chr==0 || chr < 4)  {
				document.getElementById('pass').style.background ='#FF9B9B';
				 document.getElementById('passError').style.display = "block";
			   return false;
				}
				else{
				document.getElementById('pass').style.background ='#ccffcc';
                document.getElementById('passError').style.display = "none";
                return true;
				}
        }
		// Validate re-enter password
		function validaterepassword(repassword){
            var pawd1=document.getElementById('pass');
			  var pawdcon2=document.getElementById('repassword');
			  
			 if(pawdcon2.value.length==0)  {
				document.getElementById('repassword').style.background ='#FF9B9B';
			   return false;
				}
			   
			 else if(pawd1.value!=pawdcon2.value)
			  {
				document.getElementById('repassword').style.background ='#FF9B9B';
			   return false;
			  }
			 else{
				document.getElementById('repassword').style.background ='#ccffcc';
                document.getElementById('repasswordError').style.display = "none";
                return true;
			 }
        }
        
		function validateForm(){
            // Set error catcher
            var error = 0;
            // Check uid
            if(!validateuid('id'))
			{
                document.getElementById('iderror').style.display = "block";
                error++;
            }
			
            // Validate email
            if(!validateEmail(document.getElementById('email').value)){
                document.getElementById('emailError').style.display = "block";
                error++;
            }
           
			// Check user
            if(!validateuid('stdname'))
			{
                document.getElementById('stdnameerror').style.display = "block";
                error++;
            }
			// Check password
            if(!validatepassword('pass')){
                document.getElementById('passError').style.display = "block";
                error++;
            }
			// Check re-enter password
            if(!validaterepassword('repassword'))
			{
                document.getElementById('repasswordError').style.display = "block";
                error++;
            }
           
			// Don't submit form if there are errors
            if(error > 0){
                return false;
            }
			
        }       
		
        </script>
        
        
        