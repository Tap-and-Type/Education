<?php
require_once "library/config.php";
require_once "library/database.php";
require_once "library/university-functions.php";
require_once "library/branch-functions.php";
$cssArray=array('gtuBranches.css','chooseSemester.css');
$title="GTU - Open Education";
require_once 'header.php';
?>

		<div id="listDiv">
      			<div id="listFrame">
      				
         			<div id="selectSemField">
             	 <fieldset >
                 	<legend>Select Semester</legend>
                    <div id="semesterList">
                        <a href="#" onclick="selectSem(1)"   target="_parent"><div class="sem">Semester 1</div></a>
                        <a href="#" onclick="selectSem(2)" target="_parent"><div class="sem">Semester 2</div></a>
                        <a href="#" onclick="selectSem(3)" target="_parent"><div class="sem">Semester 3</div></a>
                        <a href="#" onclick="selectSem(4)" target="_parent"><div class="sem">Semester 4</div></a>
                        <a href="#" onclick="selectSem(5)" target="_parent"><div class="sem">Semester 5</div></a>
                        <a href="#" onclick="selectSem(6)" target="_parent"><div class="sem">Semester 6</div></a>
                        <a href="#" onclick="selectSem(7)" target="_parent"><div class="sem">Semester 7</div></a>
                        <a href="#" onclick="selectSem(8)" target="_parent"><div class="sem">Semester 8</div></a>
                    </div>
        		</fieldset>
                </div>
        	</div>
				<div id="closeList" onClick="closeList();"><img src="images/close.png" /></div>
        </div> 
		
       <div id="content" style="min-height:100%; height:100%;">
        
       
        
        
        <?php
		$aplha=array("a","b","c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x","y","z");
  			for($s=0;$s<count($aplha);$s++)
  				{
					
					$a = $aplha[$s];
		            $result = listBranchAlphabetically($a);
					if(count($result))
					{
					
		?>
			
		<div id="gtuBranches" class="block">
        			<fieldset>
        			<legend><?php echo strtoupper($aplha[$s]); ?></legend>
         
						<?php
                              $num=count($result);
				
				    for($i=0;$i<$num;$i++)
				       {	
							extract($result[$i]);
                        ?>			   				
                                     
                         
                          
                                   
                                 <div class="subDiv" onClick="showList(<?php echo $br_id; ?>);"> 
								 <?php echo $br_name; ?>
                                 </div> 
                              
                         <?php 
						} ?>
     </fieldset>
        </div> <!-- end of gtuBranches -->  
              
        <?php 
		        } }
				
				?>
		   
       
   
    
   
    </div><!-- end of content -->
    

	
<script type="text/javascript" >
function selectSem(semId){
	$('#listDiv').fadeOut(); 
	window.location.href="allCourses.php?brId="+window.choosebrId+"&semId="+semId;
	}	
function showList(brId){
	
	/*window.location.href="chooseSemester.php?brId="+brId;
	*/
	
	 $('#listFrame').attr('src', 'chooseSemester.php?brId='+brId);
	 window.choosebrId=brId;
  $('#listDiv').fadeIn(); 
	}

function closeList()
{
	
	$('#listDiv').fadeOut();
	}	

</script>    
<?php
require_once 'footer.php';
 ?>
