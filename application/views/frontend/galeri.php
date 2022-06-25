 <!-- galeri -->
 <section id="galeri">
   <div class="container">
     <div class="text-center">
       <h2 class="section-heading text-uppercase">Galeri</h2>
     </div>
     <br>
     <div class="row">
       <?php foreach ($galeri as $data) : ?>
         <div class="col-lg-4 col-sm-6 mb-4">
           <div class="portfolio-item">
             <a class="portfolio-link" data-toggle="modal" href="#myPopup2<?= $data['id_galeri']; ?>">
               <div class="portfolio-hover">
                 <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
               </div>
               <img class="img-fluid" src="<?= base_url() ?>/assets/galeri/<?= $data['gambar'] ?>" />
             </a>
           </div>
         </div>
       <?php endforeach; ?>
     </div>
   </div>
 </section>

 <!-- popup galeri -->
 <?php foreach ($galeri as $data) : ?>
   <div class="modal fade" id="myPopup2<?= $data['id_galeri']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg modal-dialog-centered">
       <div class="modal-content">
         <div class="modal-header">
           <span><strong><?= $data['judul_galeri']; ?></strong></span>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true" class="white-text">&times;</span>
           </button>
         </div>
         <div class="container">
           <div class="modal-body">
             <div class="row">
               <div class="col-7">
                 <img src="<?= base_url() ?>assets/galeri/<?= $data['gambar'] ?>" class="img-fluid" alt="">
               </div>

               <div class="col-5">
                 <p><?= $data['deskripsi_galeri']; ?></p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 <?php endforeach; ?>