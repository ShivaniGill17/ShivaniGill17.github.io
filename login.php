<?php session_start();   
//database connection
$errors = array();

$db = mysqli_connect("localhost", "root", "", "login_web");

if (isset($_POST['login_user'])) {
$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);
if ((empty($username)) && (empty($password))) {
array_push($errors, "Username & Password is required*");
}
//if (empty($password)) {
//array_push($errors, "Password is required");
//}
if (count($errors) == 0) {
$password = md5($password);
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location: index.php');
}else {
array_push($errors, "Wrong username/password combination");
}
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <title>Vision | Login</title>
 <!-- Bootstrap core CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
<!-- css-->

 <link href="css/styling.css" rel="stylesheet">
 
<!-- ************* google fonts****************-->
 
 <link href="https://fonts.googleapis.com/css?family=Sree+Krushnadevaraya" rel="stylesheet">

 
 
</head>

<body class="login-bdy">
 <div class="container login-contn">
  
  <div class="row">
   
    <div class="col-md-4 col-sm-12 col-xs-12"></div>
              
     <div class="col-md-4 col-sm-12 col-xs-12 login_content"> 
             
     <form method="post" action="login.php" class="form-container">
              <h1>Login Form</h1>
             
          <?php include('errors.php'); ?>
          
         <div class="form-group input-field">
           <label for="exampleInputEmail1">Username</label>
           <input class="form-control"  type="text" name="username">
         </div>
         <div class="form-group input-field">
           <label for="exampleInputPassword1">Password</label>
           <input class="form-control"  type="password" name="password">
         </div>
     <button type="submit" class="btn btn-login btn-block" name="login_user">Login</button>
       
       <div class="text-center">
           <h5>OR</h5>
         <a class="rgstr-text" href="register_acc.php">Register an Account</a>
         <br>
       <a class="frgt_psd" href="forgot_psd.php">Forgot Password?</a>
       </div>
       
    </form>
       
       
       
     </div>
     
     <div class="col-md-4 col-sm-12 col-xs-12"></div>
   
   </div>
 </div>
 <!-- Bootstrap core JavaScript-->
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- Core plugin JavaScript-->
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>