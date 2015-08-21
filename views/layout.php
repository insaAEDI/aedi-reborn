<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/png" href="/assets/img/logos/logo_aedi_2015.png" >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $stylesheet; ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<title>AEDI - <?php echo $title; ?></title>
</head>
<body>
<nav>
    <?php echo $menu_content; ?>
</nav>
<section>
    <?php echo $body_content; ?>
</section>
<footer class="footer-distributed">

			<div class="footer-right">

			<p class="footer-links">
					<a href="/etudiants/evenements">Etudiants</a>
					·
					<a href="/entreprises/RIFs">Entreprises</a>
					·
					<a href="/apropos">A Propos</a>
					·
					<a href="/contact">Contact</a>
					
				</p>

			</div>

			<div class="footer-left">
			<p class="footer-links">AEDI &copy; 2015</p>
			</div>

		</footer>
</body>
</html>
