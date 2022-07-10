<?php
//Check if a session is started at the beggining of every page and starts one.
require_once ('session-start-1.0.php');
$sessionStart = new ClassSessionStart();
$sessionStart->startSession();
//Allows Nasa Rover to send Cookies to server
setcookie('_ga', '', ['samesite' => 'None', 'secure' => true]);
//Controller for Nasa API and requires session start
require_once ('controller-rover-1.0.php');
require_once ('model-rover-1.0.php');
require_once ('view-rover-1.0.php');
$controller = new ClassControllerRover();
$controller->setRoverAPI($_SESSION['searchDay'],$_SESSION['roverType'],$_SESSION['cameraType'],null);


//Display all available camera angles for the certain rover
function displayCameraRadio ($rT){


	$availCamsCuriosity = array('FHAZ' => "Front Hazard Avoidance Camera", "RHAZ" => "Rear Hazard Avoidance Camera" , "MAST" => "Mast Camera", "CHEMCAM" => "Chemistry and Camera Complex", "MAHLI"=>"Mars Hand Lens Imager", "MARDI" => "Mars Descent Imager", "NAVCAM"=>"Navigation Camera");
	$availCamsOpportunitySpirit = array('FHAX' => "Front Hazard Avoidance Camera", "RHAZ" => "Rear Hazard Avoidance Camera" , "NAVCAM"=>"Navigation Camera","PANCAM"=>"Panoramic Camera","MINITES"=>"Miniature Thermal Emission Spectrometer");

	if ($rT == "Curiosity") {
		$availCams = $availCamsCuriosity;
	} else {
		$availCams = $availCamsOpportunitySpirit;
	}
	function listCameraOptions($availCams){

	}

	echo '


	  
	  <button type="button" class="btn btn-info mt-1" data-bs-toggle="modal" data-bs-target="#submitPostModal">Filter by camera</button>

	  <div class="modal fade" id="submitPostModal" tabindex="-1" role="dialog" aria-labelledby="submitPostModalLabel" aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="submitPostModalLabel">Available cameras</h5>
	            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	          </div>
	          
	          <div class="modal-body text-start">
	             <div class="form-check">
	               <input class="form-check-input" type="radio" name="camera" id="roverCamAll" value="all" checked>
	               <label class="form-check-label" for="roverCamAll">
	                 All Angles
	               </label>
	             </div>
	             ';
	             $camPosition = 0;
	             foreach ($availCams as $cam => $description) {
	             	echo'
	             		<div class="form-check">
	             		  <input class="form-check-input" type="radio" name="camera" id="roverCam'.$camPosition.'" value="'.$cam.'">
	             		  <label class="form-check-label" for="roverCam'.$camPosition.'">
	             		    '.$description.'
	             		  </label>
	             		</div>
	             	';
	             	$camPosition++;
	             }

	          echo '
	             
	          </div>         
	          <div class="modal-footer">
	            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
	            <button class="btn btn-primary" type="submit" id="submit">Filter</button>
	          
	        </div>
	      </div>
	    </div>
	    </div>


	';	


}




?>