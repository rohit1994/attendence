<?php if(isset($_POST['submit'])) { 

echo " form submiited";
print_r($_REQUEST);

 } ?>
	<script>
	function validate()
	{ 
		var name=document.forms["register"]["name"].value;
		var dob=document.forms["register"]["dob"].value;
		var email=document.forms["register"]["email"].value;
		var mobile=document.forms["register"]["mobile"].value;
		var gender=document.forms["register"]["gender"].value;
		var address=document.forms["register"]["address"].value;
		var doj=document.forms["register"]["doj"].value;
		var qualification=document.forms["register"]["qualification"].value;
		var username=document.forms["register"]["username"].value;
		var pwd=document.forms["register"]["password"].value;
		var cpwd=document.forms["register"]["cpwd"].value;
		
		
		if(name=="")
		{
			alert("plse entr the name");
			document.forms["register"]["name"].focus();
			return false;
		}	
		else if(email=="")
		{
			alert("plse entr the mail id");
			document.forms["register"]["email"].focus();
			return false;
		}	
	    
		else if(pwd=="")
		{
			alert("plse entr the password");
			document.forms["register"]["pwd"].focus();
			return false;
		}	
		else if(cpwd=="")
		{
			alert("plse confirm the password");
			document.forms["register"]["cpwd"].focus();
			return false;
		}	
		
		else if(pwd.length<6)
		{
			alert("password min 6 value");
			document.forms["register"]["pwd"].focus();
			return false;
		}	
		else if(pwd==cpwd)
			{
				return true;
			}
		else{
			alert("incorrect password");
			return false;
		    }
		alert("checkpoint1");
			return true;
	}
	</script>
<center>
	<form action="submit.php" method="POST" name="register" onsubmit="return validate()">
	<h1> TEACHER REGISTRATION </h1>
		Name:<input type="text" name="name" placeholder="name"></input><br><br>
		Dob:<input type="date" name="dob" placeholder="dob"></input><br><br>
		Email:<input type="text"  name="email"placeholder="email"></input><br><br>
		Mob:<input type="text"  name="mobile"placeholder="mobile"></input><br><br>
		Gender: <input type="radio"  name="gender" value="male" checked>male</input>
		<input type="radio"  name="gender" value="female" checked>female</input><br><br>
		Address<input type="textarea"name="address" value="address"></input><br><br>
		
		DOJ:<input type="date"  name="doj" placeholder="doj"></input><br><br>
		Qualification:<input type="text"  name="qualification"placeholder="qualification"></input><br><br>
	
		username:<input type="text"name="username" placeholder="username"></input><br><br>
		password<input type="password" name="password"  placeholder="password"></input><br><br>
		Con_pwd<input type="password" name="cpwd"  placeholder="con_password"></input><br><br>
	

		<input type="submit" value="submit"></input>
		</center>
	</form>
	
