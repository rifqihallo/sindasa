<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>

                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">escalator_warning</i>
                    </div>

                    <div class="card-content">
                        <h4 class="card-title judul text-primary"><strong>CEK STATUS ANAK</strong></h4>

                        <div class="form-group">
                            <label class="label-control">Nama Anak</label>
                            <select class="selectpicker" data-live-search="true" name="id_anak" id="id_anak" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                                <option disabled selected>Pilih Nama Anak</option>
                                <?php foreach ($data as $data) : ?>
                                    <option value="<?= $data['id_anak']; ?>"><?= $data['nama_anak']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?= form_error('id_anak', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">TB/BB</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <input class="form-control" name="tb" id="tb" type="number" placeholder="cm" />
                                    <?= form_error('tb', '<div class="text-danger">', '</div>'); ?>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control" name="bb" id="bb" type="number" placeholder="kg" />
                                    <?= form_error('bb', '<div class="text-danger">', '</div>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">cek hasil</button>
                            </div>
                        </div>

                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>