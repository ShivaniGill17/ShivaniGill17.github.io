<?php 

$servername="localhost";
$user="root";
$password="";


$db="login_web";

$con=new mysqli($servername, $user, $password, $db);

if($con->connect_error)
{
    die("connection failed");
}

//$u=$_POST["name"];
//$e=$_POST["dob"];
//
//
//$sql="INSERT INTO user(username, dob) VALUES ('$u', '$e')";
//
//
//if($con->query($sql) === true)
//{
//    echo"intserted";
//}
//else{
//    echo"not inserted";
//}
//$con->close();

?>