<style media="screen">
  @media (min-width: 480px) {
    .responsivetb-product {
      width: 200px;
      height: 200px;
      /* background: rgba(255, 0, 0, 0.1)!important; */
    }

    .imgtb-responsive {
      height: 192px !important;
    }

  }

  @media (max-width: 991px) {
    #viewhp {
      display: none !important;
    }

    #viewpc {
      display: block !important;
    }
  }

  @media (min-width: 991px) {
    #viewhp {
      display: block !important;
    }

    #viewpc {
      display: none !important;
    }
  }

  .addtocart {
    background: #fff !important;
    color: #ee3d43 !important;
  }

  .del-favorit {
    background: #ee3d43;
    color: #fff;

    visibility: visible;
    left: auto;
    right: auto;
    transition: all 0.2s;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;


    font-size: 14px;
    padding: 2px 10px 0 10px;
    height: 32px;
    line-height: 30px;
  }

  .del-favorit:hover {
    background: #fff;
    color: #ee3d43;
    border: 1px solid #ee3d43;
  }

  .in-favorit {
    background: #fff;
    color: #ee3d43;

    visibility: visible;
    left: auto;
    right: auto;
    transition: all 0.2s;
    text-align: center;
    margin-top: 0;
    margin-bottom: 0;


    font-size: 14px;
    padding: 0 10px 0 10px;
    height: 32px;
    line-height: 30px;
    border: 1px solid #ee3d43;
  }

  .in-favorit:hover {
    background: #ee3d43;
    color: #fff;
    border: 1px solid #ee3d43;
  }

  /* @media (max-width: 992px) {
    .container-product {
      padding-top: 130px;
    }
  } */

  @media (min-width: 992px) {
    .container-product {
      padding-top: 20px;
    }
  }

  @media (max-width: 992px) {
    .container-pilihan {
      padding-top: 170px;
    }
  }

  @media (min-width: 992px) {
    .container-pilihan {
      padding-top: 20px;
    }
  }

  .btn-lainnya {
    background-color: #fff;
    width: 100%;
    padding: 10px;
    border: 1px solid red ;
    text-align: center;
    font-weight: 600;
  }

  .btn-lainnya:hover {
    background-color: #db0c13;
    color: #fff;
  }

  .banners-container {
    padding: 0px 0 26px!important;
    background-color: transparent!important;
  }

  .owl-theme .owl-dots .owl-dot span {
      height: 5px;
      width: 20px;
      margin: -2px;
  }
</style>

<div role="main" class="main">

