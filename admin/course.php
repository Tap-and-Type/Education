<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/course-functions.php";

?>
<?php 

if(isset($_GET['action']))
{
	if($_GET['action']=='delete')
	{
		$id=$_GET['lid'];
		deleteCourse($id);
		}
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Course </title>
</head>
<body>

<table>
<tr>
  <th> Course Name </th>
  <th> Description </th>
  
  </tr>
<?php

$result = listCourses();
foreach($result as $link)
{
	extract($link);
	
	?>
<tr> 
   <td> <?php echo $crs_name; ?>  </td>
    
     <td> <?php echo $crs_description; ?>  </td>
     
     
     <td><input type="button" value="delete" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']."?action=delete&lid=".$crs_id; ?>'" /></td>
</tr>

<?php
} 
?>
<a href="addCourse.php"> Add Course </a>
</body>
</html>
