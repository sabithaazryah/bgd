
<div id="panorama_page" class="inner-page panorama_dtl_page">

    <section id="banner" data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl ?>assets/images/banner/about.jpg">
        <div class="container">
            <div class="banner_caption">
                <h3 class="page_title">360° Panorama</h3>
                <h3 class="page_sub">Press Full Screen and Enjoy Our Designs</h3>
            </div>
        </div>
        <div class="breadcrumb_sec">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="current"><a href="#!">360° Panorama</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="panoramas">
        <div class="container">
            <div class="main_head">
                <div class="head">
                    <?= $visualisation_Detail->title ?>
                </div>
                <div class="sub_head"><?= $visualisation_Detail->description ?></div>
            </div>
            <div id="viewer" class="viewer"></div>
            <div class="pro_dtl">
                <div class="box">
                    <div class="title">
                        Location:
                    </div>
                    <ul>
                        <li><?= $visualisation_Detail->location ?></li>
                    </ul>
                </div>
                <div class="box">
                    <div class="title">
                        Scope:
                    </div>
                    <ul>
                        <li><?= $visualisation_Detail->scope ?></li>
                    </ul>
                </div>
                <div class="box">
                    <div class="title">
                        Follow us
                    </div>
                    <ul class="social_icon">
                        <li><a class="fab fa-facebook-f" target="_blank" href="<?= $visualisation_Detail->facebook_link ?>"></a></li>
                        <li><a class="fab fa-twitter" target="_blank" href="<?= $visualisation_Detail->twitter_link ?>"></a></li>
                        <li><a class="fab fa-linkedin" target="_blank" href="<?= $visualisation_Detail->linkedin_link ?>"></a></li>
                        <li><a class="fab fa-instagram" target="_blank" href="<?= $visualisation_Detail->instegram_link ?>"></a></li>
                    </ul>
                </div>
            </div>

            <div class="gallery_listing">
                <?php
                $path = Yii::getAlias('@paths') . '/panorama-design/gallery/' . $visualisation_Detail->id;
                if (count(glob("{$path}/*")) > 0) {
                    $k = 0;
                    foreach (glob("{$path}/*") as $file) {
                        $k++;
                        $arry = explode('/', $file);
                        $img_nmee = end($arry);

                        $img_nmees = explode('.', $img_nmee);
                        if ($img_nmees['1'] != '') {
                            ?>
                            <div class="item">
                                <a href="<?= Yii::$app->homeUrl . 'images/panorama-design/gallery/' . $visualisation_Detail->id . '/' . end($arry) ?>" class="img_box" data-fancybox="gallery" tabindex="0">
                                    <img src="<?= Yii::$app->homeUrl . 'images/panorama-design/gallery/' . $visualisation_Detail->id . '/' . end($arry) ?>" class="img-fluid" alt="">
                                </a>
                            </div>

                            <?php
                        }
                    }
                }
                ?>

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


<script type="text/javascript">

    /*************************** 360 PANORAMA **********************************/

    new PhotoSphereViewer({
        container: 'viewer',
        panorama: '<?= Yii::$app->homeUrl ?>assets/images/360.jpg',
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
