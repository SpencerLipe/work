<?php

require( 'classes/Main.php' );

$button = '<input type="button" id="stop" value="fucking sweetly - obnoxious " />';

?>


<html>
	<head>
		<link rel='stylesheet' href="resources/css/style.css" type="text/css" >
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="resources/js/default.js"></script>
	</head>
	<body>
		<div id="inner">
			<header>
				<?php echo $button; ?>
				<div id="font">
					<h1><?php Main::hello(); ?></h1>
					
					<?php Main::p( 'I\'m an awesome paragraph' ); ?>
				</div>
			</header>
			<article>
				<?php echo $button; ?>
				<img src="resources/img/image5653531.gif" />
			</article>
			<footer>

				<a href="http://pornhub.com"><?php Main::hello(); ?></a>
			</footer>
		</div>

	</body>
