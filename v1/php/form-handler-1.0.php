<?php
//Handler for forms of the NASA API
require_once ('session-start-1.0.php');
require_once ('controller-rover-1.0.php');
require_once ('model-rover-1.0.php');
require_once ('view-rover-1.0.php');
$sessionStart = new classSessionStart();
$sessionStart->startSession();
$controller = new classControllerRover();
$controller->setRoverAPI($_POST['searchDay'],$_POST['rover'],$_POST['camera']);
$controller->incRoverAPI($_POST['loadMore']);

header('Location: ../roverImager.php');
?>