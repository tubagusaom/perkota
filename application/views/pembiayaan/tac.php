<style>
    @media only screen and (max-width: 993px) {
        .tbpt {
            padding-top: 180px;
        }
    }

    @media only screen and (min-width: 993px) {
        .tbpt {
            padding-top: 50px;
        }
    }

    #homedepo-gradana {
        max-width: 850px;
        max-height: 700px;
        overflow: hidden;
    }

    .custom1 {
        margin-left: auto !important;
        margin-right: auto !important;
        /* margin: 20px; */
        padding: 20px;
    }

    .custom2 {
        position: relative;
        height: 0;
        overflow: hidden;
        padding-bottom: 90%;
    }

    /* .custom2 iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 75%;
        height: 100%;
        padding: 0;
        margin: 0;
        border: none;
    } */

    .custom2 embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
        border: none;
    }
</style>

<div role="main" class="main tbpt">
    <div class="container about-container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="h1 heading-primary"> Syarat & Kondisi <strong>Pembiayaan</strong></h3>
            </div>
        </div>

        <div class="row">

            <!-- <div class="col-md-12">
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh.
                </p>
            </div> -->

            <div class="col-md-12">
                <div id="homedepo-gradana" class="custom1">
                    <div class="custom2">
                        <!-- <iframe src="<?= base_url() ?>assets/files/pembiayaan/pembiayaan-homedepo.pdf"></iframe> -->

                        <embed src="<?= base_url() ?>assets/files/pembiayaan/pembiayaan-homedepo.pdf#toolbar=1&navpanes=0&scrollbar=1&page=0&zoom=83" type="application/pdf" />

                        <!-- <object data="<?= base_url() ?>assets/files/pembiayaan/pembiayaan-homedepo.pdf" width="600" height="400"></object> -->
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <a href="https://api.whatsapp.com/send?phone=6281230222470&text=Hai%20Homemin ,%20Saya%20ingin%20bertanya%20tentang%20pembiayaan :)" target="_blank" class="btn btn-primary btn-block mt-xl">
                    <i class="fa fa-whatsapp"></i> Hubungi Kami
                </a>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <hr class="medium">
            </div>
        </div>


    </div>
</div>