<div class="container container-pilihan">
        <div class="row">
          <div class="col-md-12 normal">

            <div class="tabs home-products-tab">

              <!-- <ul class="nav nav-links">
                <li class="active">
                  <a href="#KategoriPilihan" data-toggle="tab">kategori Pilihan</a>
                </li>
              </ul> -->

              <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow " style="padding-top:10px;">
                <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" title="Bazar" class="client" style="width:70px!important;margin-left:50px;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/bazar_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="padding-left:10px;">Bazar</font> -->
                </a>
                <a href="<?= base_url() ?>pembiayaan/tac" title="Pembiayaan" class="client" style="width:70px!important;margin-left:50px;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/pembiayaan_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="">Keuangan</font> -->
                </a>
                <a href="<?= base_url() ?>proyek/tac" title="Kebutuhan Proyek" class="client" style="width:70px!important;margin-left:50px;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/kebutuhan_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="">Keuangan</font> -->
                </a>
                <a href="https://www.homedepo.co.id/blog/" title="Tips" class="client" style="width:70px!important;margin-left:50px;" target="_blank">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/tips_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="">Keuangan</font> -->
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>

  <div id="viewhp" class="banners-container">
    <div class="container">
      <div class="row">

        <div class="slider-area">
          <div class="owl-carousel owl-theme" data-plugin-options="{'items':1, 'loop': true}">

            <?php foreach ($slideshow as $key => $slides) { ?>

              <!-- <a href="#" class="banner"> -->
              <img src="<?= base_url() ?>assets/img/slides/<?= $slides->foto_slide ?>" alt="<?= $slides->nama_slide1 ?>" style="border-radius: 8px;">
              <!-- <img style="height:405px;" src="<?= base_url() ?>assets/img/slides/<?= $slides->foto_slide ?>" alt="<?= $slides->nama_slide1 ?>"> -->
              <!-- </a> -->

            <?php } ?>

            <!-- <a href="#" class="banner">
            <img src="<?= base_url() ?>assets/img/demos/slides/shop8/slide1.jpg" alt="Banner">
          </a> -->

          </div>
        </div>

        <div class="side-area">
          <div class="row">
            <div class="col-md-12 col-sm-4 col-xs-12">

              <?php foreach ($showiklan as $key => $iklan) { ?>

                <a href="#" class="banner">
                  <img src="<?= base_url() ?>assets/img/iklan/<?= $iklan->foto_iklan ?>" alt="<?= $iklan->nama_iklan ?>" style="border-radius: 8px;">
                  <!-- <img style="height:129px;" src="<?= base_url() ?>assets/img/iklan/<?= $iklan->foto_iklan ?>" alt="<?= $iklan->nama_iklan ?>"> -->
                </a>

              <?php } ?>
            </div>

            <!-- <div class="col-md-12 col-sm-4 col-xs-12">
            <a href="#" class="banner">
              <img src="<?= base_url() ?>assets/img/demos/banners/shop8/banner2.jpg" alt="Banner">
            </a>
          </div>

          <div class="col-md-12 col-sm-4 col-xs-12">
            <a href="#" class="banner">
              <img src="<?= base_url() ?>assets/img/demos/banners/shop8/banner3.jpg" alt="Banner">
              <img src="<?= base_url() ?>img/slide/banner-free-ongkir.jpeg" alt="Free Ongkir">
            </a>
          </div> -->
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="viewpc" class="banners-container">
    <div class="container container-product">
      <div class="row">

        <div class="slider-area">
          <img class="img-responsive" src="<?= base_url() ?>assets/img/slides/banner1.jpg" alt="homedepo" style="border-radius: 8px;">
        </div>

      </div>
    </div>
  </div>

  <!-- <div class="homepage-bar">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <i class="fa fa-truck bar-icon"></i>
        <div class="bar-textarea">
          <h3>GRATIS ONGKIR</h3>
          <p>Hingga Rp. 500.000,-</p>
        </div>
      </div>
      <div class="col-md-4">
        <i class="fa fa-dollar bar-icon"></i>
        <div class="bar-textarea">
          <h3>GRATIS MASKER</h3>
          <p>Syarat dan ketentuan berlaku</p>
        </div>
      </div>
      <div class="col-md-4">
        <i class="fa fa-support bar-icon"></i>
        <div class="bar-textarea">
          <h3>DUKUNGAN ONLINE 24/7</h3>
          <p>
            <i class="fa fa-whatsapp" style="color: #4ced69;">
              <a class="a-tb-wa" href="https://api.whatsapp.com/send?phone=6281113801802&text=Hai%20Homemin ,%20tolong%20bantu%20saya :)" target="_blank" title="WA">+62811 1380 1802</a>
            </i>
          </p>
        </div>
      </div>
    </div>
  </div>
