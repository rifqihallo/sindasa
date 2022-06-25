<section class="page-section pt-lg-7" id="cekstunting">
	<div class="container">
		<div class="text-center">
			<h2 class="section-heading text-uppercase">Cek Stunting Anak</h2>
		</div>

		<div class="text-justify pl-5 pr-5">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-8">
					<?= form_open('cekstunting/cari', 'id="cekstunting", class="card card-sm"') ?>
					<div class="row card2 no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<div class="col">
							<input autofocus="autofocus" class="form-control form-control-lg form-control-borderless" type="search" name="keyword" placeholder="Masukkan nama anak . . ." required>
							<!-- <?= form_error('keyword', '<div class="text-danger">', '</div>'); ?> -->
						</div>
						<div class="col-auto">
							<input class="btn btn-lg btn2-success" type="submit" value="Cari" />
						</div>
					</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <section></section> -->