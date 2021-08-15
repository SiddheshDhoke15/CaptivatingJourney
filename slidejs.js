/*
function validateform(){  
var name=document.myform.username.value;  
var password=document.myform.password.value;  
  
if (name=="")
{  
  alert("Name can't be blank");  
  return false;  
}
else if(password.length<6)
{  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
alert("Login successful");
} 
function matchform(){  
if( document.mform.fullname.value == "" ) {
            alert( "Please provide your name!" );
            document.mform.fullname.focus() ;
            return false;
         }


         if( document.mform.textemail.value == "" ) {
            alert( "Please provide your Email in abc@gmail.com format" );
            document.mform.textemail.focus() ;
            return false;
         }
if (document.mform.pwd1.value == "") {
    alert( "Please provide your password!" );
            document.mform.pwd1.focus() ;
    return false;
  }
else if(document.mform.pwd1.value.length<6 )
{  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
if (document.mform.pwd1.value != document.mform.pwd2.value) {
    alert( "Password doesnt match!" );
            document.mform.pwd2.focus() ;
    return false;
  }
alert("Sign Up successful");
return( true );

      }

function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mform.textemail.value))
  {
    return (true)
  }
    alert("Invalid email address! \nFormat:abc@gmail.com")
    return (false)
}

*/

document.querySelector('.img-btn').addEventListener('click', function()
	{
		document.querySelector('.cont').classList.toggle('s-signup')
	}
);
