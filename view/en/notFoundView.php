<?php require('config/config.php'); ?>

<!DOCTYPE html>
<html lang="en" xmlns:og="http://ogp.me/ns#"> <!-- xmlns to enable open graph -->

<head>
	
	<!-- Select UTF8 -->
	<meta charset="utf-8">

	<!-- Information -->	
	<title>404</title>
	
	<style type="text/css">
/* Background image */

		body, html {
			height: 100%;
			padding: 0;
			margin: 0;
		}

		.bg {
			/* The image used */
			background-image: url("<?= $not_found_img ?>");

			margin:0;
			padding:0;

			/* Full height */
			height: 100%;
			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>

</head>


<body>

<div class='bg'>
</div>

</body>
</html>



