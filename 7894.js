function processphase1()  //display values of individuals.
        {   
            var qw=0;  
                //for school name..
		    
            var m=/^[A-Za-z ]+$/;
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

            //for school email
            if(getid("email").value=="")
			 { 
		        document.getElementById("b").innerHTML="<font color='#ff8566'>Enter Email ID!</font>";  
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

            
            //for school phone.
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
            
            
            
            
            //for principal name
                 var m=/^[A-Za-z ]+$/;
			if(getid("name1").value=="")
			{ 
		        document.getElementById("l").innerHTML="<font color='#ff8566'>Enter Name!</font>";  
				qw=1;
			}
			else if(!getid("name1").value.match(m))
                {
                    document.getElementById("l").innerHTML="<font color='#ff8566'>Valid Name Please!</font>";
                    qw=1;
                }
            else if(getid("name1").value.length<=2)
                {
                    document.getElementById("l").innerHTML="<font color='#ff8566'>Enter Correct Name!</font>";
                    qw=1;
                }
            else
                {
                    document.getElementById("l").innerHTML="";
                }
if(qw!=0)
{
return false;

}	
        
            
                        
        getid("d_name").innerHTML= getid("name").value;
        getid("d_email").innerHTML = getid("email").value;
        getid("d_phno").innerHTML = getid("phno").value;
		getid("d_pri").innerHTML= getid("name1").value;
        
        
        getaddress(); //calling address.
		return true;
        }