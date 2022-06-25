<!-- Untuk penjumlahan masing-masing status gizi -->
<?php
// 1) Gizi Buruk
$get1 = $this->db->query('SELECT * FROM cekstunting WHERE status_anak = "Gizi Buruk (Severely Wasted)"');
$count1 = $get1->num_rows();

// 2) Gizi Kurang

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?= $title; ?></title>
	<link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/img/lope.png" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Bootstrap core CSS     -->
	<link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="<?= base_url() ?>/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?= base_url() ?>/assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css2?family=Barlow&display=swap" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.theme.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/js/jquery-1.12.4.js">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/js/moment.min.js">

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

	<script>
		$(function() {
			$("#tgl_lahir").datepicker({
				onSelect: function(value, ui) {
					var today = new Date(),
						// age = today.getFullYear() - ui.selectedYear;
						age = (today.getFullYear() - ui.selectedYear) * 12 + today.getMonth() - ui.selectedMonth;
					$('#umur').val(age);
				},

				dateFormat: 'dd-mm-yy',
				changeMonth: true,
				changeYear: true,
				// yearRange: "c-100:c+0"
			});
		});
	</script>

</head>

<body>
	<div class="wrapper">
		<div class="sidebar" data-active-color="purple" data-background-color="black" data-image="<?= base_url() ?>/assets/img/sidebar-3.png">

			<!-- icon & nama logo disini -->
			<div class="logo">
				<a href="" class="logo-mini">
					<img width="40" src="<?= base_url() ?>assets/img/logo_sindasa.png" />
				</a>

				<a href="" class="simple-text logo-normal">
					SINDASA
				</a>
			</div>

			<div class="sidebar-wrapper">
				<?php if ($this->session->userdata('id_user') == TRUE) : ?>
					<div class="user">

						<!-- Display PP -->
						<div class="photo">
							<?php
							$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
							?>
							<img class="img" src="<?= base_url() ?>/assets/profil/<?= ucfirst($data['photo']); ?>" />
						</div>

						<!-- Display nama petugas -->
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" class="collapsed">
								<span>
									<?php
									$data = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
									?>
									<?= ucfirst($data['nama_user']); ?>
									<b class="caret"></b>
								</span>
							</a>
							<div class="clearfix"></div>
							<div class="collapse" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?= base_url() ?>user/edit/<?= $this->session->userdata('id_user'); ?>">
											<span class="sidebar-mini"><i class="material-icons">edit</i></span>
											<span class="sidebar-normal">Edit Profil</span>
										</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
				<?php endif; ?>

				<!-- Menu staff -->
				<?php if ($this->session->userdata('role') == 'staff') : ?>
					<ul class="nav">

						<!-- Menu Dashboard = Grafik -->
						<li class="<?php if ($title == 'Dashboard') : ?><?= 'active'; ?><?php endif; ?>">
							<a href="<?= base_url('dashboard') ?>">
								<i class="material-icons">dashboard</i>
								<p>Dashboard</p>
							</a>
						</li>

						<!-- Menu Manajemen Tabel Gizi -->
						<li class="<?php if ($title == 'Tabel Gizi') : ?><?= 'active'; ?><?php endif; ?>">
							<a data-toggle="collapse" href="#gizi">
								<i class="material-icons">table_chart</i>
								<p>Tabel Gizi
									<b class="caret"></b>
								</p>
							</a>
							<!-- Dropdown -->
							<div class="<?php if ($title == 'Tabel Gizi') : ?><?= 'collapse in'; ?><?php else : ?><?= 'collapse'; ?><?php endif; ?>" id="gizi">
								<ul class="nav">
									<li class="<?php if ($title == 'Tabel Gizi Anak Laki-Laki') : ?><?= 'active'; ?><?php endif; ?>">
										<a href="<?= base_url('gizilk2') ?>">
											<span class="sidebar-mini"><i class="material-icons">face_6</i></span>
											<span class="sidebar-normal">Anak Laki-Laki</span>
										</a>
									</li>

									<li class="<?php if ($title == 'Tabel Gizi Anak Perempuan') : ?><?= 'active'; ?><?php endif; ?>">
										<a href="<?= base_url('gizipr2') ?>">
											<span class="sidebar-mini"><i class="material-icons">face_4</i></span>
											<span class="sidebar-normal">Anak Perempuan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Menu Manajemen Stunting -->
						<li class="<?php if ($title == 'Manajemen Stunting') : ?><?= 'active'; ?><?php endif; ?>">
							<a data-toggle="collapse" href="#pagesExamples">
								<i class="material-icons">folder_shared</i>
								<p>Manajemen Stunting
									<b class="caret"></b>
								</p>
							</a>
							<!-- Dropdown -->
							<div class="<?php if ($title == 'Data Anak') : ?><?= 'collapse in'; ?><?php else : ?><?= 'collapse'; ?><?php endif; ?>" id="pagesExamples">
								<ul class="nav">
									<li class="<?php if ($title == 'Manajemen Data Anak') : ?><?= 'active'; ?><?php endif; ?>">
										<a href="<?= base_url('anak2') ?>">
											<span class="sidebar-mini"><i class="material-icons">child_care</i></span>
											<span class="sidebar-normal">Data Anak</span>
										</a>
									</li>

									<li class="<?php if ($title == 'Manajemen Cek Stunting') : ?><?= 'active'; ?><?php endif; ?>">
										<a href="<?= base_url('stunting2') ?>">
											<span class="sidebar-mini"><i class="material-icons">sentiment_dissatisfied</i></span>
											<span class="sidebar-normal">Data Stunting</span>
										</a>
									</li>

								</ul>
							</div>
						</li>
					<?php endif; ?>

					<!-- Menu yg boleh diakses sm admin tok -->
					<?php if ($this->session->userdata('role') == 'admin') : ?>
						<ul class="nav">
							<!-- Menu Dashboard = Grafik -->
							<li class="<?php if ($title == 'Dashboard') : ?><?= 'active'; ?><?php endif; ?>">
								<a href="<?= base_url('dashboard') ?>">
									<i class="material-icons">dashboard</i>
									<p>Dashboard</p>
								</a>
							</li>

							<!-- Menu Manajemen Tabel Gizi -->
							<li class="<?php if ($title == 'Tabel Gizi') : ?><?= 'active'; ?><?php endif; ?>">
								<a data-toggle="collapse" href="#gizi">
									<i class="material-icons">table_chart</i>
									<p>Tabel Gizi
										<b class="caret"></b>
									</p>
								</a>
								<!-- Dropdown -->
								<div class="<?php if ($title == 'Tabel Gizi') : ?><?= 'collapse in'; ?><?php else : ?><?= 'collapse'; ?><?php endif; ?>" id="gizi">
									<ul class="nav">
										<li class="<?php if ($title == 'Tabel Gizi Anak Laki-Laki') : ?><?= 'active'; ?><?php endif; ?>">
											<a href="<?= base_url('gizilk') ?>">
												<span class="sidebar-mini"><i class="material-icons">face_6</i></span>
												<span class="sidebar-normal">Anak Laki-Laki</span>
											</a>
										</li>

										<li class="<?php if ($title == 'Tabel Gizi Anak Perempuan') : ?><?= 'active'; ?><?php endif; ?>">
											<a href="<?= base_url('gizipr') ?>">
												<span class="sidebar-mini"><i class="material-icons">face_4</i></span>
												<span class="sidebar-normal">Anak Perempuan</span>
											</a>
										</li>
									</ul>
								</div>
							</li>

							<!-- Menu Manajemen Stunting -->
							<li class="<?php if ($title == 'Manajemen Stunting') : ?><?= 'active'; ?><?php endif; ?>">
								<a data-toggle="collapse" href="#stunting">
									<i class="material-icons">folder_shared</i>
									<p>Manajemen Stunting
										<b class="caret"></b>
									</p>
								</a>
								<!-- Dropdown -->
								<div class="<?php if ($title == 'Manajemen Stunting') : ?><?= 'collapse in'; ?><?php else : ?><?= 'collapse'; ?><?php endif; ?>" id="stunting">
									<ul class="nav">
										<li class="<?php if ($title == 'Manajemen Data Anak') : ?><?= 'active'; ?><?php endif; ?>">
											<a href="<?= base_url('anak') ?>">
												<span class="sidebar-mini"><i class="material-icons">child_care</i></span>
												<span class="sidebar-normal">Data Anak</span>
											</a>
										</li>

										<li class="<?php if ($title == 'Manajemen Cek Stunting') : ?><?= 'active'; ?><?php endif; ?>">
											<a href="<?= base_url('stunting') ?>">
												<span class="sidebar-mini"><i class="material-icons">escalator_warning</i></span>
												<span class="sidebar-normal">Data Stunting</span>
											</a>
										</li>

									</ul>
								</div>
							</li>

							<!-- Menu Data Akun -->
							<li class="<?php if ($title == 'Manajemen Akun') : ?><?= 'active'; ?><?php endif; ?>">
								<a href="<?= base_url('user') ?>">
									<i class="material-icons">manage_accounts</i>
									<p>Manajemen Akun</p>
								</a>
							</li>

							<!-- Menu Data Posyandu -->
							<li class="<?php if ($title == 'List Posyandu') : ?><?= 'active'; ?><?php endif; ?>">
								<a href="<?= base_url('posyandu') ?>">
									<i class="material-icons">home_work</i>
									<p>Daftar Posyandu</p>
								</a>
							</li>

							<!-- Menu Galeri -->
							<li class="<?php if ($title == 'Galeri') : ?><?= 'active'; ?><?php endif; ?>">
								<a href="<?= base_url('galeri') ?>">
									<i class="material-icons">perm_media</i>
									<p>Galeri</p>
								</a>
							</li>

						<?php endif; ?>

						<?php if ($this->session->userdata('id_user') == TRUE) : ?>

							<li>
								<a href="<?= base_url() ?>logout">
									<i class="material-icons">logout</i>
									<p>Logout</p>
								</a>
							</li>

						<?php else : ?>

							<li>
								<a href="<?= base_url() ?>auth/login">
									<i class="material-icons">login</i>
									<p>Login</p>
								</a>
							</li>

						<?php endif; ?>

						</ul>
						<!-- akhir dari ul role admin -->
			</div>

		</div>

		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
							<i class="material-icons visible-on-sidebar-regular">more_vert</i>
							<i class="material-icons visible-on-sidebar-mini">view_list</i>
						</button>
					</div>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"> <?= $title; ?> </a>
					</div>
				</div>
			</nav>