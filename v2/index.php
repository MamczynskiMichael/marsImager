<?php 
include('php/general-functions-1.0.php');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mars Imager</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="description" content="Search images from Mars with rovers such as Curiosity, Spirit, and Opportunity"/>
	<meta name="author" content="Michael Mamczynski">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="components/main.css"/>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CFCNFKJV69"></script>
	<script src="components/google-scripts-1.0.js"></script>
</head>
<body>


<div class="container h-100 d-flex justify-content-center text-center">
	<div class="my-auto row">
		<div class="col">
			<h1 class="display-1">Welcome to Mars Imager</h1>
			<form id='indexform' action="php/validate-user-1.0.php" method="POST">
			  <input class="btn btn-primary btn-lg g-recaptcha" type="submit" data-sitekey="6LcueQogAAAAABMckbUIlOtP4cSTBf7rtcUxnIbP" data-callback='onSubmit' value="Enter">
			</form>
		</div>
	</div>
</div>



</body>
</html>