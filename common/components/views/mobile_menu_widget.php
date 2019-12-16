<?php

use yii\helpers\Html;

$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
$common_content = \common\models\HomeContents::findOne(1);
?>
<div class="menu_overlay"></div>
<div class="full_menu">
    <div class="container">
        <div class="menu_header">
            <div class="top-bar-menu">
                <ul class="list_none">
                    <li>
                        <a href="tel:<?= $common_content->phone ?>"><i class="fa fa-phone"></i> </a> <a href="tel:<?= $common_content->phone ?>"><?= $common_content->phone ?></a>
                    </li>


                    <li class="text-right">
                        <a href="#" class="menu_close">X</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu_container">
            <div class="menu_row">
                <div class="main_menu  animdelay1 animated menu-way">
                    <ul class="list_none">
                        <li class="<?= $action == 'site/index' ? 'active' : '' ?>">
                            <?= Html::a('Home', ['/site/index']) ?>
                        </li>
                        <li class="<?= $action == 'site/about' ? 'active' : '' ?>">
                            <?= Html::a('About Us', ['/site/about']) ?>
                        </li>
                        <li class="<?= $action == 'site/products' || $action == 'site/product-details' ? 'active' : '' ?>">
                            <?= Html::a('Products', ['/site/products']) ?>
                        </li>
                        <li class="<?= $action == 'site/services' ? 'active' : '' ?>">
                            <?= Html::a('Services', ['/site/services']) ?>
                        </li>
                        <li class="<?= $action == 'site/blog' || $action == 'site/blog-details' ? 'active' : '' ?>">
                            <?= Html::a('Blog', ['/site/blog']) ?>
                        </li>
                        <li class="<?= $action == 'site/contact' ? 'active' : '' ?>">
                            <?= Html::a('Contact Us', ['/site/contact']) ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="menu_footer">
        <div class="container">
            <div class="row row_center">
                <div class="col-md-4 find_us_div">
                    Find Us On <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
