<?php

require_once "config.php";
require_once "database.php";


function listUniversity()

{
   $sql = "select * from university";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}

function insertUniversity($name)
{
	$sql = "insert into university (uni_name) values ('$name')";
	$result = dbQuery($sql);
	
}

function deleteUniversity($id)
{
	$sql = "delete from university where uni_id = '$id'";
	$result = dbQuery($sql);
	
}

function getUniversityFromList($id)

{
   $sql = "select uni_name from university where uni_id=$id";  
   $result = dbQuery($sql);
   $row=mysql_fetch_assoc($result);
   return $row['uni_name'];
}

?>