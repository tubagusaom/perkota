


<?php
  header('Content-type: application/xml; charset="ISO-8859-1"',true);

  date_default_timezone_set('Asia/Jakarta');
  $datetime1 = date('Y-m-d H:i:s');
  // $datetime1 = new DateTime(date('Y-m-d H:i:s'));
?>

<urlset
  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
  xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">

  <url>
    <loc><?= base_url() ?></loc>
    <lastmod>
      <?php
        echo $datetime1;
        // echo $datetime1->format(DATE_ATOM);
      ?>
    </lastmod>
    <changefreq>daily</changefreq>
    <priority>0.1</priority>
  </url>


  <?php // url segment 1 ?>
  <?php
    foreach($post1 as $item1) {
      // $datetime = new DateTime($item['updated_when']);
  ?>

    <url>
      <loc><?= base_url($item1['slug_url_1']) ?></loc>
      <lastmod>
        <?php
          echo $item1['updated_when'];
          // echo $datetime->format(DATE_ATOM);
        ?>
      </lastmod>
      <changefreq>daily</changefreq>
      <priority>0.1</priority>
    </url>
  <?php } ?>

  <?php // url segment 2 ?>
  <?php
    foreach($post2 as $item2) {
      // $datetime = new DateTime($item['updated_when']);
  ?>

    <url>
      <loc><?= base_url($item2['slug_url_1'].'/'.$item2['slug_url_2']) ?></loc>
      <lastmod>
        <?php
          echo $item2['updated_when'];
          // echo $datetime->format(DATE_ATOM);
        ?>
      </lastmod>
      <changefreq>daily</changefreq>
      <priority>0.5</priority>
    </url>
  <?php } ?>


  <?php // url segment 3 ?>


  <?php // url image ?>
  <url>
      <loc><?= base_url() ?></loc>
      <image:image>
        <image:loc><?= base_url('assets/img/logo.jpg') ?></image:loc>
      </image:image>
  </url>

</urlset>