</div> -->

  <div class="container">
    <div class="row">
      <div class="col-md-12 normal">

        <div class="mb-xlg tabs home-products-tab">

          <!-- <ul class="nav nav-links">
            <li class="active">
              <a href="#ListPartner" data-toggle="tab">PARTNER</a>
            </li>
          </ul> -->

          <!-- <h2 class="slider-title">
            <span class="inline-title">LIST PARTNER</span>
            <span class="line"></span>
          </h2> -->

          <!-- <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow ">
            <a href="#" title="Haston" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/haston.png" alt="partner homedepo" style="width:110px!important;margin-top:10px!important;margin-left:30px!important;">
            </a>
            <a href="#" title="Mitra 10" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/mitra10.png" alt="partner homedepo" style="width:100px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="CSA" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/csa.png" alt="partner homedepo" style="width:70px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="Kulit Batu" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/kulitbatu.png" alt="partner homedepo" style="width:80px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="Tukang Bagus" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/tukangbagus.png" alt="partner homedepo" style="width:50px!important;margin-left:50px!important;">
            </a>
            <a href="#" title="Gradana" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/gradana.png" alt="partner homedepo" style="width:70px!important;margin-left:20px!important;">
            </a>
          </div> -->
          <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow ">
            <a href="<?=base_url().'seller/detail/haston'?>" title="Haston" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/haston.png" alt="partner homedepo" style="width:110px!important;margin-top:10px!important;margin-left:30px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/mitra10'?>" title="Mitra 10" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/mitra10.png" alt="partner homedepo" style="width:100px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/csa'?>" title="CSA" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/csa.png" alt="partner homedepo" style="width:70px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/kulitbatu'?>" title="Kulit Batu" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/kulitbatu.png" alt="partner homedepo" style="width:80px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/tukangbagus'?>" title="Tukang Bagus" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/tukangbagus.png" alt="partner homedepo" style="width:50px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/gradana'?>" title="Gradana" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/gradana.png" alt="partner homedepo" style="width:70px!important;margin-left:20px!important;">
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container" style="padding-top:20px;">
    <div class="row">
      <div class="col-md-12 normal">
        <div class="tabs home-products-tab">
          <ul class="nav nav-links">
          <li class="active" style="float: left;">
              <a href="#ProdukTerbaru" data-toggle="tab">Rekomendasi</a>
            </li>
            <li style="float: right;font-size:10px;color:#1c2a5f !important;">
              <a href="<?=base_url('welcome/tampil_lainnya')?>">Lihat Lainnya &nbsp; <i class="fa fa-angle-right" style="font-size:12px;font-weight:bold;"></i></a>
            </li>
          </ul>

          <div class="tab-content">

            <div id="ProdukTerbaru" class="tab-pane active">
              <ul class="products-grid columns5">

                <?php
                  foreach ($product_terbaru as $key => $productterbaru) {
                  if ($productterbaru->is_product == 1){
                    $f_product = $productterbaru->nama_file.".jpg";
                    $l_img = base_url()."assets/img/product/m10/".$productterbaru->nama_file.".jpg";
                    $get_img = "assets/img/product/m10/".$productterbaru->nama_file.".jpg";
                  }else {
                    $f_product = $productterbaru->nama_file;
                    $l_img = base_url()."assets/img/product/".$productterbaru->nama_file;
                    $get_img = "assets/img/product/".$productterbaru->nama_file;
                  }

                  if (file_exists($get_img)) {
                ?>

                  <div class="col-md-3 col-xs-6" style="padding: 10px 15px 20px 20px;">
                    <div class="box-product product">
                      <figure class="product-image-area responsivetb-product">

                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" title="<?= $productterbaru->nama_product ?>" class="product-image">
                          <img class="imgtb-responsive" src="<?= $l_img ?>" alt="<?= $productterbaru->tag_product ?>">
                          <!-- <img src="<?= base_url() ?>assets/img/product/<?= $productterbaru->nama_file ?>" alt="<?= $productterbaru->tag_product ?>" class="product-hover-image"> -->
                        </a>

                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" class="product-quickview">
                          <i class="fa fa-share-square-o"></i>
                          <span>Lihat Produk</span>
                        </a>

                        <div class="product-actions" id="divProductActions">

                          <?php
                          $this->db->from(kode_tbl() . 'product_favorite' . ' a');
                          // $this->db->join(kode_tbl().'product b','a.id_product=b.id');
                          $this->db->where('a.id_product', $productterbaru->id);
                          $this->db->where('a.id_buyer', $id_member);
                          $favorites = $this->db->get()->row();

                          if ($favorites->id_product == $productterbaru->id) {
                            $classf = 'del-favorit';
                            $titlef = 'Hapus Favorit';
                            $onclickf = 'deletFavorit';
                            $idf = $favorites->id;
                          } else {
                            $classf = 'in-favorit';
                            $titlef = 'Favoritkan';
                            $onclickf = 'addFavorit';
                            $idf = $productterbaru->id;
                          }

                          ?>

                          <a href="<?= base_url() ?>home" onclick="<?= $onclickf ?>(<?= $idf; ?>)" id="FaVorit" class="<?= $classf ?>" title="<?= $titlef ?>">
                            <i class="fa fa-heart" style="padding-top:8px;"></i>
                          </a>

                          <a id="addKeranjang" href="<?= base_url() ?>home" onclick="addKeranjang(<?= $productterbaru->id; ?>)" class="addtocart" title="Masukan Keranjang">
                            <i class="fa fa-shopping-cart" style="padding-top:8px;"></i>
                          </a>

                          <!-- <a href="<?= base_url() ?>product/bagikan/<?= $productterbaru->nama_file ?>/<?= $productterbaru->id ?>" class="comparelink" title="Bagikan">
                        <i class="fa fa-link" style="padding-top:8px;"></i>
                      </a> -->
                        </div>




                      </figure>
                      <div class="product-details-area">

                        <h2 class="product-name name-i">
                          <a href="<?=base_url('seller/detail/'.$seller_array[$productterbaru->id_member])?>" title="homedepo" style="color:#1c2a5f!important">
                            <i class="fa fa-building-o" style="color:#db0c13;"></i>
                            <?= $productterbaru->inisial_member ?>
                          </a>
                        </h2>

                        <h2 class="product-name name-p">
                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" title="<?= $productterbaru->nama_product ?>">
                            <?= $productterbaru->nama_product ?>
                          </a>
                        </h2>
                        <!-- <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:60%"></div>
                      </div>
                    </div> -->

                        <div class="product-price-box" style="text-align:left;">
                          <span class="product-price text-price">
                            Rp. <?= number_format($productterbaru->harga_product, 0, ',', '.') ?>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php }} ?>

              </ul>
            </div>

            <a href="<?=base_url('welcome/tampil_lainnya')?>" class="">
              <div class="btn btn-lainnya">
                  LIHAT PRODUK LAINNYA
              </div>
            </a>

          </div>
        </div>

      </div>

      <!-- <aside class="col-md-3 sidebar shop-sidebar">
      <?= $this->load->view('templates/bootstraps/menu_samping'); ?>
    </aside> -->

    </div>
  </div>

  <!-- posisi pop up iklan -->

