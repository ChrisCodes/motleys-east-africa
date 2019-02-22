<div class="activate-screen inner-pad">

<div class="form-cont">
<img src="../images/profiles/walter.jpg" class="admin-bitmap">

<form class="activate-form" method="post" action="#">
    <p class="normal-text put-center make-bold">ONE-TIME PASSWORD SETUP</p>
<input type="text"  class="tfield" name="newpass" placeholder="Create password" required />
<input type="submit" class="wf-button sbutton" name="createpass" value="SUBMIT" /> 

</form>

<?php

if(isset($_POST["createpass"])){

$newpass  = $_POST["newpass"];

//update the password
$upq = "UPDATE users SET pass='".$newpass."' WHERE name='admin' ";

$updatepass = mysqli_query($connection, $upq) or die(mysqli_error($connection));

if($updatepass){
?>
<p class="normal-text put-center"><i>Redirecting..</i></p>
<meta http-equiv="refresh" content="3"/>

<?php
}


}


?>
</div>

</div>
