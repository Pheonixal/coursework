<!DOCTYPE html>

<html lang="ru">
<head>
	<?php require_once  "functions/functions.php" ?>
	<link rel="shortcut icon" href="/img/library.ico" type="image/x-icon">
	<meta charset="UTF-8" />
	<title>WEB LESSIONS</title>
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

	<?php require_once "blocks/header.php" ?>

	<section class="order">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="sell_descr">Ең жаңа сабақтар</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="main_content">
		<div class="container">
			<div class="row">	
				<div class="col-md-8">
					<div class="content-text">


						<?php 
						$books = NewBook(5, '');
						for ($i =0; $i < count($books); $i++){

							echo "<div class=\"blog_item\">";
							echo '<div class=\row\>
							<div class="col-md-12">
								<h3><a href="lesson.php?id='.$books[$i]["id"].'" >'.$books[$i]["title"].'</a></h3>
							</div>
							<div class="col-md-4">
								<img src="img/'.$books[$i]["id"].'.jpg" alt="alt">
							</div>
							<div class="col-md-8">
								<p>'.$books[$i]["intro_text"].' </p>
							</div>
						</div>
					</div>';					

				}

				?>

			</div>

		</div>
		<div class="col-md-4">

			<aside class="right_aside">
				<p>Сайт жасаудың негізгі кезеңдерінің бірі тестілеу:</p>
				<ul>
					<li>
						Сілтеменің жұмысы</li>
						<li>
							Мәтіндегі қателер</li>
							<li>
								Навигацияның тиімділіғі</li>
								<li>
									Пошта және басқа формалардың дұрыстығы</li>
									<li>
										Графикалық файлдардың ашылуы</li>
										<li>
											Әр түрлі браузерлерде сайттық жұмысы</li>
											</ul>
												</aside>
											</div>
										</div>
									</div>
								</section>
								<?php require_once "blocks/slider.php" ?>
								<?php require_once "blocks/footer.php" ?>
							</body>
							</html>