<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/stream-functions.php";

?>

<?php 

if(isset($_GET['action']))
{
	if($_GET['action']=='add')
	{
		insertStream($_POST["stream"]);
		}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Adding a new Stream</title>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'].'?action=add'; ?>" method="post">
Stream name : <input type="text" name="stream"/>
<input type="submit" value="add" />

</body>
</html>