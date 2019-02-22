<div class="banner">
<div class="overlay">

<div class="nav-pad">

</div>

<div class="inner-pad banner-pad">

<div class="slides-container">


    <div class="slide current-slide">
    <p class="medium-normal">WELCOME TO MOTLEYS</p> 
    <p class="large-title">MARKETING &amp; CONSULTING</p>
 <p class="normal-text">We are an East African Marketing company. We help businesses grow their audiences and measure their marketing efforts.</p>
    
    <ul class="button-c-wrap">
    <li style="display:inline-block;">
    <a href="contacts.php" class="wf-button t-center">LET'S GROW YOUR BUSINESS</a>
    </li>
    </ul>

   </div>







       <div class="slide">
    <p class="medium-normal">TOP-TIER MARKETING</p> 
    <p class="large-title">SHORT ON BUYING CUSTOMERS?</p>
 <p class="normal-text">We help brands engage with their consumers, start conversations, and boost conversions. We can get more customers through your door.</p>
    
    <ul class="button-c-wrap">
    <li style="display:inline-block;">
    <a href="contacts.php" class="wf-button t-center">START THE PROCESS</a>
    </li>
    </ul>

   </div>





    <div class="slide">
    <p class="medium-normal">GOT AN EVENT?</p> 
    <p class="large-title">ALL-STARS EVENT MANAGEMENT</p>
 <p class="normal-text">We do behind-the-scenes heavy-lifting of making any event a smashing success. We're invested in proprietary systems and expertise.</p>
    
    <ul class="button-c-wrap">
    <li style="display:inline-block;">
    <a href="contacts.php" class="wf-button t-center">HIRE MOTLEYS</a>
    </li>
    </ul>

   </div>









       <div class="slide">
    <p class="medium-normal">COMPREHENSIVE MARKETING AUDITS</p> 
    <p class="large-title">KEEP THE FAITH, BUT GET THE DATA</p>
 <p class="normal-text">Our experts measure marketing's ROI to identify the most beneficial channels and audiences. We'll collect and make sense of your data.</p>
    
    <ul class="button-c-wrap">
    <li style="display:inline-block;">
    <a href="contacts.php" class="wf-button t-center">LET'S GET IN TOUCH</a>
    </li>
    </ul>

   </div>






</div>


<div class="slide-controls">
<ul class="clist">
<li class="scont current-cont" onclick="nextSlide(0-slideno)"></li>
<li class="scont" onclick="nextSlide(1-slideno)"></li>
<li class="scont" onclick="nextSlide(2-slideno)"></li>
<li class="scont" onclick="nextSlide(3-slideno)"></li>
</ul>
</div>



<script>

//reference to the button indicators
var radios = document.getElementsByClassName("scont");

//implement the slider
var allslides = document.querySelectorAll(".slide");

		var slideno = 0;
		
		var start = 1;
		var slideshow = setInterval('nextSlide(start)', 8000);

		
		var param;
		
		function nextSlide(param){
			
			
		  allslides[slideno].className = "slide";
		  $(radios[slideno]).css("background","#001217");
		  
		  slideno = (slideno + param) % allslides.length;
		  
		  if(slideno < 0 ){
			  slideno = allslides.length - 1;
		  }

		  allslides[slideno].className = "slide current-slide";
		  $(radios[slideno]).css("background","#02e0ff");
		  
		  clearInterval(slideshow);
          slideshow = setInterval('nextSlide(start)', 8000);
		}
	


</script>

</div>


</div>
</div>