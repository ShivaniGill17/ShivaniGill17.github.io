<?php
include 'includes/header.php';
if(isset($_REQUEST['page']))
{
 $page = $_REQUEST['page'];
 if($page=="aboutus") //about us
{
   include('about_us.php'); 
}  
else if($page=="donation") //donation
{
   include('donation.php'); 
} 
else if($page=="internship") //internship
{
   include('internship.php'); 
}
else if($page=="volunteer") //volunteer
{
   include('volunteer.php'); 
} 
else if($page=="contactus") //contactus
{
   include('contact_us.php'); 
}
else if($page=="adoption")  //adoption
{
    include('adoption_pg.php');
}
else if($page=="travel")  //travelwithus
{
    include('travel.php');
}   
else if($page=="sponsor")  //sponsor
{   
        include('sponsorship.php');
}    
else if($page=="donation-payment") 
{
    include('donation-payment.php');
} 
else if($page=="donation-stuff")  //sponsor
{
    include('donation-stuff.php');
}    
}
else
{
    include('home.php'); 
}
include 'includes/footer.php'; ?>