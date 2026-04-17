<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>
            <?= $aplikasi->singkatan_unit ?> - <?=$inisial?>
        </title>

        <meta name="keywords" content="Belanja , beli , Dekorasi , Rumah , HomeDepo , Homedepo , homedepo , Home , Depo , Marketplace , marketplace , Market , Place , place , Home Depo" />
        <meta name="description" content="Home Depo belanja puas - <?=$inisial?>">
        <meta name="author" content="aom.my.id">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.jpg" type="image/x-icon" />
        <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/homedepo_icon.jpg">

        <style>
        
        /* body {
            overflow-y: hidden;
        } */
        
        .container {
            max-width: 100%;
        }

        .iframe-wrapper {
            /* position: relative;
            padding-top: 100%; */
            overflow: hidden;
            width: 100%;
        }

        .iframe {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            border: none;
        }
        </style>
        
    </head>

    <body>

        <div class="container"> 
            <div class="iframe-wrapper">
                <iframe class="iframe"
                    src="https://itconsultant.biz.id/fitur/qrcode-generator/"
                    title="IT Consultant Indonesia"
                    
                    >
                </iframe>
            </div>
        </div>

    </body>

</html>