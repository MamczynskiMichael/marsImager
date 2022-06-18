<?php
/**
 * Controller for the NASA rover API
 * Handles incoming posts and sessions
 * and setting defaults for things comming in
 */
class classControllerRover 
{
	public $s;
	public $r;
	public $c;
	public $l;
	function __construct(){
		if (empty($_SESSION['searchDay'])) {
			$_SESSION['searchDay'] = $this->s;
		}
		if (empty($_SESSION['roverType'])) {
			$_SESSION['roverType'] = $this->r;
		}
		if (empty($_SESSION['cameraType'])) {
			$_SESSION['cameraType'] = $this->c;
		}
		if (empty($_SESSION['incLdImg'])) {
			$_SESSION['incLdImg'] = 0;
		}
		if (empty($_SESSION['chckInc'])) {
			$_SESSION['chckInc'] = true;
		}
		
	}

	function setRoverAPI($s, $r, $c){
		if ($s === null){
			$date = date("Y-m-d", strtotime("-2 days"));
			$this->s = $date;
		} else {
			$this->s = $s;
		}
		if ($r === null){
			$r = "Curiosity";
			$this->r = $r;
		} else {
			$this->r = $r;
		}
		if ($c === null){
			$c = "all";
			$this->c = $c;
		} else {
			$this->c = $c;
		}

		
		$_SESSION['searchDay'] = $this->s;
		$_SESSION['roverType'] = $this->r;
		$_SESSION['cameraType'] = $this->c;
		
	}
	function incRoverAPI($l){
		if ($l === null) {
			$_SESSION['chckInc'] = false;
			$this->l = 0;
		} else {
			$_SESSION['chckInc'] = true;
			$this->l = $l;
		}
		
		$_SESSION['incLdImg'] = $this->l;
	}

	function printRoverAPI(){
		$model = new classModelRover();
		$view = new classViewRover();

		$view->displayRoverImg($model->roverPhotoData(),$model->getTotalImg());
		$view->displayRoverIncr($model->incrementImages());

	}

	function getSearchDay(){
		$model = new classModelRover();
		$view = new classViewRover();
		return $view->displayRoverData($model->getSearchDay());
	}
	function getRoverType(){
		$model = new classModelRover();
		$view = new classViewRover();
		return $view->displayRoverData($model->getRoverType());
	}
	function getCameraType(){
		$model = new classModelRover();
		$view = new classViewRover();
		return $view->displayRoverData($model->getCameraType());
	}

}

?>