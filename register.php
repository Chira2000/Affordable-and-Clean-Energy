<?php 
 $Username=$_POST['uname'];
 $Email=$_POST['mail'];

 $conn = new mysqli('127.0.0.1','root','12345','energy');
 if($conn->connect_error){
     die('Connection Failed   :'.$conn->connect_error);
 }
else{
    $stmt = $conn->prepare("insert into register(Username, Email) values(?,?)");
    $stmt->bind_param("ss",$Username, $Email);
    $stmt->execute();
    echo "Registration Successfull...!!";
    $stmt->close();
    $conn->close();
}
?>
