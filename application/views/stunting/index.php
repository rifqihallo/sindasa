<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">escalator_warning</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title judul text-primary"><strong>DATA CEK STUNTING</strong></h4>
                        <div class="toolbar">
                            <a href="<?= base_url() ?>stunting/tambah/">
                                <button class="btn btn-info">
                                    <span class="btn-label">
                                        <i class="material-icons">add_circle</i>
                                    </span>
                                    Cek Status
                                </button>
                            </a>

                            <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                <div class="alert alert-success">
                                    <strong><?= $this->session->flashdata('success'); ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
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
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr class="text-center">
                                            <td width="40"><?= $no++; ?></td>
                                            <td width="150"><?= $key['nama_anak']; ?></td>
                                            <td width="100"><?= $key['umur']; ?> bulan</td>
                                            <td width="100"><?= $key['jk_anak']; ?></td>
                                            <td width="100"><?= $key['tb']; ?> cm</td>
                                            <td width="100"><?= $key['bb']; ?> kg</td>
                                            <td width="160"><?= $key['status_anak'] ?></td>
                                            <td width="150"><?= $key['tgl_cek_stunting']; ?></td>
                                            <td class="text-center">
                                                <!-- <a href="<?= base_url() ?>anak/edit/<?= $key['id_anak']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a> -->
                                                <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#hapuscek<?= $key['id_cek']; ?>"><i class="material-icons">close</i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapuscek<?= $key['id_cek']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>stunting/hapus/<?= $key['id_cek']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah Anda yakin ingin menghapus data cek stunting ini? </h5>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <button type="button" class="btn btn-simple" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-success btn-simple">Ya</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>