<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/branch-functions.php";
require_once "../library/stream-functions.php";

?>

<?php 

if(isset($_GET['action']))
{
	if($_GET['action']=='add')
	{
		insertBranch($_POST["branch"], $_POST["stream"] );
		}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Adding a new Branch</title>
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'].'?action=add'; ?>" method="post">
<select name="stream">
<?php
    $streamList = listStream();
	foreach($streamList as $stream)
	  {
	 ?>
     
     <option value="<?php echo $stream['strm_id'] ?>"><?php echo $stream['strm_name'] ?></option>
     <?php } ?>
      }
 
    </select>
    
Branch name : <input type="text" name="branch"/>
<input type="submit" value="Add" />

</body>
</html>