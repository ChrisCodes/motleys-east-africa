
<div class="banner" id="banner" style="background: url('<?php echo $back; ?>'); background-size: cover;
 background-position: center;">
<div class="overlay">

<div class="nav-pad">

</div>

<div class="inner-pad banner-pad">

<div class="slides-container">


    <div class="slide current-slide n-banner">
    <p class="medium-normal"><?php echo $mnormal; ?></p> 
    <p class="large-title"><?php echo $ltitle; ?></p>
 

   </div>

    <div class="ds-cont">
    <img src="images/icons/downscroll.png" id="downscroll" />
    </div>


 <script>

function scrollto(id) {
	var etop = $('.' + id).offset().top - 70;
	$('html, body').animate({
	  scrollTop: etop
	}, 1000);
}

$("#downscroll").click(function(){
scrollto("below-banner");
});

 </script>




</div>



</div>


</div>
</div>




<div class="below-banner"></div>
