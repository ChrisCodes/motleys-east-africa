<?php
$start = microtime();
//connect to the database using php data objects
$pdo = new PDO('mysql:host=localhost; dbname=motleys','root','');


$search = "";

if(isset($_GET['s-term'])){
	
$search = mysql_real_escape_string($_GET["s-term"]);	
}



?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Results for <?php if(isset($_GET['s-term'])){
	
	echo $_GET['s-term'];
	
}?>
</title>
<link rel="stylesheet" type="text/css" href="css/overall.css" />
<link rel="stylesheet" type="text/css" href="css/navigation.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/simple-banner.css" />
<link rel="stylesheet" type="text/css" href="css/services-module.css" />
<link rel="stylesheet" type="text/css" href="css/whyus-module.css" />
<link rel="stylesheet" type="text/css" href="css/contacts-module.css" />
<link rel="stylesheet" type="text/css" href="css/about-module.css" />
<link rel="stylesheet" type="text/css" href="css/getsocial-module.css" />
<link rel="stylesheet" type="text/css" href="css/footer.css" />
<link rel="stylesheet" type="text/css" href="css/fastdel-module.css" />
<link rel="stylesheet" type="text/css" href="css/founder-module.css" />
<link rel="stylesheet" type="text/css" href="css/company-module.css" />
<link rel="stylesheet" type="text/css" href="css/index-carousel.css" />
<link rel="stylesheet" type="text/css" href="css/notification.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />

<link rel="stylesheet" type="text/css" href="css/kpis-module.css" />
<link rel="stylesheet" type="text/css" href="css/callback-module.css" />
<link rel="stylesheet" type="text/css" href="css/clients-module.css" />
<link rel="stylesheet" type="text/css" href="css/banner-module.css" />
<link rel="stylesheet" type="text/css" href="css/method-module.css" />
<link rel="stylesheet" type="text/css" href="css/industries-module.css" />
<link rel="stylesheet" type="text/css" href="css/people-module.css" />
<link rel="stylesheet" type="text/css" href="css/statements-module.css" />
<link rel="stylesheet" type="text/css" href="css/search.css" />

<link rel="stylesheet" type="text/css" href="css/page-load.css" />

<script type="text/javascript" src="js/jquery.js" ></script>



</head>

<body onload="removeLoadScreen()">
 
 <script>


function removeLoadScreen(){
    $(".page-load").css("width","0px");
     $(".page-load").css("opacity","0");

}
    </script>

<?php
include("page-load.php");

include("include/navigation.php");
//include("notification.php");
?>

<div class="ms-cont">
<div class="more-search inner-pad">
    

<form class="search-cover" action="search.php" method="get">
<input type="text" class="s-term" name="s-term" placeholder="Search Vallymore.com" required />
<input type="submit" class="s-button" name="s-go" value="" />
</form>


</div>
</div>


<?php

//explode the search query into individual terms

$searche = explode(" ", $search);


//build serach query from the array of terms

$count = 0;
$construct = "SELECT * FROM `index` WHERE ";

	
foreach($searche as $term){
	

	if($count == 0){
		$construct .= "title LIKE '%$term%' OR description LIKE '%$term%' OR keywords LIKE '%$term%' ";
	}
	else {
		$construct .= " OR title LIKE '%$term%' OR description LIKE '%$term%' OR keywords LIKE '%$term%' ";
	}
	

	$count++;
}

$results = $pdo->query($construct);

$stop = microtime();


?>

<div class="results-pane inner-pad sect-pad">

<?php
if($results->rowCount()>0){

echo "<p class=\"outcome-title\">".$results->rowCount()." results found in ".($stop-$start)." seconds!</p>";

$results = $results->fetchAll();





foreach($results as $res){
?>

<div class="one-result">
<a href="<?php echo $res["url"]; ?>" class="page-title"><?php echo substr($res["title"],0, 70)."..."; ?></a>
<p class="page-description"><?php if(empty($res["description"])){
	echo "No description available!";
} else {
    echo substr($res["description"],0, 100)."...";	
}

 ?></p>
<a href="<?php echo $res["url"]; ?>" class="page-link"><?php echo substr($res["url"],0, 50)."..."; ?></a>
</div>
<?php

}






} else {
	echo "<p class=\"outcome-title\">No results matched your search term</p>";
}




?>


</div>
</div>

<?php
//include("callback-module.php");
include("clients-module.php");
include("include/footer.php");


?>
</body>
</html>