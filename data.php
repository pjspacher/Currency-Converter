<?php
	session_start();
	$amount = $_POST["change"]; 
	$from_Currency = $_POST["type"]; 
	$to_Currency = "THB"; 
	
	$get = file_get_contents("https://www.google.com/finance/converter?a=".$amount."&from=".$from_Currency."&to=".$to_Currency."");
	$get = explode("<span class=bld>",$get);
	$get = explode("</span>",$get[1]); 

	$_SESSION["result"] = preg_replace("/[^0-9\.]/", null, $get[0])." บาท (THB)";
	echo $_SESSION["result"];
	header("Location:index.php");

?>