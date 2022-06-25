<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <?php echo form_open_multipart(); ?>
          <!-- <form id="RegisterValidation" action="" method=""> -->
          <div class="card-header card-header-icon" data-background-color="blue">
            <i class="material-icons">face_6</i>
          </div>
          <div class="card-content">
            <h4 class="card-title judul text-info"><strong>TAMBAH TABEL GIZI</strong></h4>
            <div class="form-group">
              <label class="label-control">Umur</label>
              <input class="form-control" name="umur" id="umur" type="text" />
            </div>
            <?= form_error('umur', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">-3 SD</label>
              <input class="form-control" name="min_tiga" id="min_tiga" type="text" />
            </div>
            <?= form_error('min_tiga', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">-2 SD</label>
              <input class="form-control" name="min_dua" id="min_dua" type="text" />
            </div>
            <?= form_error('min_dua', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">-1 SD</label>
              <input class="form-control" name="min_satu" id="min_satu" type="text" />
            </div>
            <?= form_error('min_satu', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">Median</label>
              <input class="form-control" name="median" id="median" type="text" />
            </div>
            <?= form_error('median', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">+1 SD</label>
              <input class="form-control" name="plus_satu" id="plus_satu" type="text" />
            </div>
            <?= form_error('plus_satu', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">+2 SD</label>
              <input class="form-control" name="plus_dua" id="plus_dua" type="text" />
            </div>
            <?= form_error('plus_dua', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">+3 SD</label>
              <input class="form-control" name="plus_tiga" id="plus_tiga" type="text" />
            </div>
            <?= form_error('plus_tiga', '<div class="text-danger">', '</div>'); ?>

            <div class="category form-category">
              <div class="form-footer text-right">
                <button type="submit" class="btn btn-success btn-fill">Simpan</button>
              </div>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
        <!-- <script src="<?= base_url() ?>assets/ckeditor/ckeditor.js"></script>
                <script>
                    CKEDITOR.replace('content');
                </script> -->
      </div>
    </div>
  </div>