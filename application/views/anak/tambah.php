<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment_ind</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title judul text-primary"><strong>TAMBAH DATA ANAK</strong></h4>

                        <div class="form-group">
                            <label class="label-control">Nama Ibu</label>
                            <input class="form-control" name="nama_ibu" id="nama_ibu" type="text" />
                        </div>
                        <?= form_error('nama_ibu', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Nama Anak</label>
                            <input class="form-control" name="nama_anak" id="nama_anak" type="text" />
                        </div>
                        <?= form_error('nama_anak', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">No. Hp</label>
                            <input class="form-control" name="no_hp" id="no_hp" type="number" />
                        </div>
                        <?= form_error('no_hp', '<div class="text-danger">', '</div>'); ?>

                        <!-- <div class="form-group">
                            <label class="label-control">Tempat Lahir</label>
                            <input class="form-control" name="tmpt_lahir" id="tmpt_lahir" type="text" />
                        </div>
                        <?= form_error('tmpt_lahir', '<div class="text-danger">', '</div>'); ?> -->

                        <div class="form-group">
                            <label class="label-control">Tempat & Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input class="form-control" name="tmpt_lahir" id="tmpt_lahir" type="text" />
                                    <?= form_error('tmpt_lahir', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control datepicker" name="tgl_lahir" id="tgl_lahir" />
                                    <?= form_error('tgl_lahir', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <label class="label-control">Tanggal Lahir</label>
                            <input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" />
                        </div>
                        <?= form_error('tgl_lahir', '<div class="text-danger">', '</div>'); ?> -->

                        <!-- <div class="form-group">
                            <label class="label-control">Umur</label>
                            <br>
                            <span id="umur" name="umur" readonly></span>
                        </div> -->

                        <div class="form-group">
                            <label class="label-control">Umur</label>
                            <input type="text" class="form-control datepicker" name="umur" id="umur" readonly />
                        </div>
                        <?= form_error('umur', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control"></label>Jenis Kelamin</label>
                            <div>
                                <label class="radio-inline"> <input type="radio" name="jk_anak" id="Laki-Laki" value="Laki-Laki"> Laki-Laki </label>
                                <label class="radio-inline"> <input type="radio" name="jk_anak" id="Perempuan" value="Perempuan"> Perempuan </label>
                            </div>
                        </div>
                        <?= form_error('jk_anak', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Alamat</label>
                            <input class="form-control" name="alamat" id="alamat" type="text" />
                        </div>
                        <?= form_error('alamat', '<div class="text-danger">', '</div>'); ?>

                        <!-- <div class="form-group">
                            <label class="label-control">TB/BB</label>
                            <div class="row">
                                <div class="col-md-3">
                                    /<label class="label-inline"> <input class="form-control" name="tb" id="tb" type="number" /> cm </label>
                                    <input class="form-control" name="tb" id="tb" type="number" placeholder="cm" />
                                    <?= form_error('tb', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="col-md-3">
                                    /<label class="label-inline"> <input class="form-control" name="bb" id="bb" type="number" /> kg </label>
                                    <input class="form-control" name="bb" id="bb" type="number" placeholder="kg" />
                                    <?= form_error('bb', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div> -->


                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>