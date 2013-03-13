<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
if(isset($cssArray)){
foreach($cssArray as $css)
{
?>
<link rel="stylesheet" href="css/<?php echo $css; ?>"/>
<?php	
}
}
 ?>



	<link rel="stylesheet" href="css/main.css"/>
 

<link rel="stylesheet" href="css/navigation.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">  
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?></title>
</head>
<script type="text/javascript">

function showMenu()
{
if ((screen.width > 480)) {
   $('#navigation').css('display','block');
  }

  
}
function navDrop()
{
$('#navigation').slideToggle();
}

</script>
<body onresize="showMenu();">
	<div id="main">
		<div id="header">
        	<a href="index.php">
    		<div id="logo">
    	 		<span id="logo1">Open</span><span id="logo2">Education</span>
                <a href="#" id="pull" onclick="navDrop();"><img src="images/nav-icon.png" width="25px" height="25px"  /></a>  
         	</div>
            </a>
  			<div id="navigation">
  				<?php require 'navigation.php'; ?>
  			</div>
    	</div><!-- end of header -->