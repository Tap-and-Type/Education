<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/branch-functions.php";
require_once "../library/stream-functions.php";
require_once "../library/course-functions.php";

?>

<?php 
$branches = array();

if(isset($_GET['action']))
{
	if($_GET['action']=='add')
	{
		$success=insertCourse($_POST["course"], $_POST["branch"], $_POST["description"] );
		
		}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Add new Courses </title>

<script type = "text/javascript" src="../js/dropDown.js">
</script>
<script type = "text/javascript" src="../js/jquery.js">
</script>

</head>

<body>
<form name="addCourseForm" id="addCourseForm" action="<?php echo $_SERVER['PHP_SELF'].'?action=add'; ?>" method="post">

Stream : <select name="stream" onchange="createDropDown('getRelatedBranch.php?catId='+this.value,'branch',null)">
<option value="-1" >--Please Select--</option>
<?php
    $streamList = listStream();
	foreach($streamList as $stream)
	  {
	 ?>
     
     <option value="<?php echo $stream['strm_id'] ?>"><?php echo $stream['strm_name'] ?></option>
     <?php } ?>
      }
 
    </select> <br/>
    
  Branch :   <select name="branch" id="branch">
  <option value="-1" >--Please Select--</option>
  
  
   </select> <br/>

  Course :   <input type="text" name="course"/> </br>
  
  Course Description : <textarea name="description" rows="10" cols="20"> </textarea> </form></br>
    

  
<input type="button" value="Add" onclick="$('#addCourseForm').submit();"/>
<div class="success">
<?php
if(isset($success)){
if($success==1)
{
	echo $_POST['course']." has been added successfully!";
	}
else
{
	echo "some Error occured while adding.";
	}	
}
 ?>
 </div>
 </form>
</div>
</body>
</html>