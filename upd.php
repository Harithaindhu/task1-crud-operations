<?php
$name=$_POST['fname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','crud_php')or die("unable to connect");
$sql =$conn->query("UPDATE users SET fullname='$name',email='$email',password1=$password,username='$username' WHERE fullname='$name'");
if($sql){
    echo 'success';
}
$conn-> close();
?>
