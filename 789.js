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
        getid("d_gender").innerHTML = getid("gender").value;
        getid("d_status").innerHTML = getid("status").value; 
        getaddress(); //calling address.
		return true;
        }