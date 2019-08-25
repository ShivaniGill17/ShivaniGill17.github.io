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
             
     <form method="post" action="" class="form-container" onsubmit="return verify()">
              <h1>Login Form</h1>
             
          
          
         <div class="form-group input-field">
           <label for="exampleInputEmail1">Username</label>
           <input class="form-control"  type="text" name="username">
         </div>
         
         <div class="form-group input-field">
           <label for="exampleInputPassword1">New Password</label>
           <input class="form-control"  type="password" id="new" name="new">
         </div>
         
          <div class="form-group input-field">
           <label for="exampleInputPassword1">Confirm Password</label>
           <input class="form-control"  type="password" id="new2" name="confirmpassword">
              <span id="a"></span>
         </div>
         
<!--
         <div class="form-group">
           <div class="form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Remember Password</label>
           </div>
         </div>
-->
         <button type="submit" class="btn btn-login btn-block" name="submit">CHANGE</button>
       
       
         
       
       
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
    
    <script>
       
        function verify()
        {
    var qw=0;
    var n1=document.getElementById("new").value;
    var n2=document.getElementById("new2").value;
        
        if(n1 != n2)
            {
                document.getElementById("a").innerHTML="password Doesn't Match";
                document.getElementById("new").style.border="2px solid red";
                document.getElementById("new2").style.border="2px solid red";
                qw=1;
            }
        else{
            document.getElementById("a").innerHTML="";
        }
        
        if(qw!=0)
            {
                return false;
            }
        return true;
        
        }
    </script>
</html>

<?php
 if(isset($_POST['submit']))
 {
     
    $user=$_POST["username"];
$conn=new mysqli('localhost','root','','login_web');

$sql ="select * from users where username='$user'";
$data=$conn->query($sql);

if($data -> num_rows >0)
{
    $password=$_POST["new"];
    $password = md5($password);
    $sql1= "update users set password='$password' where username='$user'";
    $data1=$conn->query($sql1);
    if($data1 === true)
    {
        echo "changed";
        header('location: login.php');
    }else
    {
        echo "cant changed";
    }
    
}
else
{
    echo "invalid username";
}
 }

?>