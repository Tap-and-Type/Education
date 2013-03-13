<?php
require_once "config.php";
require_once "database.php";

function listLinks()

{
   $sql = "select * from list";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}

function insertLink($name, $url, $id, $description, $university)
{
	$sql = "insert into list (link_name, href, crs_id, description, uni_id) values ('$name', '$url', $id, '$description', $university)";
	$result = dbQuery($sql);
	return $result;
	
}

function deleteList($id)
{
	$sql = "delete from list where list_id = '$id'";
	$result = dbQuery($sql);
	
}

function courseRelatedLinks($id)
{
	
	$sql = "select * from list where crs_id= '$id'";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}

?>



