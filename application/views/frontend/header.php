<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title><?= $title ?></title>
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/lope.png" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
	<!-- Core theme CSS (includes Bootstrap)-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css">
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url() ?>assets/img/logo_sindasa.png" alt="SINDASA" /> SINDASA</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars ml-1"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#profil">Profil</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#galeri">Galeri</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('cekstunting') ?>">Cek Stunting</a></li>
					<li class="nav-item"><a class="nav-link" target="_blank" href="<?= base_url('auth/login') ?>">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>