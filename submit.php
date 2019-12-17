<?php
/*echo "<h1>Welcome  ".$name=$_POST['name']."</h1><br>"; */
print_r($_REQUEST);

/*echo "<h1> welcome  $name </h1>";*/
$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$doj=$_POST['doj'];
$qualification=$_POST['qualification'];
$username=$_POST['username'];
$password=$_POST['password'];

$servername="localhost";
$username="root";
$password="";
$dbname="attendencemanagement";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection error".$conn->connect_error);
}
else
{
	echo "connected";
}
if (isset($_POST['submit']))
{
	
echo "WELCOME $name";
$sql="insert into users(name,dob,email,mobile,gender,address,doj,qualification,username,password)values('$name','$dob',$email','$mobile','$gender','$address','$doj','$qualification','$username','$password')";


$s=$conn->query($sql);
}
else{
	echo"error";
}



?>



<br><br><a href="index.php">Back to home</a>


