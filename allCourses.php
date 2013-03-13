<?php
require_once "library/config.php";
require_once "library/database.php";
require_once "library/university-functions.php";
require_once "library/branch-functions.php";
require_once "library/course-functions.php";
require_once "library/link-functions.php";
require_once "library/gtu-functions.php";

if(isset($_GET['brId']))
{
	$brId=$_GET['brId'];
	echo $brId;
	
}

if(isset($_GET['semId']))
{
	$semId=$_GET['semId'];
	echo $semId;
	
}
$cssArray=array('allCourses.css');
$title="All Courses - Open Education";
require_once 'header.php';

?>


	
  		<div id="content">
        
        <div id="listDiv">
			<iframe id="listFrame" src="list.php" ></iframe>
			<div id="closeList" onClick="closeList();"><img src="images/close.png" /></div>
		</div>
  			<?php
			
  			$aplha=array("a","b","c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x","y","z");
  			for($j=0;$j<count($aplha);$j++)
  				{
					if(isset($_GET['brId']) && isset($_GET['semId']))
	          			{
                 		$result = listCoursesForSemesterAlphabetically($brId,$semId,$aplha[$j]);
	          			}	
					else if(isset($_GET['brId']))
	          			{
                 		$result = listCoursesForBranchAlphabetically($brId,$aplha[$j]);
	          			}
	       			else
	          			{    
			  			$a = $aplha[$j];
		          		$result = listCoursesAlphabetically($a); 
		      			}
						
						if(dbNumRows($result))
						{
							$result=dbResultToArray($result);
							
							
					   			?>
   
  			<div class="block sorted">
            <fieldset>
        		<legend><?php echo strtoupper($aplha[$j]); ?></legend>
         
     		<?php
					
   				
						$num=count($result);
				
				    for($i=0;$i<$num;$i++)
				       {	
							extract($result[$i]);
							$courseDts=getCourseDetails($crs_id);
			?>
				 			<div class="sortedCourse" onClick="showList(<?php echo $crs_id; ?>);">
				     		<span> <?php echo $courseDts['crs_name']; ?></span> 
	    		 			</div>
  			       			<?php  
				      	}
					  
							?>	
                </fieldset>            
       			</div><!-- end of block -->  
      		<?php
						
						}
						
						}
					
  		?>    
        
  
     
 </div><!-- end of content -->
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" >
function showList(crsId){
	
	 /*$('#listFrame').attr('src', 'list.php?crsId='+crsId);

	$('#listFrame').load(function() {  $('#listDiv').fadeIn(); });*/
	window.location.href="list.php?crsId="+crsId;
	}

function closeList()
{
	
	$('#listDiv').fadeOut();
	}	



</script>
<?php    
require_once 'footer.php';
?>  

