
<!-- <div class="video-container">
<div class="video-column" onclick="showVideo('9qD254rDtPs')"><div class="title-caption">Video 1: Dewa 19 feat Ari Lasso</div></div>
<div class="video-column" onclick="showVideo('_Q0aa7vZZEI')"><div class="title-caption">Video 2</div></div>
<div class="video-column" onclick="showVideo('V6zCKJZ2XlY')"><div class="title-caption">Video 3</div></div>
</div> -->

<style>


</style>

<div id="video-popup" onclick="closeVideo()">
  <span class="close-button" onclick="closeVideo()">
    <svg viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z"/></svg>
  </span>

  <iframe id="video-frame" frameborder="0" allowfullscreen></iframe>

  <div class="tbbox-description">
    <div class="description-bottom">
      <p class="text-description-header"></p>
      <p class="text-description-isi"></p>
    </div>
  </div>
</div>


<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>acwid</span></strong>
    </div>

    <div class="credits">
      Developer by <a href="https://deelabs.com/" target="_blank">Deelabs</a>
      <script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script>
    </div>
  </div>
</footer><!-- End  Footer -->


</body>
</html>



<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="<?php echo base_url() ?>assets/_tera_byte/plugins/filterizr/jquery.filterizr.min.js"></script>

<!-- google map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script> -->
<!-- <script src="<?php echo base_url() ?>assets/_tera_byte/plugins/google-map/gmap.js"></script> -->

<!-- Main Script -->
<script src="<?php echo base_url() ?>assets/_tera_byte/js/script.js"></script>

<script>

  // $(document).ready(function() {
    // $('.portfolio-poptb').click(function() {
      function showVideo(vidLink,vidTitle,vidDesc) {
      // alert('Item selected');

      
      
      var bodyMain   = document.getElementById('body');
      var videoPopup = document.getElementById('video-popup');
      var videoFrame = document.getElementById('video-frame');

      // var title =  $(".portfolio-poptb").attr("title");
      // var desc =  $(".portfolio-poptb").attr("desc");
      // var video =  $(".portfolio-poptb").attr("data-vid");

      videoPopup.style.display = 'flex';
      bodyMain.style.overflow = 'hidden';

      $("#video-frame").attr({
        "src" : vidLink,
        "title" : vidTitle
      });

      $(".text-description-header").html("<b>" + vidTitle + "</b>");
      $(".text-description-isi").html(vidDesc);

      // alert(p1);

    // });
    };
  // });

  function closeVideo() {
    var bodyMain   = document.getElementById('body');
    var videoPopup = document.getElementById('video-popup');
    var videoFrame = document.getElementById('video-frame');

    // $("#video-frame").attr("src", 'xxx');

    // videoFrame.src = '';
    videoPopup.style.display = 'none';
    bodyMain.style.overflow = 'auto';

    var title =  $(".portfolio-poptb").attr("title");
    var video =  $(".portfolio-poptb").attr("data-vid");

    $("#video-frame").attr({
        "src" : "",
        "title" : ""
    });

    $(".text-description").html('');

  }

   // $(".portfolio-poptb").click(function() {

  //   var href =  $(".portfolio-poptb").attr("href");

  //   alert(href);
  // });

  // function showVideo(videoId) {
  //   var videoPopup = document.getElementById('video-popup');
  //   var videoFrame = document.getElementById('video-frame');
  //   var bodyMain   = document.getElementById('body');

  //   videoFrame.src = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1';
  //   videoPopup.style.display = 'flex';
  //   bodyMain.style.overflow = 'hidden';
  // }


  // var test=document.querySelector(".portfolio-poptb");

  // test.addEventListener('click',function testfunction(){
  //   alert('pop ok');
  // });
</script>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/aos/aos.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/typed.js/typed.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/_tera_byte/php-email-form/validate.js"></script>

<!-- <script src="<?php echo base_url() ?>assets/_tera_byte/plugins/limonte-sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script> -->
<script src="<?php echo base_url() ?>assets/js/limonte-sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/public/login.js" type="text/javascript"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>