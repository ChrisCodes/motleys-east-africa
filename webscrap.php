<?php

//specify header presets
//header("content-type: text/plain");

//specify the start url
$start = "http://localhost/motleys/index.php";



//connect to the database using php data objects
$pdo = new PDO('mysql:host=localhost; dbname=motleys','root','');


//array of the pages already crawled
$already_crawled = array();
	

//get the contents of the web page...
function get_details($doc, $url){
	
	$title = @$doc->getElementsByTagName("title")->item(0)->nodeValue;


$description = "";
$keywords = "";
$metas = $doc->getElementsByTagName("meta");

for($i=0; $i<$metas->length; $i++){
	$meta = $metas->item($i);
	
	if(strtolower($meta->getAttribute("name")) == "description"){
		
		$description = $meta->getAttribute("content");
	}
	
	
	
	if(strtolower($meta->getAttribute("name")) == "keywords"){
		
		$keywords = $meta->getAttribute("content");
	}


	
}


//echo $description;
//echo 	$keywords;	

//return the fetched details in a json array
/*$pdata = array();

$pdata[] = $title;
$pdata[] = $description;
$pdata[] = $keywords;
$pdata[] = $url;


return $pdata;*/
	
	return '{ "Title": "'.$title.'", "Description": "'.str_replace("\n"," ", $description).'", "Keywords": "'.$keywords.'", "URL": "'.$url.'"}';
}








//create a function to follow the links

function follow_links($url){
	
	//array of the pages already crawled
	global $already_crawled;
	
	//global php data object;
	global $pdo;
	
		//add the url to the list of crawled pages...
	if(!in_array($url, $already_crawled)){
		
	
	
	//change the user agent for requesting the web pages
	$options = array('http'=>array('method'=>"GET", 'headers'=>"User-Agent: howBot/0.1\n"));
$context = stream_context_create($options);

	
	
	//php has the DOMDocument class for parsing HTML docs
	
	//create a new DOMDocument
	$doc = new DOMDocument();
	
	//load html content into the document
	@$doc->loadHTML(file_get_contents($url, false, $context));
	
	
	
	//get the details of the page...
	
	$details = json_decode(get_details($doc, $url));
	
	
    $rows  = @$pdo->query("SELECT * FROM `index` WHERE url_hash='".md5($details->URL)."'");

    $rows = $rows->fetchColumn();
	
	$params = @array(":title"=>$details->Title,":description"=>$details->Description, ":keywords"=>$details->Keywords, ":url"=>$details->URL, ":url_hash"=>md5($details->URL) );
	
	
	if($rows>0){
		//update the database entries if they exist...
			//perform update if the title and description are not null or whitespace
		if(!is_null($params[":title"]) && !is_null($params[":description"]) && $params[":title"] != "" ){
		
		$result = $pdo->prepare("UPDATE `index` SET title=:title, description=:description, keywords=:keywords, url=:url, url_hash=:url_hash WHERE url_hash=:url_hash");
		$result = $result->execute($params);
		
		}
		
	}
	
	else {
		
		//perform insert if the title and description are not null or whitespace
		if(!is_null($params[":title"]) && !is_null($params[":description"]) && $params[":title"] != "" ){
		
		$result = $pdo->prepare("INSERT INTO `index` VALUES('',:title, :description, :keywords, :url, :url_hash)");
		$result = $result->execute($params);
		
		}
	}

    echo "<br />".$rows."<br />";

	
	/*echo(($data[0]=="")?"No title available":$data[0]);
	?>
    <br />
    <?php
	echo(($data[1]=="")?"No description available":$data[1]);
	?>
    <br />
    <?php
	echo(($data[2]=="")?"No keywords available":$data[2]);
	?>
    <br />
    <?php
	echo($data[3]);
	*/
	
	
	//in production the above data will be insterted into the search database....
	
	
	
	?>
    <br />
     <br />
      <br />
     <br />
    <?php
	
	
	
	
	$already_crawled[] = $url;
	
	
	
	
	//get a list of link tags from the page
	$linklist = $doc->getElementsByTagName("a");
	
	//get the href attributes for each of the retrieved link tags
	
	foreach($linklist as $link){
		
	   $l = $link->getAttribute("href");
	  
	   

	   
	   //convert all the links to absolute paths
	   
	if(substr($l,0,1)=="/" && substr($l,0,2) != "//"){
		
	$l = parse_url($url)["scheme"]."://".parse_url($url)["host"].dirname(parse_url($url)["path"]).$l;
		
	}else if(substr($l,0,2) == "//"){
		
	$l = parse_url($url)["scheme"].":".$l;
	
	}else if(substr($l,0,2) == "./"){
		
	$l = parse_url($url)["scheme"]."://".parse_url($url)["host"].dirname(parse_url($url)["path"]).substr($l,1);
		
	} else  if(substr($l,0,1) == "#") {
		
		//$l = parse_url($url)["scheme"]."://".parse_url($url)["host"].parse_url($url)["path"].$l;
		
	} else if (substr($l,0,3) == "../"){
		
		$l = parse_url($url)["scheme"]."://".parse_url($url)["host"]."/".dirname(parse_url($url)["path"]).$l;
		
	} else if(substr($l,0,11) == "javascript:"){
		
	continue;	
	} else if(substr($l,0,4) != "http" && substr($l,0,5) != "https"){
	
	$l = parse_url($url)["scheme"]."://".parse_url($url)["host"].dirname(parse_url($url)["path"])."/".$l;
		
	} else {
		
	}
	   
	     
	    follow_links($l); 
	  

	   
	}
	
	
	}
	
	
}





//call the function to start following the links
follow_links($start);




//print to see the list of the links already crawled
?><br /><br /><br /><br />
    <pre>
    <?php
print_r($already_crawled);

	?>
    </pre>
    <?php


?>