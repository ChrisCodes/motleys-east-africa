
<div class="site-header">

<div class="inner-pad">

<a href="index.php"><img class="site-logo" src="images/icons/logo.png" /></a>


<img class="desk-search-icon hide-mobile" id="desk-search-icon" src="images/icons/sicon.png" />
<img class="mobile-menu-icon hide-desktop" id="mobile-menu-icon" src="images/icons/mmicon.png" />


<ul class="desk-nav hide-mobile">
    <a href="contacts.php"><li>CONTACTS</li></a>
    <a href="about.php"><li>COMPANY</li></a>
<a href="services.php"><li>SERVICES</li></a>


</ul>

</div>


<ul class="mobile-nav hide-desktop" id="mobile-nav">
<div class="inner-pad">
<a href="index.php"><li>Home</li></a>
<a href="services.php"><li>Services</li></a>
<a href="about.php"><li>Company</li></a>
<a href="contacts.php"><li>Contacts</li></a>



<li class="house-search">
<form class="search-cover" action="search.php" method="get">
<input type="text" class="s-term" name="s-term" placeholder="Search motleys" required />
<input type="submit" class="s-button" name="s-go" value="" />
</form>
</li>

</div>
</ul>


<div class="desk-search hide-mobile" id="desk-search"  >
<div class="inner-pad">

<form class="search-cover" action="search.php" method="get">

<input type="text" class="s-term" name="s-term" placeholder="Search motleys" required />
<input type="submit" class="s-button" name="s-go" value="" />

</form>
</div>
</div>


</div>





<script>

var uiswitch = 0;

$('#desk-search-icon').click(function(){
    if(uiswitch==0){

     $('#desk-search').css("height","auto");

     $('#desk-search').css("opacity","1");
     $('#desk-search').css("padding-top","40px");
     $('#desk-search').css("padding-bottom","40px");

     $('#desk-search-icon').attr("src","images/icons/xicon.png");

      uiswitch++;
     
    } else{

     $('#desk-search').css("height","0px");

      $('#desk-search').css("opacity","0");
     $('#desk-search').css("padding-top","0px");
     $('#desk-search').css("padding-bottom","0px");

     $('#desk-search-icon').attr("src","images/icons/sicon.png");
    
    uiswitch = 0;
    }
   
});






var menuswitch = 0;

$('#mobile-menu-icon').click(function(){
    if(menuswitch==0){

     $('#mobile-nav').css("height","auto");
     $('#mobile-nav').css("padding","20px 0px");
      $('#mobile-nav').css("padding-top","30px");
      $('#mobile-nav').css("opacity","1");
     $('#mobile-menu-icon').attr("src","images/icons/xicon.png");

      menuswitch++;
     
    } else{

   $('#mobile-nav').css("height","0px");
     $('#mobile-nav').css("padding","0px 0px");
     $('#mobile-nav').css("padding-top","0px");
         $('#mobile-nav').css("opacity","0");

     $('#mobile-menu-icon').attr("src","images/icons/mmicon.png");
    menuswitch = 0;
    }
   
});


</script>