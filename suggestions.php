<?php
require_once "library/config.php";
require_once "library/database.php";
require_once "library/university-functions.php";
require_once "library/branch-functions.php";
require_once "library/suggestions-functions.php";

if(isset($_GET['action']))
{
	if($_GET['action']=='add')
	{
		$success=insertSugg($_POST["name"], $_POST["email"], $_POST["suggest"] );
		
	}
	
	if($_GET['action']=='suggest')
	{
		$successful=insertSuggestLink($_POST["name1"], $_POST["email1"], $_POST["crsName1"], $_POST["link1"], $_POST["suggest1"] );
		
	}
	
	if($_GET['action']=='report')
	{
		$done=insertReportLink($_POST["name2"], $_POST["email2"], $_POST["crsName2"], $_POST["link2"], $_POST["suggest2"] );
		
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css"/>
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="css/suggestions.css"/> 
<link rel="stylesheet" href="css/navigation.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Suggestion Box!</title>
</head>

<body>
	<div id="main">
		<div id="header">
        	<a href="index.php">
    		<div id="logo">
    	 		<span id="logo1">Open</span><span id="logo2">Education</span>
         	</div>
            </a>
  			<div id="navigation">
  				<?php require 'navigation.php'; ?>
  			</div>
    	</div><!-- end of header -->
        
        <div id="content">
        	<div id="rmessage">
        <?php
if(isset($success)){
if($success==1)
{
	echo "Thank you ". $_POST['name']." for you valuable suggestions! We really appreciate that.";
	}
else
{
	echo "Oops! We did something wrong. Please try again.";
	}	
}
if(isset($successful)){
if($successful==1)
{
	echo "Thank you ". $_POST['name1']." for you valuable inputs! We really appreciate that. We are looking into it. ";
	}
else
{
	echo "Oops! We did something wrong. Please try again.";
	}	
}
if(isset($done)){
if($done==1)
{
	echo "Thank you ". $_POST['name2']." for you valuable inputs! We really appreciate that. We are looking into it. ";
	}
else
{
	echo "Oops! We did something wrong. Please try again.";
	}	
}
 ?>
 </div>
    <div id="tabs">
    <ul style="background:#fff; border:none; border-bottom:1px solid #aaa; margin-top:10px; margin-bottom:10px;">
        <li><a href="#tabs-1">General Suggestions</a></li>
        <li><a href="#tabs-2">Suggest links</a></li>
        <li><a href="#tabs-3">Report a concern about links</a></li>
    </ul>
    <div id="tabs-1">
    <form action="<?php echo $_SERVER['PHP_SELF'].'?action=add'; ?>" method="post">
<table>

<tr>
<td>Name : </td>
<td><input type="text" name="name"  id="name"/> </td>
</tr>

<tr>
<td>Email : </td>
<td><input type="text" name="email" id="email" /></td>
</tr>

<tr>
<td>Suggestions : </td>
<td><textarea rows="7" cols="35" name="suggest" id="suggestion"></textarea></td>
</tr>

<tr>
<td>
<input class="submit" type="submit"/>
</td>
</tr>
</table>

</form>

<div class="success">

 </div> <!-- End of success -->
</div>   <!-- End of tab-1 -->

        
   
    <div id="tabs-2">
        <form action="<?php echo $_SERVER['PHP_SELF'].'?action=suggest'; ?>" method="post">
<table>

<tr>
<td>Name : </td>
<td><input type="text" name="name1"  id="name1"/> </td>
</tr>

<tr>
<td>Email : </td>
<td><input type="text" name="email1" id="email1" /></td>
</tr>

<tr>
<td>Course name : </td>
<td><input type="text" name="crsName1" id="crsName1" /></td>
</tr>
<tr>
<td>Link for that course : </td>
<td><input type="text" name="link1" id="link1" /></td>
</tr>

<tr>
<td>Suggestions : </td>
<td><textarea rows="7" cols="35" name="suggest1" id="suggest1"></textarea></td>
</tr>

<tr>
<td>
<input class="submit" type="submit"/>
</td>
</tr>
</table>
</form>
<div class="successful">
<?php
if(isset($successful)){
if($successful==1)
{
	echo "Thank you ". $_POST['name1']." for you valuable inputs! We really appreciate that. We are looking into it. ";
	}
else
{
	echo "Oops! We did something wrong. Please try again.";
	}	
}
 ?>
 </div> <!-- end of successful -->

    </div>  <!-- end of tab-2 -->
    <div id="tabs-3">
    <form action="<?php echo $_SERVER['PHP_SELF'].'?action=report'; ?>" method="post">
<table>

<tr>
<td>Name : </td>
<td><input type="text" name="name2"  id="name2"/> </td>
</tr>

<tr>
<td>Email : </td>
<td><input type="text" name="email2" id="email2" /></td>
</tr>

<tr>
<td>Course name : </td>
<td><input type="text" name="crsName2" id="crsName2" /></td>
</tr>
<tr>
<td>Link for that course : </td>
<td><input type="text" name="link2" id="link2" /></td>
</tr>

<tr>
<td>Suggestions : </td>
<td><textarea rows="7" cols="35" name="suggest2" id="suggest2"></textarea></td>
</tr>

<tr>
<td>
<input  class="submit" type="submit"/>
</td>
</tr>
</table>

</form>
<div class="done">
<?php
if(isset($done)){
if($done==1)
{
	echo "Thank you ". $_POST['name2']." for you valuable inputs! We really appreciate that. We are looking into it. ";
	}
else
{
	echo "Oops! We did something wrong. Please try again.";
	}	
}
 ?>
 </div>  <!-- End of done -->

    
        
    </div> <!-- End of tab-3 -->
</div> <!-- End of tab -->
</div> <!-- End of Content -->

    
    
    <div id="footer">
</div><!-- end of footer -->
</div>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/navigation.js" ></script>
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
    <script>
    $(function() {
        $( "#tabs" ).tabs();
    });
    </script>
 <script type="text/javascript" src="js/validate.js" ></script>
  <script type="text/javascript" src="js/validationFunction.js" ></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#name").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
				
				
                
                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID."
                });
                
				jQuery("#suggestion").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
            });
            /* ]]> */
        </script>
        
           <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#name1").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
				
				
                
                jQuery("#email1").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID."
                });
				
				jQuery("#crsName1").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
				
				jQuery("#link1").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
                
				jQuery("#suggest1").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
            });
            /* ]]> */
        </script>


      <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
                jQuery("#name2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
				
				
                
                jQuery("#email2").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Please enter a valid Email ID."
                });
				
				jQuery("#crsName2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
				
				jQuery("#link2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
                
				jQuery("#suggest2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Required field."
                });
            });
            /* ]]> */
        </script>

</body>
</html>