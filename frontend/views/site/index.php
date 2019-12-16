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

<section id="main-slider">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="assets/images/slider/slide1.jpg" class="img-fluid desk_slide" />
                <img src="assets/images/slider/slide1.jpg" class="img-fluid mob_slide" />
                <div class="carousel-caption d-md-block">
                    <p class="sub_head fadeInDown animated">bgdinterior Dubai No1 Company</p>
                    <h2 class="caption fadeInDown animated">We Create Amazing Designs </h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider/slide1.jpg" class="img-fluid desk_slide" />
                <img src="assets/images/slider/slide1.jpg" class="img-fluid mob_slide" />
                <div class="carousel-caption d-md-block">
                    <p class="sub_head fadeInDown animated">bgdinterior Dubai No1 Company</p>
                    <h2 class="caption fadeInDown animated">We Create Amazing Designs </h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/slider/slide1.jpg" class="img-fluid desk_slide" />
                <img src="assets/images/slider/slide1.jpg" class="img-fluid mob_slide" />
                <div class="carousel-caption d-md-block">
                    <p class="sub_head fadeInDown animated">bgdinterior Dubai No1 Company</p>
                    <h2 class="caption fadeInDown animated">We Create Amazing Designs </h2>
                </div>
            </div>
            <a href="#welcome_sec" class="scroll_down">
                <span>Scroll Down</span>
                <div class="down"></div>
            </a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- <div class="carousel-arrows">
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> -->
    </div>
</section>

<section id="our_features">
    <div class="container">
        <div class="features_slide">
            <div class="item">
                <div class="box">
                    <div class="icon">
                        <i class="flaticon-like"></i>
                    </div>
                    <div class="title">
                        100% Satisfaction
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <div class="icon">
                        <i class="flaticon-team"></i>
                    </div>
                    <div class="title">
                        100% Satisfaction
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <div class="icon">
                        <i class="flaticon-team-1"></i>
                    </div>
                    <div class="title">
                        100% Satisfaction
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <div class="icon">
                        <i class="flaticon-technical-support"></i>
                    </div>
                    <div class="title">
                        100% Satisfaction
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <div class="icon">
                        <i class="flaticon-target"></i>
                    </div>
                    <div class="title">
                        100% Satisfaction
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="main_head">
            <div class="sub_head">
                BGD Services
            </div>
            <div class="head">
                Our Services
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="box">
                    <a data-fancybox="gallery" href="assets/images/gallery/1.jpg" class="img_box">
                        <div class="img" style="background: url('assets/images/gallery/1.jpg')"></div>
                    </a>
                    <div class="pro_name">
                        Villa Interior Design
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box">
                    <a data-fancybox="gallery" href="assets/images/gallery/1.jpg" class="img_box">
                        <div class="img" style="background: url('assets/images/gallery/1.jpg')"></div>
                    </a>
                    <div class="pro_name">
                        Villa Interior Design
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box">
                    <a data-fancybox="gallery" href="assets/images/gallery/1.jpg" class="img_box">
                        <div class="img" style="background: url('assets/images/gallery/1.jpg')"></div>
                    </a>
                    <div class="pro_name">
                        Villa Interior Design
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box">
                    <a data-fancybox="gallery" href="assets/images/gallery/1.jpg" class="img_box">
                        <div class="img" style="background: url('assets/images/gallery/1.jpg')"></div>
                    </a>
                    <div class="pro_name">
                        Villa Interior Design
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box">
                    <a data-fancybox="gallery" href="assets/images/gallery/1.jpg" class="img_box">
                        <div class="img" style="background: url('assets/images/gallery/1.jpg')"></div>
                    </a>
                    <div class="pro_name">
                        Villa Interior Design
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box">
                    <a data-fancybox="gallery" href="assets/images/gallery/1.jpg" class="img_box">
                        <div class="img" style="background: url('assets/images/gallery/1.jpg')"></div>
                    </a>
                    <div class="pro_name">
                        Villa Interior Design
                    </div>
                </div>
            </div>
        </div>
        <a href="#!" class="plain_btn">View All Services</a>
    </div>
</section>

