<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/branch-functions.php";
require_once "../library/stream-functions.php";
require_once "../library/course-functions.php";
if(isset($_GET['catId'])){
$catId=$_GET['catId'];
$result=array();
$result=getCoursesFromBranchID($catId);
$str="";
foreach($result as $course){
$str=$str . "\"$course[crs_id]\"".",". "\"$course[crs_name]\"".",";
}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string
echo "new Array($str)";

}

?>