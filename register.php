<?php
$server=["localhost"];
$username=$_POST["username"];
$email=$_POST["email"];


$con=mysqli_connect("localhost","root","","energy");
$sql="INSERT INTO register(Username,Email) VALUES('$username','$email')";
if($con){
   mysqli_query($con,$sql);
}
else{
    echo "Registeration Fail.....!!";
}
?>