<section id="welcome_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 lft_sec">
                <div class="main_head">
                    <div class="sub_head">
                        Who we are
                    </div>
                    <div class="head">
                        Our Story
                    </div>
                </div>
                <div class="info">
                    <p>
                        BGD Interior Design Company is specialized in providing creative interior , Exterior and landscape design services with fully animated and 360 visualization for residential and commercial projects .
                    </p>
                </div>
                <a href="#!" class="btn">Read More Story</a>
            </div>
            <div class="col-lg-8 rit_sec">
                <a data-fancybox="gallery" href="assets/images/gallery/1.jpg" class="vid_sec" style="background: url('assets/images/vid_bg.jpg')">
                    <div id="play-video" class="video-play-button">
                        <span></span>
                    </div>

                    <div class="title">
                        Our Story
                    </div>
                    <div class="exp">
                        <center>
                            <strong>10</strong>
                            Years
                            excellence
                        </center>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="our_works">
    <div class="container">
        <div class="main_head">
            <div class="sub_head">
                BGD Works
            </div>
            <div class="head">
                Our Works
            </div>
        </div>
        <div class="slider center">
            <div class="our_works_slide">
                <div class="item">
                    <div class="pro_box">
                        <a href="#!" class="img_box" style="background: url('assets/images/works/1.jpg')">
                            <div class="overlay">
                                <center>

                                    <i class="flaticon-instagram-logo"></i>
                                    <div class="pro_name">
                                        Nad AL Shiba Villa
                                    </div>
                                    <ul>
                                        <li>interior</li>
                                        <li>Living Room</li>
                                    </ul>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro_box">
                        <a href="#!" class="img_box" style="background: url('assets/images/works/1.jpg')">
                            <div class="overlay">
                                <center>

                                    <i class="flaticon-instagram-logo"></i>
                                    <div class="pro_name">
                                        Nad AL Shiba Villa
                                    </div>
                                    <ul>
                                        <li>interior</li>
                                        <li>Living Room</li>
                                    </ul>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="pro_box">
                        <a href="#!" class="img_box" style="background: url('assets/images/works/1.jpg')">
                            <div class="overlay">
                                <center>

                                    <i class="flaticon-instagram-logo"></i>
                                    <div class="pro_name">
                                        Nad AL Shiba Villa
                                    </div>
                                    <ul>
                                        <li>interior</li>
                                        <li>Living Room</li>
                                    </ul>
                                </center>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="#!" class="plain_btn">View All Services</a>
    </div>
</section>

<section id="process" class="parallax-window"  data-parallax="scroll" data-image-src="assets/images/process_bg.jpg">
    <div class="container">
        <div class="main_head">
            <div class="sub_head">
                BGD Process
            </div>
            <div class="head">
                Interior Deisgn Process
            </div>
        </div>
        <div class="process_slide">
            <div class="item">
                <div class="box">
                    <i class="flaticon-meeting icon"></i>
                    <div class="title">
                        Problem Statement
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <i class="flaticon-project-management icon"></i>
                    <div class="title">
                        Concept Development
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <i class="flaticon-pen icon"></i>
                    <div class="title">
                        Design Development
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                  <!-- <i class="flaticon-pen icon"></i> -->
                    <div class="icon">
                        <img src="assets/images/icons/execution.png" alt="" class="img-fluid">
                    </div>
                    <div class="title">
                        Execution
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="box">
                    <div class="icon">
                        <img src="assets/images/icons/evaluation.png" alt="" class="img-fluid">
                    </div>
                    <!-- <i class="flaticon-pen icon"></i> -->
                    <div class="title">
                        Evaluation
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="panoramas">
    <div class="container">
        <div class="main_head">
            <div class="sub_head">
                BGD Panoramas
            </div>
            <div class="head">
                360° Works
            </div>
        </div>
        <div id="viewer" class="viewer"></div>
        <a href="#!" class="plain_btn">See More Panoramas</a>
    </div>
</section>

<section id="testimonial_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="testi_sec">
                    <div class="float_title lft">
                        What client  say about us!
                    </div>
                    <div class="test_slide">
                        <div class="item">
                            <div class="testi_box">
                                <div class="title">
                                    Testimonials
                                </div>
                                <div class="cntn_box">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                                    </p>
                                </div>
                                <div class="box_foot">
                                    <div class="img_box">
                                        <img src="assets/images/testi_author.png" class="img-fluid" />
                                    </div>
                                    <div class="author_dtl">
                                        <div class="name">
                                            Richard
                                        </div>
                                        <div class="position">
                                            General Customer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_box">
                                <div class="title">
                                    Testimonials
                                </div>
                                <div class="cntn_box">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
                                    </p>
                                </div>
                                <div class="box_foot">
                                    <div class="img_box">
                                        <img src="assets/images/testi_author.png" class="img-fluid" />
                                    </div>
                                    <div class="author_dtl">
                                        <div class="name">
                                            Richard
                                        </div>
                                        <div class="position">
                                            General Customer
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form_sec">
                    <div class="float_title rit">
                        Quick Contact
                    </div>
                    <form class="qck_cntct" action="" method="post">
                        <div class="title">
                            Quick Contact
                        </div>
                        <div class="row">
                            <div class="col-12 pad0">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" required="" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-12 pad0">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" required="" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12 pad0">
                                <div class="form-group bord">
                                    <input type="phone" name="phone" class="form-control" required="" placeholder="Phone No">
                                </div>
                            </div>
                            <div class="col-12 pad0">
                                <div class="form-group">
                                    <textarea class="form-control" required="" placeholder="Message" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="col-12 pad0">
                                <button type="submit" class="btn btn-primary">Send Request!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">

    /*************************** 360 PANORAMA **********************************/

    new PhotoSphereViewer({
        container: 'viewer',
        panorama: 'assets/images/360.jpg',
        mousewheel: 'false',
        navbar: [
            'autorotate',
            'zoom',
            'markers',
            {
                id: 'my-button',
                title: 'Hello world',
                className: 'custom-button',
                content: 'Custom',
                onClick: function () {
                    alert('Hello from custom button');
                }
            },
            'caption',
            'fullscreen'
        ]

    });
</script>

