<div class="callback">

<div class="inner-pad sect-pad">
<p class="medium-title put-center bottom-pad">NEED TO CONSULT US? REQUEST A <span class="h-light">FREE</span> CALLBACK</p>


<form id="callback-form" method="get">

<ul class="form-cont bottom-pad">
<li><input type="text" id="name-call" placeholder="Name" class="text-input normal-text"/></li>
<li><input type="text" id="phone-call" placeholder="Phone" class="text-input normal-text"/></li>
<li><input type="submit" id="send-call" value="SUBMIT REQUEST" class="wf-button submit-button medium-normal" /> </li>
</ul>

</form>


</div>

</div>



<script>
    var name, phone, message;
//collect the data from the form...
$('#callback-form').submit(function(e){

    e.preventDefault();

    namec = $('#name-call').val();
    phonec = $('#phone-call').val();


   var xhttp  = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function(){
        
        if(this.readyState==4 && this.status==200){
            //update the html ui
        
          var resc = xhttp.responseText;

          if(resc=="yes"){
             $('#send-call').val("REQUEST SENT!");


             $(".not-body").css("opacity","1");
             $(".not-body").css("z-index","9");
         
          }else {
             $('#send-call').val("FAILED!");
    
             //$(".not-body").css("opacity","1");
             //$(".not-body").css("z-index","9");
             //$(".not-body").css("backface-visibility","visible"); 

            //$(".quick-request").css("transform","rotateY(180deg)");     


          }
          
            
    }
    };
    

    var tpage = "call-request.php?name="+namec+"&phone="+phonec;
     
    xhttp.open("GET", tpage, true);
    xhttp.send();



});



</script>