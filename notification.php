<div class="not-body">
<div class="inner-pad">

<div class="add-pad" style="padding: 0px; float: left; width: 100%;">

<div class="nholder">
<div class="notification">

<img src="images/icons/successsent.png" />

<p class="medium-title title" style="padding:5px;">SUCCESS!</P>
<P class="normal-text" style="padding:5px;">We'll get in touch in a moment</p>
<P class="normal-text bottom-margin" style="padding:0px;">Thank you!</p>
  
  <ul class="button-c-wrap">
    <li style="display:inline-block;">
    <div class="bf-button t-center"  id="close-not">GOT IT!</div
    </li>
    </ul>

</div>

</div>
</div>


</div>

</div>


<script>
$("#close-not").click(function(){
 $(".not-body").animate({opacity:0});
$(".not-body").animate({ "z-index":-1});
});

</script>