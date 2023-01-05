<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <title>Document</title>
</head>
<body>
<?php
  $name=$_GET['name'];
  $conn=new mysqli('localhost','root','','crud_php')or die("unable to connect");
  $data="SELECT * FROM `users` WHERE fullname='$name'";
  $details=$conn->query($data);
  if($details){
      while($row=$details->fetch_assoc()){
          $name=$row['fullname'];
          $email=$row['email'];
          $username=$row['username'];
          $password=$row['password1'];
        }
    }
    $conn->close();
    ?>
<div class="card border-0 mt-5 a">
<article class="card-body mx-auto border border-1 bg-light mt-5" style="width: 400px;box-shadow: 3px 3px 3px rgb(121, 121, 134);">
	<h4 class="card-title mb-3 text-center ">UPDATE HERE</h4>
<div style="display: flex;justify-content: center;">
  <form action="upd.php" method="POST" style="width:300px;">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="fname" value="<?php echo $name ?>" class="form-control" placeholder="Full name" type="text" >
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" value="<?php echo $email ?>" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->
  <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input value="<?php echo $username ?>" name="username" class="form-control" placeholder="user_name" type="text">
    </div><!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input value="<?php echo $password ?>" class="form-control" placeholder="Create password" type="password" name="password">
    </div> <!-- form-group// -->                                     
    <div class="form-group text-center">
    <button type="submit" class="btn btn-primary"> Update Account  </button>    </div>
 <!-- form-group// -->      
</form>
</div>
</article>
</div> <!-- card.// -->
</body>
</html>