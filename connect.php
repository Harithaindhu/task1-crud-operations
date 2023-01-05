<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<table class="table w-75 m-auto justify-content-center">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
  <?php
$name=$_POST['fname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','crud_php')or die("unable to connect");
$sql =$conn->query(" INSERT INTO users (fullname, email, username,password1)
VALUES ('$name', '$email','$username','$password')");
$data="SELECT * FROM `users`";
$details=$conn->query($data);
if($details){
    while($row=$details->fetch_assoc()){
        $name=$row['fullname'];
        $email=$row['email'];
        $username=$row['username'];
        $password=$row['password1'];
        echo '  <tr>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$username.'</td>
        <td>'.$password.'</td>
        <td><a class="btn btn-danger" href="del.php?name='.$name.'" value="$name">delete</a></td>
        <td><a class="btn btn-primary" href="update.php?name='.$name.'" value="$name">update</a></td>
        </tr>';

    }
}


$conn-> close();
?>


</table>
