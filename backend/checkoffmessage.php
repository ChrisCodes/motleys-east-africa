<?php

include("../include/connection.php");

$callid;



if(isset($_GET["messageid"])){
    $callid =$_GET["messageid"];
}



//insert into the database
$query  = "UPDATE messages SET replied='yes' WHERE id='$callid'";

$sent = mysqli_query($connection, $query) or die(mysqli_error($connection));

/*
// the message
$title = "Vallymore: New request from ".$name." (".$phone.")";

$msg = $message."<br /><br />".$name."<br />(".$phone.")";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);


//headers
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Vallymore Client <info@vallymorerrands.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// send email
$res = mail("vallymorenterprises@gmail.com",$title,$msg, $headers);



*/


if($sent){
echo "yes";
}

else {
  echo "no";
}


?>