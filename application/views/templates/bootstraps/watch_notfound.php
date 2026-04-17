<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
    <?= $aplikasi->nama_unit ?> | Video Not Found
    </title>

    <meta name="keywords" content="TV , TV ONLINE , roadcast. Embed Video" />
    <meta name="description" content="Video Can't Be Found">
    <meta name="author" content="terabytee.my.id">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png">
    <link rel="icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon">

    <style>
        .videoContainer {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #222d4f;
        }

        iframe {
            /* optional */
            width: 95%;
            height: 97%;
            padding: 8px;
            border-radius: 15px;
            /* width: 100%;
            height: 100%; */
        }
    </style>

</head>

<body>
    <div class="videoContainer">
        <!-- <img class="img_poster" src="<?=$value_videos->poster_video?>" alt="<?=$value_videos->nama_video?>" title="<?=$value_videos->nama_video?>"/> -->
        <!-- <iframe class="videoContainer__video" width="100%" height="100%" src="https://www.youtube.com/embed/<?=$id_embed?>?autoplay=1&mute=1&modestbranding=1&controls=1&fs=0&loop=1&rel=0&showinfo=0&disablekb=1&playlist=<?=$id_embed?>" frameborder="0">
        </iframe> -->

        <!-- <iframe id="videoEmbed" class="videoContainer__video" width="100%" height="100%" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
        <!-- <iframe id="videoembed" class="videoContainer__video" width="100%" height="100%" src="" allow="autoplay" frameborder="0" allowfullscreen="" sandbox="allow-forms allow-same-origin allow-scripts">
        </iframe> -->

        <h1 style='text-align:center;font-family:calibri;color:#f47f1f'>Video Can't Be Found</h1>
        

        <?php
            // echo $decryptedtext;
        ?>

    </div>

    <script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    var idEmbed = "<?= $id_embed?>";
    // var uriEmbed = "https://www.youtube.com/embed/"+ idEmbed +"?autoplay=1&mute=0&modestbranding=1&controls=1&fs=0&loop=1&rel=0&showinfo=0&disablekb=1&playlist="+idEmbed;
    var uriEmbed = 'https://www.youtube.com/embed/' + idEmbed;

    // document.getElementById("videoembed").src = uriEmbed;

    tag.src = "https://www.youtube.com/iframe_api";
    // tag.src = uriEmbed;
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '100%',
            width: '100%',
            videoId: idEmbed,
            playerVars: {
                'autoplay': 1,
                'mute':1,
                'controls': 1
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            //setTimeout(stopVideo, 6000);
            done = true;
        }
    }

    function stopVideo() {
        player.stopVideo();
    }
</script>

<script>
    // var idEmbed = "<?= $id_embed?>";
    // var uriEmbed = "https://www.youtube.com/embed/"+ idEmbed +"?autoplay=1&mute=0&modestbranding=1&controls=1&fs=0&loop=1&rel=0&showinfo=0&disablekb=1&playlist="+idEmbed;
    // var uriEmbed = 'https://www.youtube.com/embed/' + idEmbed + '?start=1';

    // alert(uriEmbed);




    // alert(uriEmbed);

    // var idFrame = document.getElementById('videoembed');
    // idFrame.attr('src',uriEmbed);
    // document.getElementById('videoembed').attr('src',uriEmbed);
    

    // $('#frame-' + keys).attr("src",embeds + "?autoplay=1&mute=0");
    // $('#videoEmbed').attr("src",uriEmbed);
</script>

    </body>
</html>