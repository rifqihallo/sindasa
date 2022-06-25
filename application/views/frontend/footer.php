<!-- Footer-->
<footer class="footer py-4" id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-lg-left" style="color:white"><?= date('Y') ?> © Dinas Kesehatan Kabupaten Madiun
            </div>
            <div class="col-lg-6 text-lg-right">
                <a class="mr-3" href="@madiunkab.go.id">@madiunkab.go.id</a>
            </div>
        </div>
    </div>
</footer>


<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalRelatedContent">Launch
    modal</button>

<div class="modal fade right" id="popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <p class="heading"><strong><?= $data['judul_galeri']; ?></strong></p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-5">
                        <img src="<?= base_url() ?>assets/galeri/<?= $data['gambar'] ?>" class="img-fluid" alt="">
                    </div>

                    <div class="col-7">
                        <p><?= $data['deskripsi_galeri']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="<?= base_url() ?>assets/mail/jqBootstrapValidation.js"></script>
<script src="<?= base_url() ?>assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="<?= base_url() ?>assets/js/scripts.js"></script>
<script src="<?= base_url(); ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
</body>

</html>