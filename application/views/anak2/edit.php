<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>

                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">child_care</i>
                    </div>

                    <div class="card-content">
                        <h4 class="card-title judul text-primary"><strong>EDIT DATA ANAK</strong></h4>

                        <div class="form-group">
                            <label class="label-control">Nama Ibu</label>
                            <input class="form-control" name="nama_ibu" id="nama_ibu" type="text" value="<?= $anak['nama_ibu']; ?>" />
                        </div>
                        <?= form_error('nama_ibu', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Nama Anak</label>
                            <input class="form-control" name="nama_anak" id="nama_anak" type="text" value="<?= $anak['nama_anak']; ?>" />
                        </div>
                        <?= form_error('nama_anak', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">No. Hp</label>
                            <input class="form-control" name="no_hp" id="no_hp" type="number" value="<?= $anak['no_hp']; ?>" />
                        </div>
                        <?= form_error('no_hp', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Tempat & Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input class="form-control" name="tmpt_lahir" id="tmpt_lahir" type="text" value="<?= $anak['tmpt_lahir']; ?>" />
                                    <?= form_error('tmpt_lahir', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" value="<?= $anak['tgl_lahir']; ?>" />
                                    <?= form_error('tgl_lahir', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="label-control">Umur</label>
                            <input type="text" class="form-control datepicker" name="umur" id="umur" value="<?= $anak['umur']; ?>" readonly />
                        </div>
                        <?= form_error('umur', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Jenis Kelamin</label>
                            <div>
                                <label class="radio-inline"> <input type="radio" name="jk_anak" id="Laki-Laki" value="Laki-Laki"> Laki-Laki </label>
                                <label class="radio-inline"> <input type="radio" name="jk_anak" id="Perempuan" value="Perempuan"> Perempuan </label>
                            </div>
                        </div>
                        <?= form_error('jk_anak', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Alamat</label>
                            <input class="form-control" name="alamat" id="alamat" type="text" value="<?= $anak['alamat']; ?>" />
                        </div>
                        <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>


                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>