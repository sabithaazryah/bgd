<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
$action = Yii::$app->controller->action->id;
$home_content = \common\models\HomeContents::findOne(1);
$contact_info = \common\models\ContactsInfo::findOne(1);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex" /> 
        <link rel="icon" href="<?= Yii::$app->homeUrl ?>assets/images/favicon.png">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>assets/js/photo-sphere-viewer.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>assets/js/three.min.js"></script>

        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="fixed-right">
            <a target="_blank" href="tel:+971 544414392">
                <div class="quick-contact">
                    <div class="call-right"></div>
                    <div class="slide-left">
                        <span>+971 50 591 2336</span>
                    </div>
                </div>
            </a>
            <a target="_blank" href="mailto:info@wellness.com">
                <div class="quick-contact mail">
                    <div class="mail-right"></div>
                    <div class="slide-left">
                        <span>Info@wellness.com</span>
                    </div>
                </div>
            </a>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=971505912336">
                <div class="quick-contact whatsapp">
                    <div class="call-right"></div>
                    <div class="slide-left">
                        <span>Chat on <br>WhatsApp</span>
                    </div>
                </div>
            </a>
        </div>

        <header id="Header" class="header main_header">
            <section cla ss="navbar-custom" role="navigation">
                <div class="main-nav-section">
                    <div class="container">
                        <div class="row">
                            <div class="menu-icon">
                                <button class="navbar-toggler navbar-toggler-right" type="button"
                                        data-toggle="collapse" data-target="#navbarNavDropdown2"
                                        aria-controls="navbarNavDropdown2" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <!-- <div class="main-icon-bar"> <i class="fa fa-bars"></i></div> -->
                                    <div class="main-icon-bar">
                                        <div class="icon"></div>
                                        <div class="icon"></div>
                                        <div class="icon"></div>
                                    </div>
                                </button>
                            </div>
                            <div class="logo-sec"><a href="<?= Yii::$app->homeUrl ?>" class="logo"><img src="<?= Yii::$app->homeUrl ?>assets/images/logo.png" alt="logo" class="img-fluid"/></a></div>

                            <nav class="navbar navbar-toggleable-lg navbar-light bg-faded navbar-expand-lg">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown2">
                                    <ul class="navbar-nav">
                                        <li class="nav-list <?= $action == 'index' ? 'active' : '' ?>">
                                            <?= Html::a('Home', ['/site/index'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list dropdown <?= $action == 'about' ? 'active' : '' ?>">
                                            <a data-toggle="dropdown" class="link" href="#!">About</a>
                                            <div class="dropdown-menu">
                                                <?= Html::a('Who We Are', ['/site/about'], ['class' => 'dropdown-item']) ?>
                                                <?= Html::a('Our Team', ['/site/team'], ['class' => 'dropdown-item']) ?>
                                            </div>
                                        </li>
                                        <li class="nav-list dropdown <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'services' || basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'buggy-dtl' ? 'active' : '' ?>">
                                            <a data-toggle="dropdown" class="link">Services</a>
                                            <ul class="dropdown-menu first_drop">
                                                <li class="nav-list dropdown-submenu">
                                                    <a class="dropdown-item" data-toggle="dropdown" href="residential_service.php">Residential</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#!">Villa Interior Design</a></li>
                                                        <li><a class="dropdown-item" href="#!">Villa Exterior Design</a></li>
                                                        <li><a class="dropdown-item" href="#!">Villa Landscape Design</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#!">Commercial</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#!">Hospitality</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#!">3D Visualization</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-list dropdown <?= $action == 'portfolio' ? 'active' : '' ?>">
                                            <?= Html::a('Portfolio', ['/site/portfolio'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list dropdown <?= $action == 'visualization' || $action == 'visualization-detail' ? 'active' : '' ?>">
                                            <?= Html::a('360°', ['/site/visualization'], ['class' => 'link']) ?>
                                        </li>
                                        <li class="nav-list <?= $action == 'contact' ? 'active' : '' ?>">
                                            <?= Html::a('Contact Us', ['/site/contact'], ['class' => 'link']) ?>
                                        </li>
                                    </ul>
                                    <ul class="qck_action">
                                        <li><a href="tel:+971559643550"><i class="flaticon-phone-call"></i>+971 55 964 3550</a>Enquire now</li>
                                    </ul>
                                </div>
                            </nav>



                        </div>
                    </div>
            </section>
            <div class="clearfix"></div>
        </header>
        <!--header-->
        <?= $content ?>

        <footer data-parallax="scroll" data-image-src="<?= Yii::$app->homeUrl ?>assets/images/footbg.jpg">
            <div class="container wow fadeIn animated">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6 half">
                        <div class="foot_head">Quick Links</div>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#!">360° Panorama</a></li>
                            <li><a href="#!">Who We Are</a></li>
                            <li><a href="#!">Careers</a></li>
                            <li><a href="#!">Our Team</a></li>
                            <li><a href="#!">Contact Us</a></li>
                            <li><a href="#!">Service</a></li>
                            <li><a href="#!">Portfolio</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-4 col-6 half">
                        <div class="foot_head">Contact Us</div>
                        <div class="address">
                            <ul>
                                <li>
                                    BGD Interior<br />
                                    Tecom , Smart Heights Tower<br />
                                    Office 2108
                                </li>
                                <li>
                                    Call us:
                                    <a href="tel:+971559643550">+971 55 964 3550</a>
                                    <a href="tel:+97143618119">+971 4 361 8119</a>
                                </li>
                                <li>
                                    E-mail:
                                    <a href="mailto:info@bgdinterior.com">info@bgdinterior.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="foot_logo">
                            <img src="<?= Yii::$app->homeUrl ?>assets/images/logo.png" alt="">
                        </div>
                        <div class="wrkng_hrs">
                            Working Hours
                            Sat-Thu 09:00am to 06:00pm
                        </div>
                        <ul class="social_icon">
                            <li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/"></a></li>
                            <li><a class="fab fa-twitter" target="_blank" href="https://twitter.com/"></a></li>
                            <li><a class="fab fa-linkedin" target="_blank" href="https://www.linkedin.com"></a></li>
                            <li><a class="fab fa-instagram" target="_blank" href="https://www.instagram.com/"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <section id="copyright">
                <div class="container">
                    <p>Copyright © <span><?= date('Y') ?>.</span> <a href="#!">BGD Interior.</a> All Rights Reserved</p>
                </div>
            </section>
        </footer>

        <!--footer-->
        <a href="#" class="scrollup" ></a>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
<script>
    $(document).ready(function () {
        $(document).on('submit', '.contact-enquiry', function (e) {
            e.preventDefault();
            var str = $(this).serialize();
            $.ajax({
                type: "POST",
                url: '<?= Yii::$app->homeUrl; ?>site/contact-enquiry',
                data: str,
                success: function (data)
                {
                    if (data == 1) {
                        $('.contact-enquiry').prepend('<div id="email-alert" style="color: #28a745;font-weight: 600;margin-bottom:10px;">Thank you for contacting us. We will get back to you as soon as possible.</div>');
                    }
                    $('#name').val("");
                    $('#email').val("");
                    $('#phone').val("");
                    $('#company').val("");
                    $('#message').val("");
                    setTimeout(function () {
                        $('#email-alert').remove();
                    }, 3000);
                }
            });
        });

    });
</script>