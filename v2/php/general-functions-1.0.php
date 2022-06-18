<?php

//Check if a session is started at the beggining of every page and starts one.
require_once ('session-start-1.0.php');
$sessionStart = new ClassSessionStart();
$sessionStart->startSession();
//Controller for Nasa API and requires session start
require_once ('controller-rover-1.0.php');
require_once ('model-rover-1.0.php');
require_once ('view-rover-1.0.php');
$controller = new ClassControllerRover();
$controller->setRoverAPI($_SESSION['searchDay'],$_SESSION['roverType'],$_SESSION['cameraType'],null);


//Display all available camera angles for the certain rover
function displayCameraRadio ($rT){
	echo "<p class='fs-4'>Available camera angles for $rT</p>";

	$availCamsCuriosity = array('FHAZ' => "Front Hazard Avoidance Camera", "RHAZ" => "Rear Hazard Avoidance Camera" , "MAST" => "Mast Camera", "CHEMCAM" => "Chemistry and Camera Complex", "MAHLI"=>"Mars Hand Lens Imager", "MARDI" => "Mars Descent Imager", "NAVCAM"=>"Navigation Camera");
	$availCamsOpportunitySpirit = array('FHAX' => "Front Hazard Avoidance Camera", "RHAZ" => "Rear Hazard Avoidance Camera" , "NAVCAM"=>"Navigation Camera","PANCAM"=>"Panoramic Camera","MINITES"=>"Miniature Thermal Emission Spectrometer");

	if ($rT == "Curiosity") {
		$availCams = $availCamsCuriosity;
	} else {
		$availCams = $availCamsOpportunitySpirit;
	}
	echo "
	<div class='form-check'>
		<input type='radio' class='form-check-input' id='roverCamAll' name='camera' value='all' checked>
		<label class='form-check-label' for='roverCamAll'>All Camera Angles</label>
	</div>
	";	

	$camPosition = 0;
	foreach ($availCams as $cam => $description) {
		echo"
			<div class='form-check'>
				<input type='radio' id='roverCam$camPosition' class='form-check-input' name='camera' value='$cam'>
				<label class='form-check-label' for='roverCam$camPosition' >$description</label>
			</div>
		";
		$camPosition++;
	}
}




?>