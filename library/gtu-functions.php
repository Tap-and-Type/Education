<?php
require_once "config.php";
require_once "database.php";

function insertGtu($brId, $crsId, $semId)
{
	$sql = "insert into gtu (br_id, crs_id, sem_id) values ($brId, $crsId, $semId)";
	$result = dbQuery($sql);
	return $result;
	
}

function listCoursesForSemesterAlphabetically($brID, $semId,$a)

{
   $sql="SELECT c.crs_id, c.crs_name
   		 FROM gtu g, course c
		 WHERE c.crs_name LIKE '$a%' and c.crs_id=g.crs_id and g.br_id=$brID and g.sem_id=$semId
   ";
   $result=dbQuery($sql);
   return $result;
}


?>