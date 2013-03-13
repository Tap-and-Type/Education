<?php
require_once "config.php";
require_once "database.php";

function listCourses()

{
   $sql = "select * from course order by crs_name";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}

function listCoursesAlphabetically($a)

{
   $sql = "select * from course where crs_name LIKE '$a%' order by crs_name"; 
   $result = dbQuery($sql);
   
   
   return $result;
}


function listCoursesForBranch($brID)

{
   $sql = "select * from course where br_id = $brID  order by crs_name";  
   $result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
}
function listCoursesForBranchAlphabetically($brID,$a)

{
   $sql = "select * from course where crs_name LIKE '$a%' and br_id = $brID  order by crs_name";  
   $result = dbQuery($sql);
   return $result;
}

function insertCourse($name, $id, $description)
{
	$sql = "insert into course (crs_name, br_id, crs_description) values ('$name', $id, '$description')";
	$result = dbQuery($sql);
	return $result;
	
}

function deleteCourse($id)
{
	$sql = "delete from course where crs_id = '$id'";
	$result = dbQuery($sql);
}

function  getCoursesFromBranchID($id)

  {
	$sql = "select * from course where br_id = '$id'" ;
	$result = dbQuery($sql);
   $resultArray = dbResultToArray($result);
   return $resultArray;
	  
  }
function getCourseDetails($crsId)
{
	$sql = "select * from course where  crs_id = '$crsId'" ;
	$result = dbQuery($sql);
   $resultArray=mysql_fetch_assoc($result);
   return $resultArray;
	
	}  
  


?>



