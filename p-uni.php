<html>
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
     <STYLE>
        
        p
        {
           margin-top: 20%; 
            text-align: center;
            font-size: 30px;
            font-weight: 100;
        }
    </STYLE>
</html>
<?php 
$user='root';
$pass='';
$dbu='login_web';
$conn=new mysqli('localhost',$user,$pass,$dbu);



$name=$_POST["name"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$c_name=$_POST["name1"];
$c_email=$_POST["email1"];
$c_phno=$_POST["phno1"];
loc=$_POST["loc"];
$city=$_POST["city"];
$state=$_POST["state"];
$cntry=$_POST["cntry"];
$dis=$_POST["dis"];
$payment=$_POST["pay"];


$sql="INSERT INTO online_university
(name_of_university,email_of_university,phno_of_university,name_of_college,email_of_college,phno_of_college,area,city,district,state,country,payment) VALUES('$name','$email','$phno','$c_name','$c_email','$c_phno','$loc','$city','$dis','$state','$cntry','$payment')";


if ($conn->query($sql)===true)
{ ?>

<script>
swal("FORM SUBMITTED", "thank you for the contribution", "success",{ buttons :
    {
        c:{
    text: "close",
    value: "catch",
    },
    },
     });
    
     
     
     //for blocking back button.
    history.pushState(null, null, location.href);
     window.onpopstate=function()
     {
         history.go(1);
     }
    
   </script>

    <p>YOU CAN NOW CLOSE THE WINDOW</p>

    
<?php  }
else
{ ?>

   <script type="text/javascript">
       swal("FORM NOT SUBMITTED", "","warning",{ buttons :
    {
        c:{
    text: "close",
    value: "catch",
    },
    },
     
});
    

       //for blocking back button.
    history.pushState(null, null, location.href);
     window.onpopstate=function()
     {
         history.go(1);
     }
    
   
</script>
<?php }



?>