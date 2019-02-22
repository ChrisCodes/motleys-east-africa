<?php

$ms = mysqli_query($connection, "SELECT * FROM messages WHERE replied='no'");

$mstotal = mysqli_num_rows($ms);



$cb = mysqli_query($connection, "SELECT * FROM callback WHERE called='no'");

$cbtotal = mysqli_num_rows($cb);

?>


<div class="admin-banner">
<div class="inner-pad sect-pad">

<div class="sect-pad">

<div class="dsplit">

<p class="stat-box fancy-title"><?php echo $cbtotal; ?></p>
<p class="normal-text make-bold put-center">UNCHECKED CALLBACKS</p>

</div>




<div class="dsplit">

<p class="stat-box fancy-title"><?php echo $mstotal; ?></p>
<p class="normal-text make-bold put-center">UNREAD MESSAGES</p>

</div>


</div>

</div>
</div>