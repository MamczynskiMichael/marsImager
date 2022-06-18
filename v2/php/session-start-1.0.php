<?php 
class ClassSessionStart {
	function startSession() {
		if (session_status() === PHP_SESSION_NONE) {
		    session_start();
		}
	}
}

?>