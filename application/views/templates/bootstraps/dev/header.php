
<html lang="en">
    <head>

        <title>Achmad Widjaja</title>

        <meta name="description" content="<?= $aplikasi->nama_unit ?>" />
        <meta name="keywords" content="Biografi, Profil, achmad widjaja, acwid, achmad, widjaja" />

        <!-- Favicon -->
    		<link rel="shortcut icon" href="<?=base_url()?>assets/_tera_byte/img/favicon.png" type="image/x-icon" />
    		<link rel="apple-touch-icon" href="<?=base_url()?>assets/_tera_byte/img/apple-touch-icon.png">

        <!-- Mobile Metas -->
    		<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
        <!-- <meta name="viewport" content="width=device-width" /> -->
    		<meta content="width=device-width, initial-scale=1" name="viewport" />


        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="index, follow" />
        <meta http-equiv="Copyright" content="tera_byte" />
        <meta name="author" content="tera_byte" />
        <meta http-equiv="imagetoolbar" content="no" />
        <meta name="language" content="Indonesia" />
        <meta name="revisit-after" content="7" />
        <meta name="webcrawlers" content="all" />
        <meta name="rating" content="general" />
        <meta name="spiders" content="all" />

        <!-- Social Media Meta -->
        <meta property="place:location:latitude" content="13.062616" /> <!-- Silahkan disesuaikan -->
        <meta property="place:location:longitude" content="80.229508" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:street_address" content="Jl. Intelektual" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:locality" content="DKI JAKARTA" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:postal_code" content="13720" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:country_name" content="Indonesia" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:email" content="info@it-konsultan.com" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:phone_number" content="085737744383" /> <!-- Silahkan disesuaikan -->
        <meta property="business:contact_data:website" content="https://it.konsultan.com" />

        <meta property="og:type" content="article" /> <!-- Card type bisa di ganti article, website, blog dan profile -->
        <meta property="profile:first_name" content="Tera" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:last_name" content="Byte" /> <!-- Silahkan disesuaikan -->
        <meta property="profile:username" content="Facebook_Username" /> <!-- Silahkan disesuaikan -->
        <meta property="og:title" content="<?= $aplikasi->nama_unit .' | '. $aplikasi->singkatan_unit ?>" />
        <meta property="og:description" content="<?= $aplikasi->nama_unit ?>" />
        <meta property="og:image" content="<?= base_url('favicon.ico') ?>" />
        <meta property="og:url" content="https://it.konsultan.com/" />
        <meta property="og:site_name" content="<?= $aplikasi->singkatan_unit ?>" />
        <meta property="fb:admins" content="Facebook_ID" /> <!-- Silahkan disesuaikan -->

        <meta name="twitter:card" content="summary" />  <!-- Card type jangan di ganti -->
        <meta name="twitter:site" content="<?= $aplikasi->singkatan_unit ?>" />
        <meta name="twitter:title" content="<?= $aplikasi->nama_unit .' | '. $aplikasi->singkatan_unit ?>" />
        <meta name="twitter:description" content="<?= $aplikasi->nama_unit ?>" />
        <meta name="twitter:creator" content="Twitter_Username" /> <!-- Silahkan disesuaikan -->
        <meta name="twitter:image:src" content="<?= base_url('favicon.ico') ?>" />
        <meta name="twitter:domain" content="https://it.konsultan.com/" />

        <meta itemprop="name" content="<?= $aplikasi->nama_unit .' | '. $aplikasi->singkatan_unit ?>" />
        <meta itemprop="description" content="<?= $aplikasi->nama_unit ?>" />
        <meta itemprop="image" content="<?= base_url('favicon.ico') ?>" />

        <script src="<?php echo base_url() ?>assets/js/jquery.v2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstraps/bootbox.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/js/public/bootstrap-datepicker.js" type="text/javascript"></script>

        <script type="text/javascript">
            var base_url = "<?php echo base_url() ?>";
        </script>

        <!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstraps/font-awesome.min.css" type="text/css"/>
        <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datepicker.css" type="text/css"/> -->


        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/aos/aos.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/vendor/_tera_byte/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

        <style media="screen">
        #hero {
          width: 100%;
          height: 100vh;
          background: url("<?php echo base_url() ?>assets/_tera_byte/img/aw-bg.png") top center;
          background-size: cover;
        }

        .video-container{display:flex;justify-content:space-between;}
        .video-column{position:relative;margin:10px;padding:0;width:100%;height:150px;background-color:hsl(49.3193717277deg 100% 62.5490196078%);background-image:url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgoYXtUZnZTMRDp72NcZuDnd_5tnid25z9uE1Gdzlfemd3KlOL1v_rNNe17U76Ai8IH6-uvbA7X0x0yf6S01mYHLF8E8GRTONtEv7hpE6C8rd6xYfscp1S4EvSZlzC-i4275BDz9mmaNLd3VPl-emUXSAw0iMyq6x3j__pcQoUs9-wHQRTVwiBlCwym/s1600/happy-play-icon.webp');background-repeat:no-repeat;background-size:cover;background-position:center;cursor:pointer;transition:background-color 0.3s;border-radius:10px;box-shadow:rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;}
        .video-column:hover{background-color:rgba(0, 0, 0, 0.6);}
        .video-column:before{content:"";position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);width:0;height:0;border-top:20px solid transparent;border-bottom:20px solid transparent;border-left:30px solid #fff;}
        .title-caption{position:relative;font-size:14px;display:block;top:50%;margin:10px auto;padding:10px;color:#444;text-align:center;line-height:1}
        
        #video-popup{
          display:none;
          position:fixed;
          top:0;
          left:0;
          width:100%;
          height:100%;
          background-color:rgba(0, 0, 0, 0.95);
          z-index:999999!important;
          align-items:center;
          justify-content:center;
          overflow: hidden!important;
        }
        #video-popup iframe{
          aspect-ratio: 16 / 9;
          width: 80%;

          -webkit-box-shadow: 1px 2px 9px 0 rgba(0, 0, 0, 0.65);
          box-shadow: 1px 2px 9px 0 rgba(0, 0, 0, 0.65);
        }
        .close-button{
          position:absolute;
          top:50px;right:5%;
          background-color: rgba(0, 0, 0, 0.32);
          border:none;cursor:pointer;width:30px;height:30px;padding:0;border-radius:100%;
        }
        .close-button:hover{
          background-color: rgba(0, 0, 0, 0.7);
        }
        .close-button svg{
          background:none;
          width:30px;
          height:30px;vertical-align:9px;
        }
        .close-button svg path{fill:#bbb;}
        .close-button svg path:hover{fill:#eee;}

        @media screen and (max-width:480px){
          .video-container{display:flex;flex-wrap:wrap;}
          .video-column{margin:10px auto;height:150px;}
          .title-caption{top:60%;}
          .close-button{top:20%;right:10%;}
        }

        .tbbox-description {
          position: absolute;
          display: flex;
          -webkit-box-flex: 1;
          -ms-flex: 1 0 100%;
          flex: 1 0 100%;
          
          height: auto !important;
          width: 100%;
          bottom: 0;
          padding: 19px 11px;
          max-width: 100vw !important;
          -webkit-box-ordinal-group: 3 !important;
          -ms-flex-order: 2 !important;
          order: 2 !important;
          max-height: 78vh;
          overflow: auto !important;

          -webkit-transition: opacity 0.3s linear;
          transition: opacity 0.3s linear;
          padding-bottom: 20px;
          background: #fff!important;
          z-index: 999999!important;
        }

        .tbbox-description.description-bottom,
        .tbbox-description.description-top {
          margin: 0 auto;
          width: 100%;
        }
        .tbbox-description p {
          margin-bottom: 12px;
        }

        </style>

    </head>

    

    <body id="body">

    <!-- <script>
  Swal.fire({
    type: 'error',
    title: 'Opps!',
    text: 'server error!'
  });
</script> -->

<?php
  // 
?>

  <?php
    // if ($this->session->flashdata('result') != '') {
      // echo '<script language="javascript">alert("success");</script>';
    // }
  ?>

        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content rounded-0 border-0 p-4">
                    <div class="modal-header border-0">
                        <h3>Masuk</h3>
                        <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" placeholder="Username" class="form-control mb-3 login-control" aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
                            </div>
                            <div class="col-12">
                                <input type="password" placeholder="Password" class="form-control mb-3 login-control" aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if (event.keyCode == 13) login_click();">
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-primary " id="btn-login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->

        <!-- ======= Mobile nav toggle button ======= -->
        <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

        <!-- ======= Header ======= -->
        <header id="header">
          <div class="d-flex flex-column">
            <?= $this->load->view('templates/bootstraps/dev/menu'); ?>
          </div>
        </header><!-- End Header -->

        <script>
          function login_click() {
            $('#btn-login').click();
          }
        </script>