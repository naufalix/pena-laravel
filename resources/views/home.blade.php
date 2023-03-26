@extends('layouts.index')

@section('hero')
  @include('components/hero')
@endsection

@section('content')

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p style="text-align: start">
              PENA atau Pekan Elektromedik Nasional yang merupakan agenda tahunan dari Himpunan Mahasiswa Teknik Elektromedik se-Indonesia yang memiliki dua kegiatan inti di dalamnya yaitu :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Electromedical Innovation Competition (EIC)</li>
              <li><i class="ri-check-double-line"></i> Seminar Nasional (SEMNAS)</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p style="text-align: start">
              PENA diadakan pertama kali pada tahun 2017 yang berlokasi di Universitas Muhammadiyah Yogyakarta, lalu pada 2018 dilaksanakan di Poltekkes Kemenkes Surabaya, kemudian pada 2019 diadakan di STIKES Widya Husada Semarang dan terakhir kali pada 2020 telah diagendakan di Poltekkes Jakarta 2 namun karena pandemi COVID-19 PENA 2020 tidak dapat dilanjutkan. Pada 2021 agenda tahunan ini terpaksa berhenti dan PENA 2022 kembali dilaksanakan di Poltekkes Kemenkes Surabaya. Kemudian pada tahun 2023, PENA juga kembali dilaksanakan di Poltekkes Kemenkes Jakarta II.
            </p>
            <a href="eic" class="btn-learn-more pointer">EIC</a>
            <a href="semnas" class="btn-learn-more">SEMNAS</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Teaser Section ======= -->
    <section id="teaser" class="teaser">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Teaser</h2>
        </div>
        <div class="row content">
          <video class="mx-auto mb-5 col-12 col-lg-10" controls data-aos="fade-up" data-aos-delay="150">
            <source src="assets/video/teaser.mp4" type="video/mp4">Your browser does not support the video tag.
          </video>
          <!-- <iframe id="vy" 
            class="mx-auto mb-5 col-12 col-lg-10" data-aos="fade-up" data-aos-delay="150"
            src="https://www.youtube.com/embed/4CYcUdBzknE" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq d-none">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>FAQ</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Apa itu PENA?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              PENA atau Pekan Elektromedik Nasional merupakan agenda tahunan Himpunan Mahasiswa Teknik Elektromedik seIndonesia (HIMATEMI) dimana didalamnya terdapat dua kegiatan inti yaitu Electromedical Innovation Competition (EIC) dan Seminar Nasional (SEMNAS).
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Dalam pelaksanaan PENA 2022, dilakukan online atau offline?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Dalam kegiatan PENA 2022, kedua agenda acara (SEMNAS dan EIC) dilaksanakan offline di Surabaya tepatnya di lingkungan Poltekkes Kemenkes Surabaya
            </p>
          </div>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Kapan pendaftaran EIC akan dibuka?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Pendaftaran EIC akan dibuka pada <b>Senin, 28 Februari 2022.</b>
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Siapa saja yang dapat mengikuti kegiatan PENA 2022?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Dalam kompetisi EIC dikhususkan pada mahasiswa/i se Indonesia. Sedangkan untuk SEMNAS dapat diikuti oleh mahasiswa/i, umum dan juga elektromedis.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Apakah tanggal mulai pendaftaran EIC dengan pengumpulan video dan proposal dilaksanakan ditanggal yang sama?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Iya sama. Batas akhir pendaftaran, pengumpulan video dan proposal dilakukan hingga <b>Minggu, 16 April 2022.</b>
            </p>
          </div>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>
              Apakah ada format khusus untuk penulisan proposal EIC?
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              Ada, format penulisan proposal dapat dilihat pada buku panduan EIC.
            </p>
          </div>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>
              Bagaimana cara pendaftaran EIC dan mengetahui bahwa telah terdaftar?
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              Untuk cara pendaftaran dapat dilihat melalui website dan Instagram PENA tentang alur pendaftaran. Kemudian sebagai tanda telah terdaftar EIC ialah peserta sudah <b>mendapat balasan pesan dari panitia</b> setelah mengkonfirmasi ulang dan nama-nama tim akan di update di website setiap minggunya.
            </p>
          </div>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>
              Apakah diperbolehkan mengikuti lomba lebih dari satu kategori?
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              Tidak, setiap peserta hanya diperbolehkan mengikuti satu kategori lomba dalam EIC
            </p>
          </div>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>
              Apakah satu orang diperbolehkan mendaftarkan diri dalam dua tim yang berbeda?
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              Tidak diperbolehkan
            </p>
          </div>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>
              Bagaimana alur pengumpulan proposal dan video?
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              Dengan mengirimkan link gdrive yang berisi video dan proposal karya pada masing-masing CP kategori hingga batas akhir pengumpulan (<b>Minggu, 16 April jam 12.00 WIB</b>)
            </p>
          </div>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>
              Kapan informasi SEMNAS akan diluncurkan?
            </h4>
          </div>
          <div class="col-lg-7">
            <p>
              Informasi SEMNAS akan diinformasikan segera
            </p>
          </div>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    @include('components/sponsor')

    <script type="text/javascript">
      function setHeight(){
        var width = document.getElementById('vy').clientWidth;
        document.getElementById('vy').style.height = (width/1.85)+"px";
      }  
      setHeight();
      function eic(){
        Swal.fire({
          title: "Selamat Kepada Para Grand Finalis",
          text: "Kami Tunggu di Surabaya!",
          iconHtml: "<img src='assets/img/hero-img.png' style='width:100px'>",
          customClass: {
            icon: 'no-border'
          }
        })
        // .then(function() {
        //   window.location = "eic";
        // });
      }
      //eic()
    </script>

@endsection