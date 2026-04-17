

    <style>
        #vod {
                padding: 20px 0px 10px 0px;
        }

        @media (min-width: 1200px) {
            #vod {
                padding: 70px 0px 10px 0px;
            }
        }
    </style>

      <section id="vod" class="section bg-default text-center">
        <div id="ctnHeader" class="container">
            
          <div class="tabs-custom tabs-vertical tabs-video" id="tabs-2">
            <div class="tab-content">

            <div class="tab-pane show active" id="tabs-2-0">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                    <img class="image_center" src="<?=base_url()?>assets_tv/images/tv/poster_blue_m1.png" width="660" height="365" style="border-radius: 8px !important;">
                </div>
            </div>

            <?php
                foreach ($video_tv as $keys => $img_video) {
            ?>

              <div class="tab-pane v-video" id="tabs-2-<?=$img_video->code_video?>" data-cvideo="<?=$img_video->code_video?>">
                <div id="vid-bg" class=" entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-<?=$img_video->code_video?>" class="frame-video" width="660" height="365" src="" frameborder="0" allow="autoplay; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
              </div>

              <?php } ?>

            </div>
          </div>
        </div>
      </section>

          <section id="latest-video">
            <div class="container">
              <div class="text-center" style="padding: 20px 0px 10px 0px;">
                <h6 class="text-gray-600">Video on Demand</h6>
              </div>
            </div>

            <div class="tab-column" style="padding-bottom: 80px!important;">
                <div class="row">
                
                <?php
                  $no=1;
                  foreach ($video_tv as $keys => $value_videos) {
                    if(fmod($no,2)==1) { $float="right"; }
                    else { $float="left"; }
                ?>

                  <div class="column_tb_2" role="presentation">
                    <div class="tv-video" style="float:<?=$float?>!important;" data-codev="<?=$value_videos->code_video?>">
                      <a id="x-<?=$value_videos->code_video?>" class="click-video" href="javascript:void(0)" data-toggle="tab" data-key="<?=$value_videos->code_video?>" data-name="<?=$value_videos->nama_video?>" data-url="<?=$value_videos->link_video?>" data-embed="<?=$value_videos->link_embed?>" data-poster="<?=$value_videos->poster_video?>" data-logo="<?=$value_videos->logo_video?>">
                        <img class="img_poster" src="<?=$value_videos->poster_video?>" alt="<?=$value_videos->nama_video?>" title="<?=$value_videos->nama_video?>"/>
                      </a>

                      <div class="bottom-desc <?=$class_l?>" style="" title="<?=$value_videos->nama_video?>">
                        <?php
                          $text_videos = $value_videos->nama_video;
                          $segmen_text = explode(" ", $text_videos);
                          $count_seg = count($segmen_text);

                          $data_text = "";
                          for($i=0; $i <= 4; $i++){
                            $data_text .= $segmen_text[$i]." ";
                          }
                        ?>

                        <div class="" style="float:left!important;width:90%;">
                          <a id="x-<?=$value_videos->code_video?>" class="click-video" href="javascript:void(0)" style="color:#222d4f!important" data-toggle="tab" data-key="<?=$value_videos->code_video?>" data-name="<?=$value_videos->nama_video?>" data-url="<?=$value_videos->link_video?>" data-embed="<?=$value_videos->link_embed?>" data-poster="<?=$value_videos->poster_video?>" data-logo="<?=$value_videos->logo_video?>">
                          <?php
                            if($count_seg <= 5){
                              echo ($data_text);
                            }else{
                              echo ($data_text)."...";
                            }
                          ?>
                          </a>
                        </div>
                        
                        <?php
                          $text_link = $value_videos->link_embed;
                          $segmen_link = explode("/", $text_link);

                          $encrypted_id = $this->encrypt->encrypt_tb($value_videos->id);
                          $link_embed = base_url('watch/'.($encrypted_id).'/'.$segmen_link[4]);
                          // $link_embed = base_url('watch/'.$segmen_link[4]);

                          // print_r($segmen_link[4]);
                        ?>

                        <div class="" style="float:right!important;width:8%;text-align:right;"> 
                          <a class="copy_text icon fa-share-square-o" data-action="copy" data-url="<?=$link_embed?>" href="javascript:void(0)" style="color:#f47f1f;" title="share"></a>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <?php $no++;} ?>
                  <input type="text" style="position: absolute; left: -1000px; top: -1000px" value="" id="share-url">
                </section>