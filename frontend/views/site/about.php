<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '';
if (isset($meta_tags->meta_title) && $meta_tags->meta_title != '') {
    $this->title = $meta_tags->meta_title;
} else {
    $this->title = 'BGD';
}
?>

<div id="about_page" class="inner-page">

    <section id="banner" data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl ?>assets/images/banner/about.jpg">
        <div class="container">
            <div class="banner_caption">
                <h3 class="page_title">Who we are</h3>
                <h3 class="page_sub">Know Us Better</h3>
            </div>
        </div>
        <div class="breadcrumb_sec">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="<?= Yii::$app->homeUrl ?>">Home</a></li>
                    <li class="current"><a href="#!">Who we are</a></li>
                </ul>
            </div>
        </div>
    </section>

    <section id="story_sec">
        <div class="sec1">
            <div class="container">
                <div class="floating_title">
                    Story
                </div>
                <div class="row">
                    <div class="cntnt_box col-md-6">
                        <div class="title_sec">
                            <div class="title">
                                BGD Interior
                            </div>
                            <div class="sub_title">
                                Design Company
                            </div>
                        </div>
                        <div class="info">
                            <p>is specialized in providing creative interior , Exterior and landscape design services with fully animated and 360 visualization for residential and commercial projects .</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="float_img">
                            <img src="<?= Yii::$app->homeUrl ?>assets/images/story_float.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="quote">
                            “We Design Our World, While Our World Acts Back On Us And
                            Designs Us”
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="parallax-window"  data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl ?>assets/images/process_bg.jpg">
        <div class="container">
            <div class="main_head">
                <div class="sub_head">
                    BGD Interior
                </div>
                <div class="head">
                    Our Expertise
                </div>
            </div>
            <div class="expertise_slide">
                <div class="item">
                    <div class="box">
                        <div class="count"><span class="counter" data-count="95">0</span><span class="simbl">%</span></div>
                        <div class="title">
                            Interior Design
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="count"><span class="counter" data-count="100">0</span><span class="simbl">%</span></div>
                        <div class="title">
                            AutoCAD
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="count"><span class="counter" data-count="100">0</span><span class="simbl">%</span></div>
                        <div class="title">
                            Animation
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <div class="count"><span class="counter" data-count="95">0</span><span class="simbl">%</span></div>
                        <div class="title">
                            3D Skills
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="what_we_do">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 lft_sec">
                    <img src="<?= Yii::$app->homeUrl ?>assets/images/photo_frame.png" alt="" class="img_fluid wow animated fadeInDown img1">
                    <img src="<?= Yii::$app->homeUrl ?>assets/images/flwrvase.png" alt="" class="img_fluid wow animated fadeInLeft img2">
                </div>
                <div class="col-lg-6 col-md-7 rit_sec">
                    <div class="title">
                        What<br />
                        We Do
                    </div>
                    <div class="info">
                        <p>
                            Our aim is to bring to our readers a steady set of resources that would help them visualize, create and maintain beautiful homes. Our emphasis is on visuals that motivate you. We cover architectural innovations, cool homes, ideas for specific rooms, new design trends, products and occasionally decor tips. We hope to become your one stop source for home design inspiration!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


<script>

    var a = 0;
    $(window).scroll(function () {

        var oTop = $('#process').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter').each(function () {
                var $this = $(this),
                        countTo = $this.attr('data-count');

                $({countNum: $this.text()}).animate({
                    countNum: countTo
                },
                        {

                            duration: 2000,
                            easing: 'linear',
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                                //alert('finished');
                            }

                        });

            });
            a = 1;
        }

    });
</script>
