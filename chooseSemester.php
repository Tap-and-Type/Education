<?php

if(isset($_GET['brId']))
{
	$brId=$_GET['brId'];
	
	
}
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="css/navigation.css"/>
<link rel="stylesheet" href="css/chooseSemester.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?></title>
</head>

<body>
	<div id="main">		
    <div id="Listheader">
        	<a target="_parent" href="index.php">
    		<div id="logo">
    	 		<span id="logo1">Open</span><span id="logo2">Education</span>
         	</div>
            </a>
  			
    	</div><!-- end of header -->
        <div id="content" style="width:90%; margin:0 auto;">
        
         <fieldset>
            <legend>Select Semester</legend>

<div id="semesterList">

<a href="allCourses.php?brId=<?php echo $brId;?>&semId=1" target="_parent"><div class="sem">Semester 1</div></a>
<a href="allCourses.php?brId=<?php echo $brId;?>&semId=2" target="_parent"><div class="sem">Semester 2</div></a>
<a href="allCourses.php?brId=<?php echo $brId;?>&semId=3" target="_parent"><div class="sem">Semester 3</div></a>
<a href="allCourses.php?brId=<?php echo $brId;?>&semId=4" target="_parent"><div class="sem">Semester 4</div></a>
<a href="allCourses.php?brId=<?php echo $brId;?>&semId=5" target="_parent"><div class="sem">Semester 5</div></a>
<a href="allCourses.php?brId=<?php echo $brId;?>&semId=6" target="_parent"><div class="sem">Semester 6</div></a>
<a href="allCourses.php?brId=<?php echo $brId;?>&semId=7" target="_parent"><div class="sem">Semester 7</div></a>
<a href="allCourses.php?brId=<?php echo $brId;?>&semId=8" target="_parent"><div class="sem">Semester 8</div></a>

</div>
</fieldset>
</div>
</div>
</body>
</html>