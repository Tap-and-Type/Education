<?php
require_once "../library/config.php";
require_once "../library/database.php";
require_once "../library/branch-functions.php";
require_once "../library/stream-functions.php";
require_once "../library/course-functions.php";
require_once "../library/link-functions.php";
require_once "../library/university-functions.php";
require_once "../library/gtu-functions.php";
?>

<?php 
$branches = array();

if(isset($_GET['action']))
{
	if($_GET['action']=='add')
	{
		$success=insertGtu($_POST["branch"], $_POST["course"], $_POST['semester']);
		
		}
	}
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Add new GTU </title>

<script type = "text/javascript" src="../js/dropDown.js">
</script>

</head>

<body>
<form name="addCourseForm" action="<?php echo $_SERVER['PHP_SELF'].'?action=add'; ?>" method="post">
Stream : <select name="stream" onchange="createDropDown('getRelatedBranch.php?catId='+this.value,'branch',new Array('course'))">
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
    
  Branch :   <select name="branch" id="branch" onchange="createDropDown('getRelatedCourse.php?catId='+this.value,'course',null)">
  <option value="-1" >--Please Select--</option>

 
    </select> <br/>

  Course :   <select name="course" id="course">
  <option value="-1" >--Please Select--</option>

 
    </select> <br/>
  Semester :   <select name="semester" id="semester">
  <option value="1" >Semster 1</option>
  <option value="2" >Semster 2</option>
  <option value="3" >Semster 3</option>
  <option value="4" >Semster 4</option>
  <option value="5" >Semster 5</option>
  <option value="6" >Semster 6</option>
  <option value="7" >Semster 7</option>
  <option value="8" >Semster 8</option>

 
    </select> <br/>  


 University Name :   <select name="university" id="university">
  <option value="-1" >--Please Select--</option>
  
  <?php
    $universityList = listUniversity();
	foreach($universityList as $university)
	  {
	 ?>
     
     <option value="<?php echo $university['uni_id'] ?>"><?php echo $university['uni_name'] ?></option>
     <?php } ?>
      }
 
    </select> <br/>

 
    

<input type="submit" value="Add" />
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