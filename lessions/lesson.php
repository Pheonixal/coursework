<!DOCTYPE html>
 
<html lang="ru">
 
<head>
	<?php require_once  "functions/functions.php" ?>
	<link rel="shortcut icon" href="/img/library.ico" type="image/x-icon">
	
	<meta charset="utf-8" />
	<title>Lesson</title>
	<meta name="description" content="bootstrap" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/media.css" />
</head>
<body>

	 <?php require_once "blocks/header.php" 	?>
	
<?php  
$books = NewBook(1, $_GET["id"]);
							echo '<div class="blog_item">
							
							<div class="col-md-12">
								<h2>Тақырып: '.$books["title"].' </h2>
								
							</div>
							
							<div class="col-md-12">
								<p>'.$books["full_text"].' </p>
							</div>
						
					</div>';

?>
	
	<?php require_once "blocks/footer.php" ?>
	<?php require_once "blocks/slider.php" ?>
</body>
</html>