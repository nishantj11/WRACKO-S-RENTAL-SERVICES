<?php
$connect_mysql=mysqli_connect("localhost","root","","signup");

echo("Hello");

if(!$connect_mysql)
{
    alert("Connection Failed" . mysqli_connect_error());
}

$name=$_POST['name'];
$mail=$_POST['mail'];
$password=$_POST['pwd'];
$repassword=$_POST['pwd1'];
$mobile=$_POST['mob'];
$address=$_POST['addr'];

$sql="INSERT INTO customers(name,mail,password,mobile,address) values('$name','$mail','$password','$mobile','$address');";
if(mysqli_query($connect_mysql,$sql))
{
    header("Location:LOGIN1.php");
}
else
{
    echo("Something went wrong");
}
?>