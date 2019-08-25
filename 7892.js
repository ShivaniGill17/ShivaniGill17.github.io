function adrs()
{
var qw=0;
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
if(qw!=0)
{
return false;

}	
return true;
}