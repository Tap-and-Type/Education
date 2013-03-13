<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/branch-functions.php";
require_once "../library/stream-functions.php";
require_once "../library/course-functions.php";
$result=array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>test</title>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="catId" />
<input type="submit" value="submit" />
</form>
<?php
if(isset($_GET['catId'])){
$catId=$_GET['catId'];
$resultArray=array();
$resultArray=getBranchesFromStreamID($catId);
$GLOBALS['result']=$resultArray;
echo count($result);
}

foreach($result as $row)
{
	?>
    
    <h3><?php echo $row['br_id'] ?></h3>
	<?php
	}

 ?>
</body>
</html>