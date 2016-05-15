<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href='Css/style.css'>
</head>
<body>

		<?php 
			require_once(ROOT.DS.'View'.DS.'Templates'.DS.'headerNav.php'); 
		?>



	<content>
		<?php echo $content; ?>
	</content>


		<?php 
			require_once(ROOT.DS.'View'.DS.'Templates'.DS.'footer.php'); 
		?>
	
</body>
</html>
