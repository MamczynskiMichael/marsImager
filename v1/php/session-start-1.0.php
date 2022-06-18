<?php 
class classSessionStart {
	function startSession() {
		if (session_status() === PHP_SESSION_NONE) {
		    session_start();
		}
	}
}

?>