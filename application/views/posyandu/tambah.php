<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <?php echo form_open_multipart(); ?>

          <div class="card-header card-header-icon" data-background-color="blue">
            <i class="material-icons">home_work</i>
          </div>

          <div class="card-content">
            <h4 class="card-title judul text-info"><strong>TAMBAH POSYANDU</strong></h4>
            <div class="form-group">
              <label class="label-control">Nama Posyandu</label>
              <input class="form-control" name="nama_posyandu" id="nama_posyandu" type="text" />
            </div>
            <?= form_error('nama_posyandu', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">Alamat Posyandu</label>
              <input class="form-control" name="alamat_posyandu" id="alamat_posyandu" type="text" />
            </div>
            <?= form_error('alamat_posyandu', '<div class="text-danger">', '</div>'); ?>

            <div class="form-group">
              <label class="label-control">Penanggung Jawab</label>
              <input class="form-control" name="penanggung_jawab" id="penanggung_jawab" type="text" />
            </div>
            <?= form_error('penanggung_jawab', '<div class="text-danger">', '</div>'); ?>

            <div class="category form-category">
              <div class="form-footer text-right">
                <button type="submit" class="btn btn-success btn-fill">Simpan</button>
              </div>
            </div>

          </div>

          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>