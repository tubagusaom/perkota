<style>
  @media (max-width: 992px) {
    .c_tb_ap {
      padding-top:180px;
    }
  }

  @media (min-width: 993px) {
    .c_tb_ap {
      padding-top:33px;
    }
  }
</style>

<div class="container c_tb_ap">
    <div class="row">

      <div class="col-md-12 normal">
        <div class="tabs home-products-tab box-products-tab">
          <ul class="nav nav-links">
            <li class="active">
              <a href="#ProdukTerbaru" data-toggle="tab">
                <i class="fa fa-building-o" style="color:#db0c13;font-size:13px;"></i>
                <?=$show_seller->member?>
              </a>
              <h6><?=$show_seller->province_name. ' - ' .$show_seller->city_name?></h6>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus</p> -->
            </li>
            <!-- <li>
            <a href="#Diskon" data-toggle="tab">Kejar Diskon</a>
          </li> -->
          </ul>
        </div>
      </div>

      <aside class="col-md-3 normal sidebar shop-sidebar" style="padding-top:13px;">

        <div class="custom-block">

          <!-- <p><?=$show_seller->member?></p> -->
          <!-- <h5>This is a custom sub-title.</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus</p> -->
        </div>

        <!-- <hr class="mt-xlg mb-xl"> -->

        <div class="panel-group mb-xlg">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" href="#cat-list-container">
                  Etalase Toko
                </a>
              </h4>
            </div>
            <div class="accordion-body collapse in" id="cat-list-container">
              <div class="panel-body">
                <ul class="category-list">
                  <li>
                    <a href="#">Elektrikal</a>
                    <a href="#" class="plus"></a>

                    <ul>
                      <li>
                        <a href="#">Listrik &amp; Pencahayaan</a>
                        <a href="#" class="plus"></a>
                        <ul>
                          <li><a href="#">-</a></li>
                          <li><a href="#">-</a></li>
                        </ul>
                      </li>

                      <li>
                        <a href="#">Ekserior</a>
                        <a href="#" class="plus"></a>
                        <ul>
                          <li><a href="#">Genteng</a></li>
                          <li><a href="#">Pintu</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Specials</a></li>
                      <li><a href="#">Featured</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Interior</a>
                    <a href="#" class="plus"></a>
                    <ul>
                      <li><a href="#">Keramik</a></li>
                      <li><a href="#">Sanitary</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </aside>

      <div class="col-md-9 normal">
        <div class="tabs home-products-tab">

          <div class="tab-content">

            <div id="ProdukTerbaru" class="tab-pane active">
              <ul class="products-grid columns4">

                <?php
                foreach ($data as $key => $productall) {

                    if ($productall->is_product == 0) {
                        $show_file_utama = $this->seller_model->show_file_utama($productall->id);
		                // $show_file = $this->seller_model->show_file($productall->id);

                        $filename = $show_file_utama->nama_file;
                        $baselinkproduct = base_url().'assets/img/product/'.$filename;
                        $linkget = 'assets/img/product/'.$filename;
                    }else {
                        $show_file_utama = $productall->kode_product.".jpg";
		                // $show_file = $productall->kode_product.".jpg";

                        $filename = $productall->kode_product.".jpg";
                        $baselinkproduct = base_url().'assets/img/product/m10/'.$filename;
                        $linkget = 'assets/img/product/m10/'.$filename;
                    }

                    if (file_exists($linkget)) {
                ?>

                  <div class="col-md-4 col-xs-6" style="padding: 10px 15px 20px 20px;">
                    <div class="box-product product">
                      <figure class="product-image-area responsivetb-product">


                        <a href="<?= base_url() ?>product/detail/<?= $productall->is_product ?>/<?= $productall->id ?>/<?= $filename ?>" title="<?= $productall->nama_product ?>" class="product-image">
                          <img class="imgtb-responsive" src="<?=$baselinkproduct?>" alt="<?= $productall->tag_product ?>">
                        </a>

                        <a href="<?= base_url() ?>product/detail/<?= $productall->is_product ?>/<?= $productall->id ?>/<?= $filename ?>" class="product-quickview">
                          <i class="fa fa-share-square-o"></i>
                          <span>Lihat Produk</span>
                        </a>

                        <div class="product-actions">
                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="in-favorit" title="Favoritkan">
                            <i class="fa fa-heart" style="padding-top:8px;"></i>
                          </a>

                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="addtocart" title="Masukan Keranjang">
                            <i class="fa fa-shopping-cart" style="padding-top:8px;"></i>
                          </a>

                          <!-- <a href="#" class="comparelink" title="Bagikan">
                          <i class="fa fa-link" style="padding-top:8px;"></i>
                        </a> -->
                        </div>


                      </figure>

                      <div class="product-details-area">

                        <h2 class="product-name name-i">
                          <a href="<?=base_url('seller/detail/'.$inisial_seller)?>" title="homedepo" style="color:#1c2a5f!important">
                            <i class="fa fa-building-o" style="color:#db0c13;"></i>
                            <?= $productall->inisial_member ?>
                          </a>
                        </h2>

                        <h2 class="product-name name-p">
                          <a href="<?= base_url() ?>product/detail/<?= $productall->is_product ?>/<?= $productall->id ?>/<?= $filename ?>" title="<?= $productall->nama_product ?>">
                            <?= $productall->nama_product ?>
                          </a>
                        </h2>
                        <!-- <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:60%"></div>
                      </div>
                    </div> -->

                        <div class="product-price-box" style="text-align:left;">
                          <span class="product-price text-price">
                            Rp. <?= number_format($productall->harga_product, 0, ',', '.') ?>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php
                        }
                    }
                ?>

              </ul>
            </div>

            <div class="col-md-3" style="margin-top:20px;margin-bottom:100px; border-top: 1px solid #ddd;">

          </div>
          <div class="col-md-9" style="margin-top:20px;margin-bottom:100px; border-top: 1px solid #ddd;">
              <div class="halaman">
                  <ul class="pager">
                      <li class="previous">
                          Halaman :<?php echo rtrim($halaman) ."<b>/" . ceil($jmldata / $per_page); ?>
                      </li>
                  </ul>
              </div>
          </div>

          </div>
        </div>

      </div>

    </div>
  </div>
