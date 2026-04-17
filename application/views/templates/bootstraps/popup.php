<!-- <script type="text/javascript" src="jquery-1.11.1.min.js"></script> -->
<script type="text/javascript">
  $(document).ready(function() {
    $('a.close').click(function(eve) {

      eve.preventDefault();
      $(this).parents('div.popup').fadeOut('slow');
    });
  });
</script>
<style media="screen">
  div.popup {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 94%;
    background: rgba(0, 0, 0, .8);
    z-index: 100;
  }

  div#box {
    margin: 0.5% auto;
    background: #fff;
    /* width: 90%; */
    /* width:43%;
    height:90%; */
    border-radius: 6px;
    -webkit-box-shadow: 0 0 15px #000;
    -moz-box-shadow: 0 0 15px #000;
    box-shadow: 0 0 15px #000;
  }

  .box-img img {
    width: 100%;
    border-radius: 0 0 6px 6px;
  }

  a.close {
    text-decoration: none;
    color: #000;
    margin: 10px 15px 5px 0;
    float: right;
    font-family: tahoma;
    font-size: 20px;
  }

  @media only screen and (max-width: 600px) {
    div#box {
      width: 90%;
      /* height:90%; */
    }

    .box-img img {
      height: 90%;
    }
  }

  @media only screen and (min-width: 600px) {
    div#box {
      width: 36%;
      /* height:90%; */
      /* xxx */
    }

    .box-img img {
      height: 88%;
    }
  }
</style>

<!-- bagian popup -->
<div class="popup">
  <div id="box">

    <div class="box-img modal-content">
      <a class="close" href="#">X</a>
      <img class="img-responsive" src="<?= base_url() ?>assets/img/iklan/flyer-hd.jpg" alt="homedepo">
    </div>
  </div>
</div>
<!-- akhir dari popup -->