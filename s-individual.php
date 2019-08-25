<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        
        <link rel="stylesheet" type="text/css" href="styles_stuff.css">
		<script src="789.js"></script>
		<script src="7892.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
        <link href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/swanky-purse/jquery-ui.css" rel="stylesheet">
</head>
    
    <body class="dnte_form">
        
        <!--FORM FOR INDIVIDUAL-->
        <div class="container contn" id="phase1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <form class="form-container" id="form1" method="post" action="s-indi.php">
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
							    <input type="radio"  id="gender"  name="gender" value="Female" onClick="my(this.value)"> Female
                                <input type="radio"  id="gender" name="gender" value="Male" onClick="my(this.value)"> Male
                                
                                <input type="radio"  id="gender" name="gender" value="Others" onClick="my(this.value)"> Others
								
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
                            <label for="donation">DONATED STUFF DESCRIPTION</label>
                            <textarea class="form-control" id="donated" name="stuff" placeholder="DESCRIPTION" row=4></textarea>
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
                <th> Donated Stuff Description </th>
                <td>     <font color='#33ccff' face="Comic Sans MS"><span id="d_stuff"></span></font>       </td>
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
{	
	               if(!adrs())
                   {	
                       if(getid("donated").value=="")
                    { 
                        document.getElementById("i").innerHTML="<font color='#ff8566'>Description Stuff!</font>";  
                        return false;
                    }
                else
                    {
                        document.getElementById("i").innerHTML="";
                    }				   
	           return false;
                   }
	  return false;
}
else if(!adrs()){	 if(getid("donated").value=="")
                    { 
                        document.getElementById("i").innerHTML="<font color='#ff8566'>Description Stuff!</font>";  
                        return false;
                    }
                else
                    {
                        document.getElementById("i").innerHTML="";
                    }              
	                 return false;}
else if(getid("donated").value=="")
                    { 
                        document.getElementById("i").innerHTML="<font color='#ff8566'>Description Stuff!</font>";  
                        return false;
                    }
                else
                    {
                        document.getElementById("i").innerHTML="";
                    }

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
            getid("d_stuff").innerHTML= getid("donated").value;
            }
        
        
                function my(val)
                {
                    document.getElementById("d_gender").innerHTML = val;
                }
                
                
            </script>
            </body>
        </html>
    