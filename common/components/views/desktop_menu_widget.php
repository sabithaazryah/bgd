<?php

use yii\helpers\Html;

$action = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
?>
<div class="main_menu_big  animdelay1 animated menu-way">
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

