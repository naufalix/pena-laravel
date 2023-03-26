	<!-- ======= Sponsor Section ======= -->
  <section id="sponsor" class="sponsor d-none">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Our Sponsor</h2>
      </div>

      <div class="row mx-auto justify-content-center col-12 col-lg-10" data-aos="fade-up" data-aos-delay="300">
        <div class="col-3 p-3">
          <img class="col-12" src="assets/img/sponsor/1.png">
        </div>
        <div class="col-3 p-3">
          <img class="col-12" src="assets/img/sponsor/2.png">
        </div>
      </div>

    </div>
  </section><!-- End Sponsor Section -->

  <section id="support" class="sponsor">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Supported By</h2>
      </div>

      <div class="row mx-auto justify-content-center col-12 col-lg-10" data-aos="fade-up" data-aos-delay="300">
        <?php for($i=21; $i<=25; $i++) { ?>
        <div class="col-4 col-md-2 p-3">
          <img class="col-12" src="assets/img/sponsor/<?= $i; ?>.png">
        </div>
        <?php } ?>
      </div>

    </div>
  </section><!-- End Sponsor Section -->

  <!-- ======= Sponsor Section ======= -->
  <section id="medpart" class="medpart">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Media Partner</h2>
      </div>

      <div class="row mx-auto justify-content-center col-12 col-lg-10" data-aos="fade-up" data-aos-delay="300">
        <?php
          $medpart = [16,17,18,5,19,20,26,27,28];
          foreach($medpart as $i) { 
        ?>
        <div class="col-3 col-md-1 p-3">
          <img class="col-12" src="assets/img/sponsor/<?= $i; ?>.png">
        </div>
        <?php } ?>
      </div>

    </div>
  </section><!-- End Sponsor Section -->