</div>


<script type="text/javascript">
  var baseUrl = '<?= base_url() ?>';

  function addKeranjang(id) {
    // alert(id);

    var toUrl = "buyer/tambah_keranjang";
    var urlTarget = baseUrl + toUrl;

    $.ajax({
      url: urlTarget + '/' + id + '/1',
      type: 'POST',
      data: id,
      processData: false,
      contentType: false,
      success: function(data) {
        // data = JSON.parse(data);
        if (data.error) {
          // $('#myOverlay').hide();
          // $('#loadingGIF').hide();
          alert(data.error);
        } else {
          alert('Produk berhasil ditambahkan ke keranjang');
          // $("#FaVorit").load();
          // $("#divFaVorit").load();
        }
        // alert('ok');
        // $("#divFaVorit").load();
      },
      error: function(request, status, error) {
        // alert(request.responseText);
        // $('#myOverlay').hide();
        // $('#loadingGIF').hide();
      }
    });

  };

  function addFavorit(id) {
    // alert(id);

    var toUrlf = "buyer/tambah_favorit";
    var urlTargetf = baseUrl + toUrlf;

    $.ajax({
      url: urlTargetf + '/' + id,
      type: 'POST',
      data: id,
      processData: false,
      contentType: false,
      success: function(data) {
        // data = JSON.parse(data);
        if (data.error) {
          // $('#myOverlay').hide();
          // $('#loadingGIF').hide();
          alert(data.error);
        } else {
          // alert('ok');
          alert('Produk berhasil ditambahkan ke favorit');
        }
      },
      error: function(request, status, error) {
        // alert(request.responseText);
        // $('#myOverlay').hide();
        // $('#loadingGIF').hide();
      }
    });

  };

  function deletFavorit(id) {
    // alert(id);

    var toUrl = "buyer/hapus_favorit";
    var urlTarget = baseUrl + toUrl;

    $.ajax({
      url: urlTarget + '/' + id,
      type: 'POST',
      data: id,
      processData: false,
      contentType: false,
      success: function(data) {
        // data = JSON.parse(data);
        if (data.error) {
          // $('#myOverlay').hide();
          // $('#loadingGIF').hide();
          alert(data.error);
        } else {
          // alert('ok');
          alert('Produk berhasil dihapus dari daftar favorit');
        }
      },
      error: function(request, status, error) {
        alert(request.responseText);
        // $('#myOverlay').hide();
        // $('#loadingGIF').hide();
      }
    });

  };
</script>
