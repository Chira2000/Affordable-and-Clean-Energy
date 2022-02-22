<?php
$server="localhost";
$username=$_POST["username"];
$email=$_POST["email"];
$mobile=$_POST["number"];
$source=$_POST["energy"];
$purpose=$_POST["textarea"];


$con=mysqli_connect("localhost","root","","energy");
$sql="INSERT INTO survey(Username,Email,Mobile,Source,Purpose) VALUES('$username','$email','$mobile','$source','$purpose')";
if($con){
    
    mysqli_query($con,$sql);
}
else{
    echo "Error.....!!!";
}

?>