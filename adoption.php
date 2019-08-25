

<?php
      session_start();

?>




<?php
if(!isset($_SESSION['username'])){
    header('location: login.php');
}



?>






<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles_stuff.css">
	
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <link href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/swanky-purse/jquery-ui.css" rel="stylesheet">

	<title>Vision</title>

	<!--  -->

	<style>

	</style>

</head>

<body class="dnte_form">

	 <!--FORM FOR INDIVIDUAL-->
        <div class="container contn" id="phase1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <form class="form-container" id="form1" method="post" action="adopt-info.php">
                        <div class="form-group">
                                <label for="name">NAME</label>
                                <input type="text" class="form-control" id="name" name="uname" placeholder="ENTER YOUR NAME">
								<span id="a"></span>
                        </div>
                        <div class="form-group">
                                <label for="email">EMAIL ID</label>
                                <input type="email" class="form-control" id="email" name="rpass" placeholder="ENTER EMAIL ADDRESS">
								<span id="b"></span>
                        </div>
                        <div class="form-group">
                                <label for="phno1">PHONE NUMBER</label>
                                <input type="text" class="form-control" id="phno" name="phno" placeholder="ENTER PHONE NUMBER">
								<span id="p"></span>
                        </div>
                        <div class="form-group">
                                <label for="dob">DATE OF BIRTH</label>
                                <input type="text" class="form-control" id="date" name="dob" placeholder="CHOOSE BIRTH DATE">
								<span id="c"></span>
                        </div>
                        <div class="form-group">
                            <label for="gender">GENDER:     
							    <input type="radio"  id="gender"  name="gender" value="Female" onclick="my(this.value)"> Female
                                <input type="radio"  id="gender" name="gender"  value="Male"  onclick="my(this.value)"> Male
                                
                                <input type="radio"  id="gender" name="gender"  value="Others" onclick="my(this.value)"> Others
								
                            </label>
                        <span id="d"></span></div>
                         <div class="form-group">
                            <label for="status">MARTIAL STATUS:  <br><select id="status" name="status"  style="width:250px;padding:5px 20px;">
                                                                        <option value="">--Select--</option>
                                                                        <option value="single">Single</option>
                                                                        <option value="married">Married</option>
                                                                        <option value="divorced">Divorced</option>
                                                                        <option value="widow">Widow</option>
                                                                </select></label> <br>
                             <span id="e"></span>
                             </div>
						
                        <div class="form-group">
                                <label for="address">ADDRESS:</label><br>
                                <label for="area">Area</label>
                                <input type="text" class="form-control" id="area" name="loc" placeholder="ENTER LOCALITY/AREA">
								<span id="f"></span><br>
                                <label for="city">City / Town</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="ENTER CITY/TOWN">
								<span id="g"></span><br>
                                <label for="district">District</label>
                                <input type="text" class="form-control" id="district" name="dis" placeholder="ENTER DISTRICT">
								<span id="h"></span><br><br>
                                <label for="state">STATE / U.T.   <br> 
                                <select id="state" name="state" style="width:250px;padding:5px 20px;">
                                                                        <option value="">--Select--</option>
                                                                        <option value="Andaman-Nicobar">Andaman and Nicobar Islands</option>
                                                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                                        <option value="Assam">Assam</option>
                                                                        <option value="Bihar">Bihar</option>
                                                                        <option value="Chandigarh">Chandigarh</option>
                                                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                                                        <option value="Dadra-Nagar">Dadra and Nagar Haveli</option>
                                                                        <option value="Daman-Diu">Daman and Diu</option>
                                                                        <option value="Delhi">Delhi</option>
                                                                        <option value="Goa">Goa</option>
                                                                        <option value="Gujarat">Gujarat</option>
                                                                        <option value="Haryana">Haryana</option>
                                                                        <option value="Himachal-Pradesh">Himachal Pradesh</option>
                                                                        <option value="j&k">Jammu and Kashmir</option>
                                                                        <option value="Jharkhand">Jharkhand</option>
                                                                        <option value="Karnataka">Karnataka</option>
                                                                        <option value="Kerala">Kerala</option>
                                                                        <option value="Lakshadweep">Lakshadweep</option>
                                                                        <option value="Madhya-Pradesh">Madhya Pradesh</option>
                                                                        <option value="Maharashtra">Maharashtra</option>
                                                                        <option value="Manipur">Manipur</option>
                                                                        <option value="Meghalaya">Meghalaya</option>
                                                                        <option value="Mizoram">Mizoram</option>
                                                                        <option value="Nagaland">Nagaland</option>
                                                                        <option value="Odisha">Odisha</option>
                                                                        <option value="Punjab">Punjab</option>
                                                                        <option value="Pondicherry">PondiRajasthancherry</option>
                                                                        <option value="Rajasthan">Rajasthan</option>
                                                                        <option value="Sikkim">Sikkim</option>
                                                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                                                        <option value="Telangana">Telangana</option>
                                                                        <option value="Tripura">Tripura</option>
                                                                        <option value="Uttar-Pradesh">Uttar Pradesh</option>
                                                                        <option value="Uttarakhand">Uttarakhand</option>
                                                                        <option value="West-Bengal">West Bengal</option>
                                                                </select></label><br><span id="j"></span><br><br>
                                <label for="country">Country</label>
                                 <input type="text" class="form-control" id="country" name="cntry" value="India" readonly>   
                        </div>
                            <div class="form-group">
                            <label for="choose">Visiting Date</label>
                            <input type="text" class="form-control" id="choose" name="choose" placeholder="DESCRIPTION">
							<span id="i"></span>
                        </div><br>
                            
                </form>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            </div>
                
        </div>
            
            
            <br>
             <div class="container contn" id="phase5" style="display:none;">
    <div class="row" class="form-container">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <p class="new">PLEASE CHECK THE DETAILS BEFORE SUBMIT.</p>
            <table class="table table-striped table-bordered">
            <tr>
                <th> Full Name </th>
                <td>   <font color='#33ccff' face="Comic Sans MS"><span id="d_name"></span></font>         </td>
            </tr>
            <tr>
                <th> Email Address </th>
                <td>     <font color='#33ccff' face="Comic Sans MS"><span id="d_email"></span></font>       </td>
            </tr>
            <tr>
                <th> Phone Number </th>
            <td>     <font color='#33ccff' face="Comic Sans MS"><span id="d_phno"></span></font>       </td>
            </tr>
            <tr>
                <th> Date Of Birth </th>
                <td>  <font color='#33ccff' face="Comic Sans MS"><span id="d_date"></span></font>          </td>
            </tr>
            <tr>
                <th> Gender </th>
                <td>   <font color='#33ccff' face="Comic Sans MS"><span id="d_gender"></span></font>         </td>
            </tr>
             <tr>
                <th> Martial Status </th>
                <th>    <font color='#33ccff' face="Comic Sans MS"><span id="d_status"></span></font>        </th>
            </tr>   
            <tr>
                <th colspan="2"> ADDRESS</th>
                
            </tr>
            <tr>
                <th> Locality </th>
                <td>   <font color='#33ccff' face="Comic Sans MS"><span id="d_area"></span></font>         </td>
            </tr>
            <tr>
                <th> City/Town </th>
                <td>    <font color='#33ccff' face="Comic Sans MS"><span id="d_city"></span></font>        </td>
            </tr>
            <tr>
                <th> District </th>
                <td>   <font color='#33ccff' face="Comic Sans MS"><span id="d_district"></span></font>         </td>
            </tr>
            <tr>
                <th> State </th>
                <td>  <font color='#33ccff' face="Comic Sans MS"><span id="d_state"></span></font>          </td>
            </tr>
            <tr>
                <th> Country </th>
                <td>     <font color='#33ccff' face="Comic Sans MS"><span id="d_country"></span></font>       </td>
            </tr>
            <tr>
                <th> Visiting Date </th>
                <td>     <font color='#33ccff' face="Comic Sans MS"><span id="d_choose"></span></font>       </td>
            </tr>
                
            </table>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>    
        </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="form_stp_btn">
    <button type="button" class="btn btn-success" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="btn btn-success btn-md" id="nextBtn" onclick="nextPrev(1)">Next</button>
 </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
         </div>   
              
				
                         
             <script src="jquery.js"></script>
                <script src="bootstrap.js"></script>
            
            
            
            <script>
			
			
			//for dates
               
                $(document).ready(function() {
          
           $("#date").datepicker({
               showAnim: 'drop',
               numberOfMonth: 1,
               dateFormat:'dd/mm/yy',
               maxDate: 0,
                
           }); 
         
        });
                
                $(document).ready(function() {
          
           $("#choose").datepicker({
               showAnim: 'drop',
               numberOfMonth: 1,
               dateFormat:'dd/mm/yy',
               minDate: 0,
               beforeShowDay: $.datepicker.noWeekends,
                
           }); 
         
        });
              
			//for animation...
			
			var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("container");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
      
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("container");
  if(!processphase1())
	  return false;
  if(n==1){
  getid("phase1").style.display="none";
  getid("phase5").style.display="block";}
  else if(n==-1){
  getid("phase1").style.display="block";
  getid("phase5").style.display="none";}
	  
  // Exit the function if any field in the current tab is invalid:
  
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("form1").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}







            function getid(x)
                {
                    return document.getElementById(x);
                }
                
                
             function getaddress() //to get address of all forms
            {
            getid("d_area").innerHTML =  getid("area").value;
            getid("d_city").innerHTML= getid("city").value;
            getid("d_district").innerHTML= getid("district").value;
            getid("d_state").innerHTML= getid("state").value;
            getid("d_country").innerHTML= getid("country").value;
            getid("d_choose").innerHTML= getid("choose").value;
            }
        
        
                function my(val)
                {
                    document.getElementById("d_gender").innerHTML = val;
                }
                
                
        function processphase1()  //display values of individuals.
        {   
            
            //for name.
		    var qw=0;  var m=/^[A-Za-z ]+$/;
			if(getid("name").value=="")
			{ 
		        document.getElementById("a").innerHTML="<font color='#ff8566'>Enter Name!</font>";  
				qw++;
			}
			else if(!getid("name").value.match(m))
            {
                document.getElementById("a").innerHTML="<font color='#ff8566'>Valid Name Please!</font>";
                qw=1;
            }
            else if(getid("name").value.length<=2)
            {
                document.getElementById("a").innerHTML="<font color='#ff8566'>Enter Correct Name!</font>";
                qw=1;
            }
            else
            {
                document.getElementById("a").innerHTML="";
            }

            
            //for email
            if(getid("email").value=="")
                { 
                    document.getElementById("b").innerHTML="<font color='#ff8566'>Email ID Please!</font>";  
                    qw=1;
                }
            else if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(getid("email").value)))
                {
                    document.getElementById("b").innerHTML="<font color='#ff8566'>Valid Email ID Please!</font>";
                    qw=1;
                }
            else
                {
                    document.getElementById("b").innerHTML="";
                }
            
            
            //for bday.
            if(getid("date").value=="")
                { 
                    document.getElementById("c").innerHTML="<font color='#ff8566'>Choose Your BirthDay!</font>";  
                    qw=1;
                }	
            else
                {
                    document.getElementById("c").innerHTML="";
                }	
            
            
            //for gender.
                var a = 0, rdbtn=document.getElementsByName("gender");
                for(i=0;i<rdbtn.length;i++) 
                {
                    if(rdbtn.item(i).checked == false) 
                    {
                        a++;
                    }
                }
                if(a == rdbtn.length) 
                {
                        document.getElementById("d").innerHTML="<font color='#ff8566'>Choose Your Gender!</font>";  
                        qw++;
                }	
                else
                {
                        document.getElementById("d").innerHTML="";
                }
            
            //for martial Status
            var combo1 = document.getElementById("status");
            if(combo1.value == null || combo1.value == "") 
            {	
                    document.getElementById("e").innerHTML="<font color='#ff8566'>Choose Your Martial Status!</font>";  
                    qw++;
            }	
            else
            {
                    document.getElementById("e").innerHTML="";
            }
            
            
            //for state.
            var combo2 = document.getElementById("state");
            if(combo2.value == null || combo2.value == "") 
            {	
                    document.getElementById("j").innerHTML="<font color='#ff8566'>Select Your State!</font>";  
                    qw++;
            }	
            else
            {
                document.getElementById("j").innerHTML="";
            }
            
            //for locality
            if(getid("area").value=="")
            { 
                document.getElementById("f").innerHTML="<font color='#ff8566'>Enter Your Locality!</font>";  
                qw++;
            }
            else
            {
                document.getElementById("f").innerHTML="";
            }
            
            
            //for city
            var m=/^[A-Za-z ]+$/;
            var city=getid("city").value;
            if(city=="")
                    { 
                        document.getElementById("g").innerHTML="<font color='#ff8566'>Enter Your City!</font>";  
                        qw++;
                    }
            else if(!m.test(city))
                {
                    document.getElementById("g").innerHTML="<font color='#ff8566'>Valid City Please!</font>";
                    qw=1;
                }
            else
                {
                document.getElementById("g").innerHTML="";
                }
            
            
            //for district
            var district=getid("district").value;
                    if(district=="")
                                { 
                                    document.getElementById("h").innerHTML="<font color='#ff8566'>Enter Your District!</font>";  
                                    qw++;
                                }
                    else if(!m.test(district))
                            {
                            document.getElementById("h").innerHTML="<font color='#ff8566'>Valid District Please!</font>";
                                qw=1;
                            }
                    else
                {
                document.getElementById("h").innerHTML="";
                }
            
            
            //for stuff.
                if(getid("choose").value=="")
                    { 
                        document.getElementById("i").innerHTML="<font color='#ff8566'>Choose date!</font>";  
                        qw++;
                    }
                else
                    {
                        document.getElementById("i").innerHTML="";
                    }
            
            
            //for phone..
             var v=getid("phno").value;
            var ph= /^[7-9]\d{9}$/;
                if(v == "")
                    {
                        document.getElementById("p").innerHTML="<font color='#ff8566'>Enter Number!</font>";
                        qw=1;
                    }
                else if(!ph.test(v))
                    {
                        document.getElementById("p").innerHTML="<font color='#ff8566'>Invalid Number!</font>";
                        qw=1;
                    }
                else
                    {
                        document.getElementById("p").innerHTML="";
                    }
if(qw!=0)
{
return false;

}	
        
            
                        
        getid("d_name").innerHTML= getid("name").value;
        getid("d_email").innerHTML = getid("email").value;
        getid("d_phno").innerHTML = getid("phno").value;
        getid("d_date").innerHTML = getid("date").value;
        
        getid("d_status").innerHTML = getid("status").value; 
        getaddress(); //calling address.
		return true;
        }
        
            </script>

</body>

</html>
