<div class="recent-activity inner-pad sect-pad">


<div class="recent-callbacks">
<p class="medium-title bottom-pad">RECENT CALLBACKS</p>

<?php

//$ic=0;
while($onecall = mysqli_fetch_array($cb)){

?>
<div class="one-callback" id="c<?php echo $onecall["id"]; ?>">
<p class="normal-text make-bold" style=" text-transform:uppercase; "><?php echo $onecall["name"]; ?> &nbsp; &nbsp;

<?php

$date = date("Y-m-d H:i:s", $onecall["time"]);

?>
(<?php 

if(date("Y-m-d")==date("Y-m-d",$onecall["time"])) {
    echo "TODAY, ";
} else {
    echo date("d M, ", $onecall["time"]);
}

echo date("  gA",$onecall["time"]); ?>)


</P>

<div class="req-det">
<img src="../images/icons/phone1.png" />
<p class="normal-text"><?php echo $onecall["phone"]; ?></p>
</div>

<div class="wf-button t-center" <?php echo "onclick=\"checkOffRequest(".$onecall["id"].")\""; ?> style="cursor: pointer;">CHECK OFF</div>

</div>

<?php
//$ic++;
}
?>

<script>

function checkOffRequest(id){


   var xhttp  = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function(){
        
        if(this.readyState==4 && this.status==200){
            //update the html ui
        
          var res = xhttp.responseText;

          if(res=="yes"){

             ///$('#c'+id).css("opacity","none");
            $('#c'+id).css("overflow","hidden");
            $('#c'+id).css("height","0px");
             $('#c'+id).css("padding","0px");
            $('#c'+id).css("border","none");
              $('#c'+id).css("margin","0px");
                    //$('#c'+id).css("display","none");
        
         
          }else {
             $('#c'+id+" .wf-button").html("FAILED");

            //$(".not-body").css("backface-visibility","visible"); 

            //$(".quick-request").css("transform","rotateY(180deg)");     


          }
          
            
    }
    };
    

    var tpage = "checkoffcall.php?callid="+id;
     
    xhttp.open("GET", tpage, true);
    xhttp.send();



}



</script>

<!--
 <ul class="button-c-wrap">
    <li style="display:inline-block;">
    <a href="contacts.php" class="wf-button t-center">SEE ALL REQUESTS</a>
    </li>
    </ul>
-->

</div>



<div class="recent-messages">

<p class="medium-title bottom-pad">RECENT MESSAGES</p>

<?php

//$i=0;
while($onemessage = mysqli_fetch_array($ms)){

?>
<div class="one-callback" id="m<?php echo $onemessage["id"]; ?>">
<p class="normal-text make-bold" style=" text-transform:uppercase; "><?php echo $onemessage["name"]; ?> &nbsp; &nbsp;
<?php

$date = date("Y-m-d H:i:s", $onemessage["time"]);

?>
(<?php 

if(date("Y-m-d")==date("Y-m-d",$onemessage["time"])) {
    echo "TODAY, ";
} else {
    echo date("d M, ", $onemessage["time"]);
}

echo date("  gA",$onemessage["time"]); ?>)</P>

<p class="normal-text message-text"><?php echo $onemessage["message"]; ?></p>

<div class="req-det">
<img src="../images/icons/phone1.png" />
<p class="normal-text"><?php echo $onemessage["phone"]; ?></p>
</div>

<div class="req-det">
<img src="../images/icons/email.png" />
<p class="normal-text"><?php echo $onemessage["email"]; ?></p>
</div>

<div href="contacts.php" class="wf-button t-center" <?php echo "onclick=\"checkOffMessage(".$onemessage["id"].")\""; ?> style="cursor: pointer;">CHECK OFF</div>


</div>

<?php

//$i++;
}
?>



<script>

function checkOffMessage(id){


   var xhttp  = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function(){
        
        if(this.readyState==4 && this.status==200){
            //update the html ui
        
          var res = xhttp.responseText;

          if(res=="yes"){

             ///$('#c'+id).css("opacity","none");
            $('#m'+id).css("overflow","hidden");
            $('#m'+id).css("height","0px");
             $('#m'+id).css("padding","0px");
            $('#m'+id).css("border","none");
              $('#m'+id).css("margin","0px");
                    //$('#c'+id).css("display","none");
        
         
          }else {
             $('#c'+id+" .wf-button").html("FAILED");

            //$(".not-body").css("backface-visibility","visible"); 

            //$(".quick-request").css("transform","rotateY(180deg)");     


          }
          
            
    }
    };
    

    var tpage = "checkoffmessage.php?messageid="+id;
     
    xhttp.open("GET", tpage, true);
    xhttp.send();



}

</script>
<!--
 <ul class="button-c-wrap">
    <li style="display:inline-block;">
    <a href="contacts.php" class="wf-button t-center">SEE ALL MESSAGES</a>
    </li>
    </ul>

-->
</div>


</div>

<div class="temp-footer inner-pad sect-pad">
<p class="foot-none">Copyright &copy; Motleys East Africa</p>
</div>
