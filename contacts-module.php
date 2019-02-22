<div class="our-contacts">




<div class="contact-sect sect-pad">

<div class="inner-pad">

<div class="contactp1">
<p class="medium-title bottom-pad">PRIMARY DETAILS</p>


<div class="one-det">
<img src="images/icons/phone1.png" class="det-image"/>
<p class="normal-text make-bold">0724725034</p>
</div>


<div class="one-det">
<img src="images/icons/phone2.png" class="det-image"/>
<p class="normal-text">0724906094</p>
</div>


<div class="one-det bottom-pad">
<img src="images/icons/email.png" class="det-image"/>
<p class="normal-text">info@motleyseastafrica.com</p>
</div>

</div>


<div class="contactp2">
<p class="medium-title bottom-pad">STREET ADDRESS</p>


<div class="one-det bottom-pad">
<img src="images/icons/location.png" class="det-image"/>
<p class="normal-text make-bold">PH3 Delights Apartments</p>
<p class="normal-text">Diani Road</p>
<p class="normal-text">Lavington</p>
</div>



<p class="medium-title contact-pad">LET'S CONNECT</p>

<ul class="soc-list">
<li><a href=""><img src="images/icons/facebookicon.png" /></a></li>
<li><a href=""><img src="images/icons/twittericon.png" /></a></li>
<li><a href=""><img src="images/icons/linkedinicon.png" /></a></li>
</ul>

</div>

</div>

</div>





<div class="comp-back"></div>











<div class="inner-pad message-sect">
<div class="pad-mform sect-pad">
<p class="medium-title bottom-pad">LEAVE A MESSAGE</p>

<form class="message-form" id="mess-form-main" action="#" method="get">
<input type="text" class="tfield" id="name-main" placeholder="Name" />
<input type="text" class="tfield" id="phone-main" placeholder="Phone" />
<input type="text" class="tfield" id="email-main" placeholder="Email" /> 
<textarea class="tfield ta" id="message-main" placeholder="Message"></textarea> 
<input type="submit"id="send-main" class="bf-button medium-normal sbutton" value="SEND MESSAGE" /> 
</form>
</div>
</div>


<script>
    var name, phone, message;
//collect the data from the form...
$('#mess-form-main').submit(function(e){

    e.preventDefault();

    name = $('#name-main').val();
    phone = $('#phone-main').val();
    email = $('#email-main').val();
    message = $('#message-main').val();


   var xhttp  = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function(){
        
        if(this.readyState==4 && this.status==200){
            //update the html ui
        
          var res = xhttp.responseText;

          if(res=="yes"){
             $('#send-main').val("MESSAGE SENT!");


             $(".not-body").css("opacity","1");
              $(".not-body").css("z-index","9");
         
          }else {
             $('#send-main').val("FAILED!");

             $(".not-body").css("opacity","1");
              $(".not-body").css("z-index","9");
            //$(".not-body").css("backface-visibility","visible"); 

            //$(".quick-request").css("transform","rotateY(180deg)");     


          }
          
            
    }
    };
    

    var tpage = "send-email.php?name="+name+"&phone="+phone+"&email="+email+"&message="+message;
     
    xhttp.open("GET", tpage, true);
    xhttp.send();



});



</script>

















</div>