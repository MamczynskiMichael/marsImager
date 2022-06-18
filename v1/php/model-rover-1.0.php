<?php 
/**
 * Rover model that access NASA API for images
 * This model handels the return of the IMG as well as error handling
 * and incremental loading of images
 */
class classModelRover
{
	$searchDay;
	$roverType;
	$cameraType;
	$error;


	$incLdImg;
	$totalImg;



	function __construct(){
		$this->searchDay = $_SESSION['searchDay'];
		$this->roverType = $_SESSION['roverType'];
		$this->cameraType = $_SESSION['cameraType'];
		$this->incLdImg = $_SESSION['incLdImg'];
		if (!empty($_SESSION['error'])) {
			$this->error = $_SESSION['error'];

			$_SESSION['error'] = null;
		} else {
			$_SESSION['error'] = null;
			$this->error = $_SESSION['error'];
		}

	}
	function getSearchDay(){
		return $this->searchDay;
	}
	function getRoverType(){
		return $this->roverType;
	}
	function getCameraType(){
		return $this->cameraType;
	}
	function getTotalImg(){
		return $this->totalImg;
	}

	function roverPhotoData(){
		if (!empty($this->searchDay)&&!empty($this->roverType )) {
			$jsonMarsPhotos = file_get_contents("https://api.nasa.gov/mars-photos/api/v1/rovers/".$this->roverType."/photos?earth_date=".$this->searchDay."&api_key=QWTvKdaG5yRILqVHFtVQnBr8nItlBSiEevgwmyfZ");
			$photoData = json_decode($jsonMarsPhotos,true);

			if (isset($photoData["photos"][0]["img_src"])) {
				$this->totalImg = count($photoData["photos"]);
				//How many images appear and increase per click
				$minNumImg = 10;
				//Prevent increment on page refresh
				if ($_SESSION['chckInc'] === true) {
					$_SESSION['chckInc'] = false;
					//Check if all should imgs should be shown
					if ($this->incLdImg === "all") {
						$minNumImg = $this->totalImg;
						$_SESSION['incLdImg'] = $this->totalImg;
						$this->incLdImg = $_SESSION['incLdImg'];	
					} else if ($this->totalImg<$minNumImg || $this->incLdImg + $minNumImg >= $this->totalImg) {
						//Dont increment if there are no more images or less than minNumber
						$minNumImg = $this->totalImg;
						$_SESSION['incLdImg'] = $this->totalImg;
						$this->incLdImg = $_SESSION['incLdImg'];
					} else if ($this->incLdImg + $minNumImg < $this->totalImg && $this->incLdImg != 0) {
							//Increment if there is room
							$this->incLdImg = $this->incLdImg + $minNumImg;
							$_SESSION['incLdImg'] = $this->incLdImg;
							$minNumImg = $this->incLdImg ;	
						} 		
				} else if ($this->totalImg<$minNumImg) {
					//less than min on default day fix
					$minNumImg = $this->totalImg;
				} 
				//Print all images
				if (!isset($this->cameraType) || $this->cameraType === 'all') {		
					for ($i=0; $i < $minNumImg; $i++) { 
						$imgSrc[] = $photoData["photos"][$i]["img_src"];		
					}

					return $imgSrc;
				} else {
				//Print all images of certain camera type		
					$countRemoved = 0;
					for ($i=0; $i < $this->totalImg; $i++) {

						if ($photoData["photos"][$i]["camera"]["name"] == $this->cameraType) {
							$imgSrc[] = $photoData["photos"][$i]["img_src"];
						} else {
							$countRemoved ++;
						}
					}
					if ($countRemoved == $this->totalImg) {
						$this->totalImg = 0;
						$_SESSION['error'] = "No Image Found";
						return null;
					} else {
						$this->totalImg = count($imgSrc);
						$imgSrc = array_slice($imgSrc,0,$minNumImg);
						return $imgSrc;
					}
				}
			} else {
				$_SESSION['error'] = "No Image Found";
				return null;
			}
		}
	}


	function incrementImages(){
		if ($this->incLdImg < $this->totalImg && $this->incLdImg != 0) {
			return $this->incLdImg;
		} else if ($this->incLdImg == 0 && $this->totalImg >= 10) {
			$this->incLdImg = 15;
			return $this->incLdImg;
		} else {
			return false;
		}
		
	}

}
?>