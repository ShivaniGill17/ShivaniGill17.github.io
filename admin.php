<?php

include("includes/header.php")

?>

<?php 

$page = $_REQUEST['page'];
if($page=="adddetails")
{
   include 'add_details.php'; 
}

?>


<?php

include("includes/footer.php")

?>