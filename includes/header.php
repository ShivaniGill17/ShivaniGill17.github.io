<?php
session_start();
if(isset($_REQUEST['page']))
{
    if($_REQUEST['page']=="sponsor" || $_REQUEST['page']=="donation-payment" || $_REQUEST['page']=="donation-stuff") {
        if(!isset($_SESSION['username'])){
                header('location: login.php');
        }  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
    
    <link rel="stylesheet" href="css/custom.css">
    
    <link rel="stylesheet" href="css/styling.css">
    
    <script src="/js/slider.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    
    
<!--    ************* font-awsome**********-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--    ************* font-awsome end**********-->

<!--*************** google fonts *************-->

   <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
   
   
   <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet">

<!--*************** google fonts end*************-->
   
<!--**************** font animate ***************   -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">


<!--**************** font animate ends ***************   -->
<!--***********************************-->

<script type="text/javascript">
    
    $('.carousel').carousel({
  interval: 4000
})
    
    </script>
    

	<title>Vision</title>

	<!--  -->

	<style>

	</style>

</head>

<body>   
   
    
   <!-- Navigation -->
<header class="top-nav">
<div class="example3">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="images/logo-vision.png" alt="Vision">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Home</a></li>
          
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Parenting<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="index.php?page=adoption">Adoption</a></li>
              <li><a href="index.php?page=sponsor">Sponsors</a></li>
            </ul>
          </li>
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Initiative<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="index.php?page=internship">Internship</a></li>
              <li><a href="index.php?page=volunteer">Volunteers</a></li>
              
              
            </ul>
          </li>
          <li><a href="index.php?page=donation">Donation</a></li>
          <li><a href="index.php?page=travel">Travel with us</a></li>
          <li><a href="index.php?page=aboutus">About us </a></li>
          <li><a href="index.php?page=contactus">Contact us</a></li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user-circle-o" aria-hidden="true"></i> 
            
<?php

if(isset($_SESSION['username']))
{
   echo $username = $_SESSION['username'];
}               
?>
            <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
<?php 
if(!isset($_SESSION['username']))
{
      echo "<li><a href='login.php'>Login</a></li>";
}      
if(isset($_SESSION['username']))
{
   echo "<li><a href='logout.php'>Logout</a></li>";
}
if(!isset($_SESSION['username']))
{
      echo "<li><a href='register_acc.php'>Signup</a></li>";
}      
?>

              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
</header>