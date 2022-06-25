<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons">face_6</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title judul text-info"><strong>DATA TABEL GIZI</strong></h4>
                        <div class="toolbar">
                            

                            <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                <div class="alert alert-success">
                                    <strong><?= $this->session->flashdata('success'); ?> </strong>
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
                                        <th class="text-center">Umur</th>
                                        <th class="text-center">-3SD</th>
                                        <th class="text-center">-2SD</th>
                                        <th class="text-center">-1SD</th>
                                        <th class="text-center">Median</th>
                                        <th class="text-center">+1SD</th>
                                        <th class="text-center">+2SD</th>
                                        <th class="text-center">+3SD</th>
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr class="text-center">
                                            <td width="40"><?= $no; ?></td>
                                            <td width="150"><?= $key['umur']; ?></td>
                                            <td width="100"><?= $key['min_tiga']; ?></td>
                                            <td width="100"><?= $key['min_dua']; ?></td>
                                            <td width="100"><?= $key['min_satu']; ?></td>
                                            <td width="100"><?= $key['median']; ?></td>
                                            <td width="100"><?= $key['plus_satu']; ?></td>
                                            <td width="100"><?= $key['plus_dua']; ?></td>
                                            <td width="100"><?= $key['plus_tiga']; ?></td>
                                            <td class="text-center">
                                                <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#hapusstatus<?= $key['id_gizilk']; ?>"><i class="material-icons">close</i></button>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusstatus<?= $key['id_gizilk']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>gizilk2/hapus2\/<?= $key['id_gizilk']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Maaf Anda tidak dapat menghapus data ini, silahkan konfirmasi ke admin!</h5>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <button type="button" class="btn btn-simple" data-dismiss="modal">Kembali</button>
                                                <!-- <button type="submit" class="btn btn-success btn-simple">Ya</button> -->
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