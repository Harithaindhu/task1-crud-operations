<?php
    $name=$_GET['name'];
    $conn=new mysqli('localhost','root','','crud_php')or die("unable to connect");
    $sql_del =$conn->query("DELETE FROM users WHERE fullname='$name'");
    $conn->close();
    echo "deleted";
?>
