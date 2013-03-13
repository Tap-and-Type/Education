<?php
require_once "config.php";
require_once "database.php";

function listBranch()

{
   $sql = "select * from branch";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}

function listBranchAlphabetically($a)

{
   $sql = "select * from branch where br_name LIKE '$a%' order by br_name";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}

function listBranchesAlphabetically($a)

{
   $sql = "select * from branch where br_name LIKE '$a%' order by br_name"; 
   $result = dbQuery($sql);
   
   return $result;
}

function insertBranch($name, $id)
{
	$sql = "insert into branch (br_name, strm_id) values ('$name', $id)";
	$result = dbQuery($sql);
	
}


function deleteBranch($id)
{
	$sql = "delete from branch where br_id = '$id'";
	$result = dbQuery($sql);
	
}

function  getBranchesFromStreamID($id)

  {
	$sql = "select * from branch where strm_id = '$id'" ;
	$result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
	  
  }

?>



