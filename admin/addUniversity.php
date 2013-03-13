<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/university-functions.php";

?>

<?php 

if(isset($_GET['action']))
{
	if($_GET['action']=='add')
	{
		insertUniversity($_POST["university"]);
		}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Adding a new University</title>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'].'?action=add'; ?>" method="post">
University name : <input type="text" name="university"/>
<input type="submit" value="add" />

</body>
</html>