<div class="activate-screen inner-pad">

<div class="form-cont">
<img src="../images/profiles/walter.jpg" class="admin-bitmap">

<form class="activate-form" method="post" action="#">
    <p class="normal-text put-center make-bold">ADMIN LOG IN</p>
<input type="text"  class="tfield" name="pass" placeholder="Enter password" required />
<input type="submit" class="wf-button sbutton" name="login" value="LOG IN" /> 

</form>
<?php

if(isset($_POST["login"])){

$pass  = $_POST["pass"];

//update the password
  $passdb = mysqli_query($connection, "SELECT * FROM users WHERE name='admin'");

    if($passdb){

        $passdb = mysqli_fetch_array($passdb);

        if($passdb["pass"]==$pass){
           $_SESSION["admin"] = $pass;

        ?>
       <p class="normal-text put-center"><i>Logging in..</i></p>
       <meta http-equiv="refresh" content="3"/>

        <?php
        }


        } else {
            ?>

        <p class="normal-text put-center"><i>Oops! Wrong password</i></p>
        <meta http-equiv="refresh" content="3"/>

         <?php
        }

    }


?>
</div>

</div>
