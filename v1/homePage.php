<!DOCTYPE html>
<html class="homePageHtml">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mars Imager Home</title>
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="description" content="Search images from Mars with rovers such as Curiosity, Spirit, and Opportunity"/>
	<meta name="author" content="Michael Mamczynski">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="components/main.css"/>
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-CFCNFKJV69"></script>
	<script src="components/google-scripts-1.0.js"></script>
</head>
<body>
	<nav class="navbar navbar-light bg-white ">
		<a class="navbar-brand mx-4 p-2" href="homePage.php">
			<img src="/components/images/general/marsLogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			Mars Imager
		</a>
		<ul class="navbar-nav flex-row mx-4">
		    <li class="nav-item mx-2">
		    	<a class="nav-link active" href="homePage.php">Home</a>
		    </li>
		    <li class="nav-item mx-2">
		    	<a class="nav-link" href="roverImager.php">Imager</a>
	   		</li>
		</ul>
	</nav>
	<div class="container bg-light h-100">
		<div class="row">
			<h1 class="display-1 p-3 text-center">What is Mars Imager?</h1>
		</div>
		<div class="row justify-content-md-center">
			<div class="col col-md-5 ">
				<img class='img-thumbnail homePhoto' src="\components\images\general\sizeCompRovers.jpg">
			</div>
			<div class="col col-md-6">
				<h1 class="fs-1 lead">See images taken by rovers on Mars!</h1>
				<p>This site allows you to search dates for every image that the Curiosity, Opportunity, and Spirit rovers took over the years using NASAs own API. You are able to choose specific times as well as which camera took the photo. From wide angle lenses seeing the landscape to microscopes looking at dirt there are thousands of photos to look at. <a href="roverImager.php">Click here to explore.</a></p>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col col-md-5">
				<img class='img-thumbnail homePhoto ' src="\components\images\general\curiosity.jpg">
			</div>
			<div class="col col-md-6">
				<h1 class="fs-1 lead">See Mars through the Curiosity rover</h1>
				<p>The Curiosity rover was launched on November 26, 2011, and landed on Mars on August 6, 2012, with the goal of inspecting the Gale crater over the span of two years. The Curiosity rover exceeded expectations and has continued to study the climate and geology of Mars for the past 10 years. The rover has a multitude of specialized cameras and systems in place that are able to investigate the chemical makeup of rocks and soil as well as detect a wide range of radiations that effect the surface. Curiosity has allowed future crewed missions more information so they can safely enter Mars.</p>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col col-md-5">
				<img class='img-thumbnail homePhoto ' src="\components\images\general\opportunityAndSpirit.jpg">
			</div>
			<div class="col col-md-6">
				<h1 class="fs-1 lead">Spirit and twin rover Opportunity</h1>
				<p>The Spirit rover was launched on June 10, 2003, and landed on January 4, 2004, and a month later Opportunity twin to Spirit was launched which landed on January 25, 2004. The mission for these two rovers were identify the rocks and soil on Mars and to see if there were clues of past water activity. The rovers where able to find signs of water existing on Mars through sand samples as well as high salt patches. The rovers were planned for a 90-day missions but lasted many more years than expected. Spirit lasted 6 years and had lost contact with Earth on March 22, 2010, Opportunity fared better lasting 14 years losing contact with Earth on June 10, 2018</p>
			</div>
		</div>
		<footer id='footer' class='row text-center '>
			<div class="text-white pt-3">
				<p><small>This website utilizes PHP for its backend language and bootstrap for its design. The rover imager code is designed with MVC logic for reusable code.</br>Created by <a href="http://michaelmamczynski.com/">Michael Mamczynski</a></small></p>
			</div>
		</footer>
	</div>
</body>
</html>