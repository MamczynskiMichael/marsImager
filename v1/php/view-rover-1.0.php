<?php
/**
 * View for rover information. Loops through avaliable images
 * displays information from model as well as
 * displaying the increment images button 
 */
class classViewRover
{
	public function displayRoverImg($imgSrc, $imgAmt)
	    {
	        if (empty($_SESSION['error'])){
	        	echo "<div class='text-center bg-light'>";
	        	echo "<h2 class='fs-1'>".$imgAmt." Images Found</h2>";
	        	//if there is one img
	        	if (is_string($imgSrc)) {
	        		echo "<img class='img-thumbnail marsphoto lozad' src=".$imgSrc.">";
	        	} else {
	        		//For multiple imgs
		        	for ($i=0; $i < count($imgSrc); $i++) { 
		        		echo "<img class='img-thumbnail marsphoto lozad' src=".$imgSrc[$i].">";
		        	}
	        	}
	        	echo "</div>";
	    	}  	else { 
	    			echo "<h2 class='text-center text-warning pt-3'>Try again: ".$_SESSION['error']."</h2>";
	        }
	    }
	    function displayRoverData($modelVariable){
			return $modelVariable;
	    }
	public function displayRoverIncr($imgInc){
		if ($imgInc != false){
			echo "
				<div id='footer' class='text-center pt-3'>
					<button form='roverForm' type='submit' name='loadMore' value='".$imgInc."' class='btn btn-primary'>Load More</button>
					<button form='roverForm' type='submit' name='loadMore' value='all' class='btn btn-primary'>Load All</button>
				</div>
				";
		}
	}



	


}

?>