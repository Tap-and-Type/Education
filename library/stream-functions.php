

<?php

require_once "config.php";
require_once "database.php";

function listStream()

{
   $sql = "select * from stream";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}

function insertStream($name)
{
	$sql = "insert into stream (strm_name) values ('$name')";
	$result = dbQuery($sql);
	
}

function deleteStream($id)
{
	$sql = "delete from stream where strm_id = '$id'";
	$result = dbQuery($sql);
	
}


?>

