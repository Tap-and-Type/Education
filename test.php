<?php
require_once "library/config.php";
require_once "library/database.php";
require_once "library/university-functions.php";
require_once "library/branch-functions.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="test.css"/>
<link rel="stylesheet" href="css/navigation.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>EduQuench</title>
</head>

<body>
	<div id="main">
	<div id="header">
    	<div id="logo">
    	 <span id="logo1">Edu</span><span id="logo2">Quench</span>
         </div>
  <div id="navigation">
  <?php require 'navigation.php'; ?>
  </div>
    </div><!-- end of header -->
	<div id="content">
    
    	<div id="courses" class="subContent">
        	<span class="title">Courses</span>
            <div class="row">
  			<div  class="subCourses">Computer Graphics</div>
  			<div  class="subCourses">Jquery</div>
		  	<div  class="subCourses"></div> 
  			<div  class="subCourses"></div>
  			<div  class="subCourses"></div>
            </div>
            <div class="row">
            <div  class="subCourses"></div>
  			<div  class="subCourses"></div>
		  	<div  class="subCourses"></div> 
  			<div  class="subCourses"></div>
  			<div  class="subCourses"></div>
            </div>
            <div class="row">
            <div  class="subCourses"></div>
  			<div  class="subCourses"></div>
		  	<div  class="subCourses"></div> 
  			<div  class="subCourses"></div>
  			<div  class="subCourses"></div>
            </div>
            <div class="row">
            <div id="seeAllCourses" class="subContent"><a href="allCourses.php"><h2>Browse all Courses alphabetically</h2></a>
            </div>
        </div>
		</div>
		
		<div id="gtu" class="subContent">
        <span class="title">GTU Engineering Branches</span>
        <div class="row">
  			<div id="gtu1" class="subGtu"> </div>
  			<div id="gtu2" class="subGtu"> </div>
 			 <div id="gtu3" class="subGtu"> </div> 
 			 <div id="gtu4" class="subGtu"> </div>
 			 <div id="gtu5" class="subGtu"> </div>
        </div>     
             <div class="row">
             <div id="seeAllGtu" class="subContent"><a href="##"><h2>Browse all Branches Semester-wise</h2></a></div>
             </div>
		</div>
        
		
		<div id="branches" class="subContent">
        <span class="title">Branches</span>
         
     		<?php
			
   				$result = listBranch();
				$num=count($result);
				$rows=$num/5;
				if($num%5!=0)
				{
					++$rows;
				}
				    for($i=0;$i<$num;$i++)
				       {	
					   		if($i%5==0)
					   		{
			?>			   				
						  <div class="row">
             <?php
											
					  		}			
						
						
							extract($result[$i]);
			?>
				 <div class="subBranches">
				     <a href="allCourses.php?brId=<?php echo $br_id ?>"><span> <?php echo $br_name; ?></span> </a>
	    		 </div>
  			       <?php  
  						if($i%5==4)
							{
					?>		
                    </div>
					<?php		
						--$rows;
							}	       
				        
				      }
					  if($rows<0) 
					  {
					?>
                    </div>	
                    <?php  
					
						  }
			        ?>
                
     
        </div>    
        </div>
       
<div id="universities" class="subContent">
        <span class="title">Universities</span>
         
     		<?php
			
   				$result = listUniversity();
				$num=count($result);
				$rows=$num/5;
				if($num%5!=0)
				{
					++$rows;
				}
				    for($i=0;$i<$num;$i++)
				       {	
					   		if($i%5==0)
					   		{
			?>			   				
						  <div class="row">
             <?php
											
					  		}			
						
						
							extract($result[$i]);
			?>
				 <div id="uninames">
				     <span> <?php echo $uni_name; ?></span> 
	    		 </div>
  			       <?php  
  						if($i%5==4)
							{
					?>		
                    </div>
					<?php		
						--$rows;
							}	       
				        
				      }
					  if($rows<0) 
					  {
					?>
                    </div>	
                    <?php  
					
						  }
			        ?>
                
     
        </div>    
        </div>
       
    
    
    </div><!-- end of content -->
    <div id="footer">
    </div><!-- end of footer -->
	</div>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/navigation.js" ></script>

</body>
</html>