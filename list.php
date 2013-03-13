<?php
require_once "library/config.php";
require_once "library/database.php";
require_once "library/university-functions.php";
require_once "library/branch-functions.php";
require_once "library/link-functions.php";
?>
<?php
if(isset($_GET['crsId']) && $_GET['crsId']!='')
{
	$crsId=$_GET['crsId'];
	}
	
?>	
<?php
require_once "library/config.php";
require_once "library/database.php";
require_once "library/university-functions.php";
require_once "library/branch-functions.php";

$title="Open Education";
$cssArray=array('list.css','css/allCourses.css');
require_once 'header.php';
?>

 
        <div id="content">
    		<div id="courses" class="block">
            <fieldset>
            <legend>Links</legend>
        		
       			<div id="linkTable" style="font-size:14px">   
<?php
$result = courseRelatedLinks($crsId);
if(count($result)>0)
{
	?>
	<table id="linkTable" width="100%">
        <tr>
           <th align="left">Description</th>
           <th align="left">URL</th>
           <th align="left">Source</th>
        </tr>
	<?php
foreach($result as $link)
{
	extract($link);
	$uniName = getUniversityFromList($uni_id);
	?>         		
<tr> 
     <td> <?php echo $link_name; ?>  </td>
     <td class="wholeURL" ><a style="color:#0000FF; text-decoration:underline" href="<?php echo $href; ?>" target="_blank"><?php echo $href; ?></a> </td>
    <td class="shortURL" ><a style="color:#0000FF; text-decoration:underline" href="<?php echo $href; ?>" target="_blank">Click Here</a> </td>
     <td> <?php echo $uniName;  ?>  </td>
</tr>

<?php
}
?>
</table>
<?php
}
else
{
?>
Sorry, No links Available.
<?php
}
?>
</div>   <!-- end of linkTable -->
            </fieldset>
        		</div><!-- end of courses -->
			
		    
       
    
    
    </div><!-- end of content -->
    
    
<?php    
require_once 'footer.php';
?>       