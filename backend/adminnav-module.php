<div class="admin-head inner-pad">
<img src="../images/profiles/walter.jpg" class="admin-image" />
<p class="normal-text make-bold admin-label"><span class="hide-mobile" style="float: left;">MOTLEYS &nbsp;</span><span style="float: left;">ADMIN</span></p>

<img src="../images/icons/mmicon.png" class="nav-icon" id="nav-icon" />

<div class="admin-nav" id="admin-nav">
<ul class="nav-list">
<a href="#"><li>All Callback Requests</li></a>
<a href="#"><li>All Messages</li></a>
<a href="../"><li>Go To Site</li></a>
<a href="logout.php"><li>Log Out</li></a>
</ul>
</div>

</div>

<script>


var menuswitch = 0;

$('#nav-icon').click(function(){
    if(menuswitch==0){

     $('#admin-nav').css("height","auto");
      $('#admin-nav').css("opacity","1");
     $('#nav-icon').attr("src","../images/icons/xicon.png");

      menuswitch++;
     
    } else{

   $('#admin-nav').css("height","0px");
      $('#admin-nav').css("opacity","0");
     $('#nav-icon').attr("src","../images/icons/mmicon.png");
    menuswitch = 0;
    }
   
});


</script>



