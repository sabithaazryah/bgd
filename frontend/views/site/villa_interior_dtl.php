<?php include "./includes/header.php"?>

<div id="panorama_page" class="inner-page panorama_dtl_page">

  <section id="banner" data-parallax="scroll" data-image-src="assets/images/banner/about.jpg">
    <div class="container">
      <div class="banner_caption">
        <h3 class="page_title">360° Panorama</h3>
        <h3 class="page_sub">Press Full Screen and Enjoy Our Designs</h3>
      </div>
    </div>
    <div class="breadcrumb_sec">
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li class="current"><a href="#!">360° Panorama</a></li>
        </ul>
      </div>
    </div>
  </section>

  <section id="panoramas">
    <div class="container">
      <div class="main_head">
        <div class="sub_head">
          BGD Services
        </div>
        <div class="head">
          Living Room Design
        </div>
      </div>
      <div id="viewer" class="viewer"></div>
      <div class="pro_info">
        <p>The living room is where we come to think, to slow down the world for a second and it is One of the most important rooms where family can use for Relaxation and Entertainment.</p>
        <p>Living room used for  multiple functions , it’s the place to watch TV, play video games, read , so it needs to be able to store movies, books and toys, and include everything from a sectional and armchair to a desk, bookshelf and media console. </p>
      </div>

      <div class="gallery_listing">
        <div class="item">
          <a href="assets/images/works/1.jpg" class="img_box" data-fancybox="gallery" tabindex="0">
            <img src="assets/images/works/1.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="item">
          <a href="assets/images/works/1.jpg" class="img_box" data-fancybox="gallery" tabindex="0">
            <img src="assets/images/works/1.jpg" class="img-fluid" alt="">
          </a>
        </div>
        <div class="item">
          <a href="assets/images/works/1.jpg" class="img_box" data-fancybox="gallery" tabindex="0">
            <img src="assets/images/works/1.jpg" class="img-fluid" alt="">
          </a>
        </div>
      </div>

      <div class="qck_action">
        <div class="title_sec">
          Are you interested
        </div>
        <div class="cntnt_sec">
          <ul>
            <li><a href="tel:+971559643550"><i class="flaticon-phone-call"></i> +971 55 964 3550</a> </li>
            <li><a href="mailto:info@bgdinterior.com"><i class="flaticon-envelope"></i> info@bgdinterior.com</a> </li>
          </ul>
        </div>
      </div>

    </div>
  </section>


</div>

<?php include "./includes/footer.php"?>

<script type="text/javascript">

/*************************** 360 PANORAMA **********************************/

  new PhotoSphereViewer({
  container: 'viewer',
  panorama: 'assets/images/360.jpg',
  mousewheel: 'false',
  allow_scroll_to_zoom: 'false',
  navbar: [
    'autorotate',
    'zoom',
    'markers',
    'caption',
    'fullscreen'
  ]

});
</script>
