<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment_ind</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title judul text-primary"><strong>DATA ANAK</strong></h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            <a href="<?= base_url() ?>anak/tambah/">
                                <button class="btn btn-info">
                                    <span class="btn-label">
                                        <i class="material-icons">add_circle</i>
                                    </span>
                                    Tambah
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
                                        <th class="text-center">Nama Ibu</th>
                                        <th class="text-center">Nama Anak</th>
                                        <th class="text-center">No.Hp</th>
                                        <th class="text-center">TTL</th>
                                        <!-- <th class="text-center">Umur</th> -->
                                        <th class="text-center">Jenis Kelamin</th>
                                        <th class="text-center">Alamat</th>
                                        <!-- <th class="text-center">TB/BB</th> -->
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr class="text-center">
                                            <td width="40"><?= $no; ?></td>
                                            <td width="120"><?= $key['nama_ibu']; ?></td>
                                            <td width="120"><?= $key['nama_anak']; ?></td>
                                            <td width="100"><?= $key['no_hp']; ?></td>
                                            <td width="130"><?= $key['tmpt_lahir'] . ', ' . $key['tgl_lahir']; ?></td>
                                            <!-- <td width="70"><?= $key['umur']; ?> tahun</td> -->
                                            <td width="100"><?= $key['jk_anak']; ?></td>
                                            <td width="140"><?= $key['alamat']; ?></td>
                                            <!-- <td width="70"><?= $key['tb'] . '/' . $key['bb']; ?></td> -->
                                            <td class="text-center">

                                                <a href="<?= base_url() ?>anak/edit/<?= $key['id_anak']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a>

                                                <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#hapusanak<?= $key['id_anak']; ?>"><i class="material-icons">close</i></button>

                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- small modal hapus pegawai -->

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusanak<?= $key['id_anak']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>anak/hapus/<?= $key['id_anak']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah Anda yakin ingin menghapus data anak ini? </h5>
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
                        <!--    end small modal hapus pegawai -->
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>