function pay()
{
	var qw=0;
	 //for amount
            var vii=getid("pay").value;
                if(isNaN(vii))
                {
                document.getElementById("what").innerHTML="<font color='#ff8566'>Only Digits!</font>";
                qw=1;
                }
                else if(vii.length==0)
                {
                document.getElementById("what").innerHTML="<font color='#ff8566'>Enter Amount!</font>";
                qw=1;
                }
                else
                {
                document.getElementById("what").innerHTML="";
                }
            
            
            //for cvv
            var h=/^[0-9]{3}$/;
            var cvv=getid("cvv").value;
            if(cvv=="")
                    { 
                        document.getElementById("x").innerHTML="<font color='#ff8566'>Enter CVV!!</font>";  
                        qw++;
                    }
                    else if(!h.test(cvv))
                        {
                            document.getElementById("x").innerHTML="<font color='#ff8566'>Enter correct CVV!!</font>"; 
                            qw=1;
                        }
                    else{
                    document.getElementById("x").innerHTML="";
                    }
            
            //for valid thru
            var data=new Date();
            if(getid("d1").value=="" || getid("d2").value=="")
                    { 
                        document.getElementById("z").innerHTML="<font color='#ff8566'>Enter Expiration Date</font>";  
                        qw++;
                    }
            else if(getid("d1").value >12 || getid("d2").value < data.getFullYear())
                {
                    document.getElementById("z").innerHTML="<font color='#ff8566'>Enter Correct Details</font>";
                    qw=1;
                }
                    else
                    {
                    document.getElementById("z").innerHTML="";
                    }
            
            //for card number

 var visa= /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            var mc= /^(?:5[1-5][0-9]{14})$/;
if(getid("cc").value=="")
                    { 
                        document.getElementById("type").innerHTML="<font color='#ff8566'>Enter Card Number!</font>";  
                        qw=1;
                    }
                     
                    else if(getid("cc").value.match(visa))
                        {
                            document.getElementById("type").innerHTML="";
                            
                        }
                        else if(getid("cc").value.match(mc))
                        {
                            document.getElementById("type").innerHTML="";
                            
                        }
                        else
                        {
                            document.getElementById("type").innerHTML="<font color='#ff8566'>Neither Visa Nor Mastercard!</font>";  
                            qw=1;
                        }
            
if(qw!=0)
{
return false;

}	
return true;
}