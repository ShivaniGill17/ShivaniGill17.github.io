<?php
      session_start();
    
//database connection

$errors = array();

$db = mysqli_connect("localhost", "root", "", "login_web");

if (isset($_POST['reg_user'])) {
// receive all input values from the form
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
if ($password_1 != $password_2) {
array_push($errors, "The two passwords do not match");
}
// first check the database to make sure
// a user does not already exist with the same username and/or email
$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
if ($user['username'] === $username) {
array_push($errors, "Username already exists");
}
if ($user['email'] === $email) {
array_push($errors, "email already exists");
}
}
// Finally, register user if there are no errors in the form
if (count($errors) == 0) {
$password = md5($password_1);//encrypt the password before saving in the database
echo $password ;
$query = "INSERT INTO users(username, email, password)
VALUES('$username', '$email', '$password')";
mysqli_query($db, $query);
$_SESSION['username'] = $username;
$_SESSION['success'] = "You are now logged in";
header('location: login.php');
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

 <link href="css/styling.css" rel="stylesheet">
 
 <link href="https://fonts.googleapis.com/css?family=Sree+Krushnadevaraya" rel="stylesheet">

 
 
</head>
<body class="login-bdy">
 <div class="container login-contn">
  
  <div class="row">
   
    
     <div class="col-md-4 col-sm-12 col-xs-12"></div>
              
     <div class="col-md-4 col-sm-12 col-xs-12 login_content"> 
             
     <form method="post" action="register_acc.php" class="form-container">
              <h1>Register an Account</h1>
             
          <?php include('errors.php'); ?>
          
         <div class="form-group input-field">
            <label for="exampleInputName">Username</label>
               <input class="form-control" id="exampleInputName" type="text"   name="username"  placeholder="Name">
           </div>
         
         <div class="form-group input-field">
           <label for="exampleInputEmail1">Email address</label>
           <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email"  placeholder="Email">
         </div>
         
         <div class="form-group input-field">
              <label for="exampleInputPassword1">Password</label>
               <input class="form-control" id="exampleInputPassword1" type="password" name="password_1" placeholder="Password">
             
           </div> 
           
           <div class="form-group input-field">
               <label for="exampleInputPassword1">Confirm Password</label>
               <input class="form-control" id="exampleInputPassword2" type="password" name="password_2" placeholder="Confirm Password">
           </div>
         
        <button type="submit" class="btn btn-rgstr btn-block" name="reg_user">Register</button>
          
          <div class="text-center">
         <a class="login_text" href="login.php">Login Page</a>
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







