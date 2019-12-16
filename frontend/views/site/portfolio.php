
<div id="portfolio_page" class="inner-page">

    <section id="banner" data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl ?>assets/images/banner/about.jpg">
        <div class="container">
            <div class="banner_caption">
                <h3 class="page_title">Portfolio</h3>
                <h3 class="page_sub">Check Our Latest Works</h3>
            </div>
        </div>
        <div class="breadcrumb_sec">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="current"><a href="#!">Portfolio</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="gallery_sec">
        <div class="container">
            <div class="portfolioFilter clearfix">
                <i class="flaticon-instagram-logo"></i>
                <ul>
                    <li><a href="#" data-filter="*" class="current">All</a></li>
                    <?php foreach ($category as $categorys) { ?>
                        <li><a href="#" data-filter=".<?= $categorys->id ?>"><?= $categorys->category ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="portfoliosec">
            <div class="container">
                <div class="portfolioContainer row">
                    <?php foreach ($portfolio as $portfolios) { ?>
                        <div class="col-md-4 col-sm-6 <?= $portfolios->category ?>">
                            <div class="box">
                                <a href="<?= Yii::$app->homeUrl ?>images/portfolio/portfolio<?= $portfolios->id ?>.<?= $portfolios->image ?>" class="img_box" data-fancybox="gallery" tabindex="0">
                                    <img src="<?= Yii::$app->homeUrl ?>images/portfolio/portfolio<?= $portfolios->id ?>.<?= $portfolios->image ?>" class="img-fluid" alt="">
                                </a>
                                <div class="info_box">
                                    <div class="pro_name">
                                        <?= $portfolios->name ?>
                                    </div>
                                    <ul class="pro_cat">
                                        <li> <?= $portfolios->description ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

</div>

