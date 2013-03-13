<?php
require_once "library/config.php";
require_once "library/database.php";
require_once "library/university-functions.php";
require_once "library/branch-functions.php";

$title="Open Education";
$cssArray=array('home.css','chooseSemester.css');
require_once 'header.php';
?>

		
        <div id="content"> 
        
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
	
          
        <div id="intro">
        		
                Online video lectures by expert facuilties around the globe and useful eLearning web material on your finger tips.
               Constant updation's been going on. You'll find something new & valuable everytime you'll visit.
                
        </div>
            		
            		
        
       
        
    		<div id="courses" class="block">
        		 <fieldset>
            <legend>Courses</legend>
        
  						<a  class="subDiv" onClick="displayList(27)">PHP</a>
  						<a  class="subDiv" onClick="displayList(28)">Database</a>
		  				<a  class="subDiv" onClick="displayList(19)">iOS</a> 
  						<a  class="subDiv" onClick="displayList(26)">Android</a>
  						<a  class="subDiv" onClick="displayList(31)">HTML-CSS</a>
            		
					
            		                  
            		
            		
            		<div class="seeAll">
            			<div id="seeAllCourses" class="subContent"><a href="allCourses.php">Browse all Courses alphabetically</a></div>
            		</div>
                    <div class="clearBoth"></div>
                   </fieldset> 
        		</div><!-- end of courses -->
			
		
				<div id="gtu" class="block">
        				 <fieldset>
            <legend>Courses for GTU Engineering Branches</legend>
        			<div class="row">
                        <a id="gtu1" class="subDiv" onClick="showList(21)"> Computer</br>IT</a>
                        <a id="gtu1" class="subDiv" onClick="showList(29)"> Chemical</a>
                        <a id="gtu1" class="subDiv" onClick="showList(31)"> Electronics & Communication</a>
                         <a id="gtu1" class="subDiv" onClick="showList(32)"> Mechanical</a>
                         
        			</div>     
             		<div class="seeAll">
             			<div id="seeAllGtu" class="subContent"><a href="gtuBranches.php">Browse all Branches Semester-wise</a></div>
             		</div>
                    <div class="clearBoth"></div>
              </fieldset>      
				</div> <!-- end of gtu -->
        
		
				<div id="branches" class="block">
        			 <fieldset>
            <legend>Branches</legend>
         
						<?php
                        
                            $result = listBranch();
                            $num=count($result);
                           
                                for($i=0;$i<$num;$i++)
                                   {	
                                        extract($result[$i]);
                        ?>
                           <a class="subDiv" href="allCourses.php?brId=<?php echo $br_id ?>">  
                                 <span> <?php echo $br_name; ?></span> 
                             </a>
                            
                                <?php  
                                
                                      }
                                ?>
             </fieldset>               
     			<div class="clearBoth"></div>
        		</div> <!-- end of sub branch -->    
       	
				<div id="universities" class="block">
        			 <fieldset>
            <legend>Sources</legend>
         
							<?php
                            
                                $result = listUniversity();
                                $num=count($result);
                               
                                    for($i=0;$i<$num;$i++)
                                       {	
                                            
                            ?>			   				
                                          
                             <?php
                                                            
                                            		
                                        
                                        
                                            extract($result[$i]);
                            ?>
                                 <div class="subDivUni" id="uninames">
                                     <span> <?php echo $uni_name; ?></span> 
                                 </div>
                                   <?php     
                                      }
                                 ?>
                
     
        		</div> <!-- end of Universities -->    
       
    </fieldset>
    
    </div><!-- end of content -->
    
    <script type="text/javascript" >
    function selectSem(semId){
    if(semId==1 || semId==2){
    $('#listDiv').fadeOut(); 
	window.location.href="allCourses.php?brId=21&semId="+semId;
    }
    else
    {
    	$('#listDiv').fadeOut(); 
	window.location.href="allCourses.php?brId="+window.choosebrId+"&semId="+semId;
}
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


<script type="text/javascript" >
function displayList(crsId){
	
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