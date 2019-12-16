<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
$controler = Yii::$app->controller->id;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= Yii::$app->homeUrl; ?>img/favicon.png" rel="icon">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>js/jquery.min.js"></script>
        <script type="text/javascript">
            var homeUrl = '<?= Yii::$app->homeUrl; ?>';
        </script>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue fixed sidebar-mini sidebar-mini-expand-featuree">
        <?php $this->beginBody() ?>

        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= yii::$app->homeUrl; ?>" class="logo">
                    <span class="logo-mini">
                        <img src="<?= Yii::$app->homeUrl; ?>img/logo.png" itemprop="image">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= Yii::$app->homeUrl; ?>img/logo.png" itemprop="image">
                    </span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <?php
                                echo ''
                                . Html::beginForm(['/site/logout'], 'post', ['style' => '']) . '<a>'
                                . Html::submitButton(
                                        '<i class="fa fa-sign-out" aria-hidden="true"></i> Sign out', ['class' => 'signout-btn', 'style' => '']
                                ) . '</a>'
                                . Html::endForm()
                                . '';
                                ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="treeview <?= $controler == 'admin-posts' || $controler == 'admin-users' || $controler == 'site' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-dashboard"></i>
                                <span>Administration</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Access Powers', ['/admin/admin-posts/index'], ['class' => 'title']) ?>
                                </li>

                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Admin Users', ['/admin/admin-users/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview <?= $controler == 'slider' || $controler == 'home-contents' || $controler == 'our-clients-says' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>Home Management</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Slider', ['/cms/slider/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Home Contents', ['/cms/home-contents/update'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Testimonials', ['/cms/our-clients-says/index'], ['class' => 'title']) ?>
                                </li>
                            </ul>
                        </li>
                        <li class="<?= $controler == 'about' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-flag"></i> About', ['/cms/about/update', 'id' => 1], ['class' => 'title']) ?>
                        </li>
                        <li class="treeview <?= $controler == 'panorama-visualization' || $controler == 'animation-design' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-product-hunt"></i>
                                <span>3D Visualization</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> 360° Panorama', ['/cms/panorama-visualization/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Animation Design', ['/cms/animation-design/index'], ['class' => 'title']) ?>
                                </li>

                            </ul>
                        </li>

                        <li class="treeview <?= $controler == 'portfolio' || $controler == 'portfolio-category' ? 'active' : '' ?>">
                            <a href="">
                                <i class="fa fa-building"></i>
                                <span>Portfolio</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Category', ['/cms/portfolio-category/index'], ['class' => 'title']) ?>
                                </li>
                                <li>
                                    <?= Html::a('<i class="fa fa-angle-double-right"></i> Portfolio', ['/cms/portfolio/index'], ['class' => 'title']) ?>
                                </li>

                            </ul>
                        </li>

                        <li class="<?= $controler == 'contacts-info' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-address-card"></i> Contact Info', ['/cms/contacts-info/update'], ['class' => 'title']) ?>
                        </li>

                        <li class="<?= $controler == 'contact-enquiry' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-comment"></i> Contact Enquiry', ['/cms/contact-enquiry/index'], ['class' => 'title']) ?>
                        </li>

                        <li class="<?= $controler == 'meta-tags' ? 'active' : '' ?>">
                            <?= Html::a('<i class="fa fa-tags"></i> Meta Tags', ['/cms/meta-tags/index'], ['class' => 'title']) ?>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?= \common\components\AlertMessageWidget::widget() ?>
                    <?= $content ?>
                </section>
            </div>
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                </div>
                <strong>Copyright &copy; <?= date('Y') ?> BGD Interiors.</strong> All Rights Reserved.
            </footer>
            <div class="control-sidebar-bg"></div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
