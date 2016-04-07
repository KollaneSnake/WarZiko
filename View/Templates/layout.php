<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
</head>
<body>
		<?php 
			require_once(ROOT.DS.'View'.DS.'Templates'.DS.'header.php'); 
		?>
	<div class="container">
		<?php echo $content; ?>
	</div>
		<?php 
			require_once(ROOT.DS.'View'.DS.'Templates'.DS.'footer.php'); 
		?>
	
</body>
</html>