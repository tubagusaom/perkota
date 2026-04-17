<style>
  .fns {
    font-size: 12px;
  }
  .portfolio-wrap {
    /* width:296px; */
    height:222px;
    background: #eee;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .portfolio-wrap img {
    height:222px;
  }

  
/* CSS Document */
/* #headerPopup{
  width:75%;
  margin:0 auto;
}

#headerPopup iframe{
  width:100%;
  margin:0 auto;
} */
</style>

<!-- <script>
  $( document ).ready(function() {
	$('#headerVideoLink').magnificPopup({
	type:'inline',
	midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
	});
});
</script> -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="hero-container" data-aos="fade-in">
    <h1><?=$biodata->nama_lengkap ?></h1>
    <p>I'm <span class="typed" data-typed-items="<?=$biodata->pekerjaan_1 ?> <?= $biodata->pekerjaan_2 == '' ? '' : ','.$biodata->pekerjaan_2 ?> <?= $biodata->pekerjaan_3 == '' OR $biodata->pekerjaan_3 == 0 ? '' : ','.$biodata->pekerjaan_3 ?>"></span></p>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        <p><?=$biodata->about_top ?></p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="<?php echo base_url() ?>assets/_tera_byte/img/profile-aw.jpg" class="img-fluid" alt="" style="border-radius:5px;">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?=$biodata->nama_lengkap ?></h3>
          <p class="fst-italic">
            <?=$biodata->about_center ?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Born :</strong> <span class="fns"><?=$biodata->tempat_lahir ?>, <?=tgl_indo($biodata->tgl_lahir)?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Spouse :</strong> <span class="fns"><?=$biodata->pasangan ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Parents :</strong> <span class="fns"><?=$biodata->ortu ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Children :</strong> <span class="fns"><?=$biodata->jumlah_anak ?></span></li>

              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Age :</strong> <span class="fns"><?=$umur ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Education :</strong> <span class="fns"><?=$pilihan_pendidikan[$biodata->pendidikan_terakhir] ?>, <?=$biodata->kampus ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Degree :</strong> <span class="fns"><?=$biodata->gelar ?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong class="fns">Email :</strong> <span class="fns"><?=$biodata->email ?></span></li>
              </ul>
            </div>
          </div>
          <p>
            <?=$biodata->about_bottom ?>
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->


  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row">

        <div class="col-lg-6" data-aos="fade-up">
          <h3 class="resume-title">Profesional Businessman</h3>

          

        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Public Speaker</h3>

          

        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      

      

      <!-- <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">

              <iframe class="img-fluid" src="https://www.youtube.com/embed/vjP9-mX5Iks"></iframe>

              <div class="portfolio-links">
                <a title="Market Review - IDX CHANEL" href="https://www.youtube.com/embed/vjP9-mX5Iks?autoplay=1" class="portfolio-lightbox">
                  <i class="bx bx-search"></i>
                </a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>

            </div>
          </div>
      </div> -->

    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Testimonials Section ======= -->
  <!-- <section id="testimonials" class="testimonials section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section> -->
  <!-- End Testimonials Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-12 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><?=$contact->alamat?></p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>
                <a href = "mailto: <?=$contact->email?>"><?=$contact->email?></a>
              </p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>  
                <a href="tel:<?=$contact->tlp?>"><?=$contact->tlp?></a>
              </p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.236643058034!2d106.82890367494208!3d-6.232503843755656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e8cbb9e497%3A0xc9b90fc0ac3963bc!2sMenara%20Kadin%20Indonesia%2C%20Jl.%20H.%20R.%20Rasuna%20Said%20Blok%20X-5%20No.Kav.%202-3%2C%20RT.1%2FRW.2%2C%20Kuningan%2C%20Kuningan%20Tim.%2C%20Kecamatan%20Setiabudi%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012950!5e0!3m2!1sid!2sid!4v1681359854929!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <!-- <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div> -->

      </div>

    </div>
  </section><!-- End Contact Section -->



</main><!-- End #main -->