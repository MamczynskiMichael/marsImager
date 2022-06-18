<?php
/**
 * Takes errors from any page and prints the uniform error
 */
class classErrorHandler 
{
	public $error;
	function __construct($error) {
		if (isset($error)) {
			$this->error = $error;
		} else {
			$_SESSION['Error'] = null;
			$this->error = $_SESSION['Error'];
		}
	}

	
	function printError(){

		if ($this->error != null) {
			$errorMSG = "<h2 class='text-warning'>".$this->error."</h2>";
			echo $errorMSG;
			$_SESSION['Error'] = null;
			echo "<h1>1TESTING ".$_SESSION['Error']."</h1>";
		} 
		echo "<h1>5TESTING ".$_SESSION['Error']."</h1>";

	}

}

?>