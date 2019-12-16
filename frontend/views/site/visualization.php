<div id="panorama_page" class="inner-page">

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
    <?php foreach ($visualisation as $visualisations) { ?>
        <section id="panoramas">
            <div class="container">
                <div class="main_head">
                    <div class="head">
                        <?= $visualisations->title ?>
                    </div>
                    <div class="sub_head"><?= $visualisations->description ?></div>
                </div>
                <div id="viewer<?= $visualisations->id ?>" class="viewer"></div>
                <div class="pro_dtl">
                    <div class="box">
                        <div class="title">
                            Location:
                        </div>
                        <ul>
                            <li><?= $visualisations->location ?></li>
                        </ul>
                    </div>
                    <div class="box">
                        <div class="title">
                            Scope:
                        </div>
                        <ul>
                            <li><?= $visualisations->scope ?></li>
                        </ul>
                    </div>
                    <div class="box">
                        <div class="title">
                            Follow us
                        </div>
                        <ul class="social_icon">
                            <li><a class="fab fa-facebook-f" target="_blank" href="<?= $visualisations->facebook_link ?>"></a></li>
                            <li><a class="fab fa-twitter" target="_blank" href="<?= $visualisations->twitter_link ?>"></a></li>
                            <li><a class="fab fa-linkedin" target="_blank" href="<?= $visualisations->linkedin_link ?>"></a></li>
                            <li><a class="fab fa-instagram" target="_blank" href="<?= $visualisations->instegram_link ?>"></a></li>
                        </ul>
                    </div>
                </div>
                <a href="<?= yii\helpers\Url::to(['site/visualization-detail', 'data' => $visualisations->canonical_name]) ?>" class="plain_btn">See Full Project</a>
            </div>
        </section>

        <script type="text/javascript">
            new PhotoSphereViewer({
                container: 'viewer<?= $visualisations->id ?>',
                panorama: '<?= Yii::$app->homeUrl ?>images/panorama-design/design<?= $visualisations->id ?>.<?= $visualisations->image ?>',
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
    <?php } ?>








</div>

