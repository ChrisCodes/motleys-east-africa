<?php
session_start();

include("../include/connection.php");
?>


<html>

<head>
<title>MOTLEYS DASHBOARD</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="description" content="Motleys Administrator" /> 

<link rel="stylesheet" type="text/css" href="../css/overall.css" />
<link rel="stylesheet" type="text/css" href="css/adminnav-module.css" />
<link rel="stylesheet" type="text/css" href="css/adminbanner-module.css" />
<link rel="stylesheet" type="text/css" href="css/activate.css" />
 <link rel="stylesheet" type="text/css" href="css/recentactivity-module.css" />


<style type="text/css">
	

</style>

<script type="text/javascript" src="../js/jquery.js" ></script>

</head>

<body>
 
<?php

//include("notification.php");
if(isset($_SESSION["admin"])){
include("adminnav-module.php");
include("adminbanner-module.php");
include("recentactivity-module.php");
/*include("notification.php");
include("banner-module.php");
include("contacts-module.php");
///include("about-module.php");
//include("people-module.php");
//include("statements-module.php");
//include("kpis-module.php");
//include("method-module.php");
//include("industries-module.php");
include("callback-module.php");
include("clients-module.php"); */
} else {
    //get the current password
    $pass = mysqli_query($connection, "SELECT * FROM users WHERE name='admin'");

    if($pass){
        $pass = mysqli_fetch_array($pass);
        if($pass["pass"]=="default"){
            include("activate.php");
        } else {
            include("login.php");
        }

    }

}
?>


<?php

//include("notification.php");
//include("include/footer.php");

?>



</body>

</html>