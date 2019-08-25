<?php include'includes/header.php'; ?>

   
   
    <div class="container donation-st">
        <div class="row">
            
            <div class="col-md-12">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 donation-st-ctn">
            <p>CHOOSE YOUR CATEGORY</p>
    <form name="donation-form">
          
    <select class="cat_drop" name="donation-stuff" id="donation-menu">
        <option value="nothing" selected="selected">--SELECT--</option>
        <option value="p-individual.php">Donation from Individual</option>
        <option value="p-organisation.php">Donation from Organisation</option>
        <option value="p-school.php">Donation from School</option>
        <option value="p-university.php">Donation from University/College</option>
        
        </select>
    </form>
              </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
               
                </div>
            
            </div>
    </div>
    
    <script type="text/javascript">
    
        var url=document.getElementById("donation-menu");
        url.onchange=function(){
            var uoption=this.options[this.selectedIndex];
            
            if(uoption.value!= "nothing")
                {
                    window.open(uoption.value, "_blank", 'height=600,width=400');
                }
        }
    </script>
    
<!--
    <footer class="footer_sec">
         
        <div class="container footer-1 ">
           
           <div class="row"> 
            <div class="col-md-12 footer-content">
               
             <center>  
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ft_1">
                    
                    <img class="img-responsive" src="images/logo-vision.png">
                    
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ft_2">
                    
                    
                    
                    <ul type="none">
                       <h4 class="footer_title">Important Links</h4>
                        <li><a href="#">Adoption</a></li>
                        <li><a href="#">Sponsors</a></li>
                        <li><a href="donation.php">Donation</a></li>
                        <li><a href="#">Travel with us</a></li>
                        <li><a href="about_us.php">About us </a></li>
                           
                        
                    </ul>
                    
                </div>
                   
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ft_3">
                    
                    
                    
                    <ul type="none">
                        <h4 class="footer_title">Contact Us</h4>
                        
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <li>B-57, 2nd floor, New Krishna Park, New Delhi, Delhi 110018</li>
                        
                        <br>
                        
                        <i class="fa fa-phone" aria-hidden="true"></i><li>011 4158 2999</li>
                        
                    </ul>
                    
                </div>
                   
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ft_4">
                   
                  <ul>
                    <h4 class="footer_title"> Follow us</h4>
                  
                      
                          <a href=""><i class="fa fa-facebook" style="color: #3b5998;" aria-hidden="true"></i></a> 
                          <a href=""><i class="fa fa-twitter" style="color: #1DA1F2;" aria-hidden="true"></i></a> 
                          <a href=""><i class="fa fa-instagram" style="color: #E1306C;" aria-hidden="true"></i></a> 
                          <a href=""><i class="fa fa-google-plus" style="color: #CC3333;" aria-hidden="true"></i></a> 
                           
                      </ul>          
                </div>
                </center> 
            </div> 
                
            </div>
            
        </div>   
        
         <div class="container footer-2">
            
            <h4>© 1990 Vision. All rights reserved.</h4> 
             
         </div> 
    
    
    
</footer>


<div class="loader"></div>
-->
<!--************* footer ends  ******************-->	
	
	
	
<!--****************** scripts **************-->

<!--
<script type="text/javascript">
 
    
</script>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
-->

	<script>
	</script>

 <?php include'includes/footer.php'; ?>