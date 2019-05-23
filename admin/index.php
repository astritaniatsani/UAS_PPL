<?php
session_start();
include('include/config.php');
if(isset($_POST['login']))
{
  $email=$_POST['username'];
  $password=md5($_POST['password']);
  $sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':email', $email, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    $_SESSION['alogin']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'dashbord.php'; </script>";
  } else{

    echo "<script>alert('Invalid Details');</script>";

  }

}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="login/img/cat-profile.png">
  <link rel="shortcut icon" href="cat-profile.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="login/css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>E - SPORT</title>

</head>
<body>
  <section class="material-half-bg">
    <div class="cover">
    </div>

  </section>
  <section class="login-content">
    <div class="login-box">

      <form class="login-form" method="post">
        <a class="brand" href="../index.php">
          <div class="thumbnail"><center><img src="login/img/cat-profile.png" height="100"/></center></div></a><p/>
          <div class="form-group">
            <input class="form-control"  name="username" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <input class="form-control" type="password"  name="password" placeholder="Password">
          </div><br/>
          <div class="form-group btn-container">
            <button type="submit" name="login" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>

      </div>
    </section>


    <!-- Essential javascripts for application to work-->
    <script src="login/js/jquery-3.2.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="login/js/plugins/pace.min.js"></script>
    

    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
  </html>