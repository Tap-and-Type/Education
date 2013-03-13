<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/link-functions.php";

?>
<?php 

if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
		$id=$_GET['lid'];
		deleteList($id);
		}
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Links </title>
</head>
<body>

<table>
<tr>
  <th> Link Name </th>
  <th> URL </th>
  <th> Description </th>
  </tr>
<?php

$result = listLinks();
foreach($result as $link)
{
	extract($link);
	
	?>
<tr> 
   <td> <?php echo $link_name; ?>  </td>
    <td><a href="<?php echo $href; ?>" target="_new"> <?php echo $href; ?></a>   </td>
     <td> <?php echo $description; ?>  </td>
     <td><input type="button" value="delete" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']."?action=delete&lid=".$list_id; ?>'" /></td>
    
</tr>

<?php
} 
?>
<a href="addLink.php"> Add Link </a>
</body>
</html>
