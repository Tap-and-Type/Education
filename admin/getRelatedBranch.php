<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/branch-functions.php";
require_once "../library/stream-functions.php";
require_once "../library/course-functions.php";
if(isset($_GET['catId'])){
$catId=$_GET['catId'];
$result=array();
$result=getBranchesFromStreamID($catId);
$str="";
foreach($result as $branch){
$str=$str . "\"$branch[br_id]\"".",". "\"$branch[br_name]\"".",";
}
$str=substr($str,0,(strLen($str)-1)); // Removing the last char , from the string
echo "new Array($str)";

}

?>