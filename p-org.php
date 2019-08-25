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
include 'database_conn.php';



$name=$_POST["name"];
$email=$_POST["email"];
$phno=$_POST["phno"];
$i_name=$_POST["name1"];
$i_phno=$_POST["phno1"];
$payment=$_POST["pay"];
$loc=$_POST["loc"];
$city=$_POST["city"];
$state=$_POST["state"];
$cntry=$_POST["cntry"];
$dis=$_POST["dis"];


$sql="INSERT INTO online_organisation(name_of_organisation,email_of_organisation,phno_of_organisation,name_of_incharge,phno_of_incharge,area,city,district,state,country,payment) VALUES('$name','$email','$phno','$i_name','$i_phno','$loc','$city','$dis','$state','$cntry','$payment')";


if ($con->query($sql)===true)
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

    <p class="lines">YOU CAN NOW CLOSE THE WINDOW</p>
    
<?php 
}
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