<?php

include('php/general-functions-1.0.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mars Imager Rovers</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="description" content="Search images from Mars with rovers such as Curiosity, Spirit, and Opportunity"/>
	<meta name="author" content="Michael Mamczynski">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="components/main.css"/>
	<script src="components/product-scripts-1.0.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CFCNFKJV69"></script>
	<script src="components/google-scripts-1.0.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
</head>
<body onLoad="setCookies()">
	<nav class="navbar navbar-light bg-white ">
		<a class="navbar-brand mx-4 p-2" href="homePage.php">
			<img src="/components/images/general/marsLogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
		Mars Imager
		</a>
		<ul class="navbar-nav flex-row mx-4">
		    <li class="nav-item mx-2">
		    	<a class="nav-link " href="homePage.php">Home</a>
		    </li>
		    <li class="nav-item mx-2">
		    	<a class="nav-link active" href="roverImager.php">Imager</a>
	   		</li>
		</ul>
	</nav>

	<div class="container bg-light h-100">
		<div class="row">
			<div class="col">
				<form id="roverForm" method="post" action="php/form-handler-1.0.php">
					<h1 class="fs-1">Select a date.</h1>
					<input type="date" id="searchDay" name="searchDay" <?php echo 'value="'.$controller->getSearchDay().'"'; ?>>
					<p class="fs-4">Which rover do you want to view?</p>
					<div class="form-check">
						<input type="radio" id="rover1" class="form-check-input" name="rover" value="Curiosity" checked >
						<label class="form-check-label" for="rover1" id="label1" >Curiosity (Aug 6, 2012 to Now)</label>
					</div>
					<div class="form-check">
						<input type="radio" id="rover2" class="form-check-input" name="rover" value="Opportunity">
						<label class="form-check-label" for="rover2" >Opportunity (Jan 25, 2004 to Jun 11, 2018)</label>
					</div>
					<div class="form-check">
						<input type="radio" id="rover3" class="form-check-input" name="rover" value="Spirit">
						<label class="form-check-label" for="rover3" >Spirit (Jan 4, 2004 to Mar 21, 2010)</label>
					</div>
					<button type="submit" class="btn btn-primary mt-1" id="submit">Submit</button>
				

			</div>
			<div class="col">
					<?php

						displayCameraRadio($controller->getRoverType());
					
					?>
			</div>
			</form>	
		</div>
		<hr>
		<div class="row">
			<?php 
			//display mars photos

			$controller->printRoverAPI();

			?>
		</div>
		<footer id='footer' class='row text-center '>
			<div class="text-white pt-3">
				<p><small>This website utilizes PHP for its backend language and bootstrap for its design. The rover imager code is designed with MVC logic for reusable code.<br>Created by <a href="http://michaelmamczynski.com/">Michael Mamczynski</a></small></p>
			</div>
		</footer>
	</div>

	<script src="components/lowerproduct-scripts-1.0.js"></script>
	<script type="text/javascript">
 	const observer = lozad(); // lazy loads elements with default selector as '.lozad'
 	observer.observe();
	</script>
</body>
</html>
