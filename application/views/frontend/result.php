<section class="page-section">
	<div class="container">
		<div class="content">
			<div class="container-fluid">
				<!-- <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
				<div class="alert alert-success">
					<strong><?= $this->session->flashdata('pesan'); ?></strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?> -->

				<?php if (empty($data)) : ?>
					<div class="alert alert-dark">
						<strong>Nama anak yang Anda masukkan salah!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php elseif ($data == TRUE) : ?>
					<div class="alert alert-primary">
						<strong>Data anak ditemukan!</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif; ?>

				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-content">
								<div class="material-datatables">
									<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
										<thead>
											<tr>
												<th class="text-center">No</th>
												<th class="text-center">Nama Anak</th>
												<th class="text-center">Umur</th>
												<th class="text-center">Jenis Kelamin</th>
												<th class="text-center">Tinggi Badan</th>
												<th class="text-center">Berat Badan</th>
												<th class="text-center">Status Anak</th>
												<th class="text-center">Tanggal Cek Stunting</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; ?>
											<?php foreach ($data as $data) : ?>
												<tr class="text-center">
													<td width="40"><?= $no; ?></td>
													<td width="150"><?= $data['nama_anak']; ?></td>
													<td width="100"><?= $data['umur']; ?> bulan</td>
													<td width="100"><?= $data['jk_anak']; ?></td>
													<td width="100"><?= $data['tb']; ?> cm</td>
													<td width="100"><?= $data['bb']; ?> kg</td>
													<td width="160"><?= $data['status_anak'] ?></td>
													<td width="150"><?= $data['tgl_cek_stunting']; ?></td>
												</tr>
												<?php $no++; ?>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- <section></section> -->