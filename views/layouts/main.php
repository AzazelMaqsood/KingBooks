<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!--[if LTE IE 8]>
    <link rel="stylesheet" type="text/css" href="css/minimal-menu-ie.css" />
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/libs/html5shiv.js"></script>
    <script src="js/libs/respond.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body class="home">
<?php $this->beginBody() ?>
<div class="topbar">
    <div class="container">
        <div class="left-topbar">
            Добро пожаловать Вы можете <a href="<?=  Url::to(['/site/registration']) ?>">авторизоваться</a> или  <a href="<?=  Url::to(['/site/registration']) ?>">зарегистрироваться</a>.
        </div>
        <!-- /.left-topbar -->
        <ul class="right-topbar">
            <li>
                <a href="#" class="top-wishlist">
                    Wish list
                    <span>5</span>
                </a>
            </li>
            <li><a href="#">My account</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">Check out</a></li>
        </ul>
        <!-- /.right-topbar -->
    </div>
</div>
<!-- /.topbar -->
<header>
    <div class="container">
        <a class="logo" href="index.html">
            <img src="images/logo.png" alt="img" />
        </a>
        <!-- /.logo -->
        <nav class="main-nav">
            <div class="minimal-menu">
                <ul class="menu">
                    <li class="current-menu-item"><a href="index.html">HOMEPAGE</a></li>
                    <li><a href="category.html">T-SHIRT</a></li>
                    <li><a href="category.html">WOMEN</a></li>
                    <li>
                        <a href="#">CLOTHING</a>
                        <ul class="sub-menu">
                            <li><a href="auth.html">AUTH</a></li>
                            <li>
                                <a href="contact.html">CONTACT</a>
                                <ul class="sub-menu">
                                    <li><a href="contact.html">CONTACT1</a></li>
                                    <li><a href="#">Submenu 22</a></li>
                                    <li><a href="#">Submenu 23</a></li>
                                    <li><a href="#">Submenu 24</a></li>
                                    <li><a href="#">Submenu 25</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Submenu 3</a></li>
                            <li><a href="#">Submenu 4</a></li>
                            <li><a href="#">Submenu 5</a></li>
                        </ul>
                    </li>
                    <li><a href="category.html">ACCESSORIES</a></li>
                </ul>
            </div>
            <!-- /.minimal-menu -->
        </nav>
        <!-- /.main-nav -->
        <div class="wrap-search">
            <form action="#" class="search-form">
                <input type="text" placeholder="Search Bags.." />
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- /.search-form -->
        <div class="top-cart">
            <a href="cart.html">
                YOUR CART
                <span>2</span>
            </a>
        </div>
        <!-- /.top-cart -->
    </div>
</header>

<?= Alert::widget() ?>
<?= $content ?>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-footer clearfix">
                <h3>Join Our Communication</h3>
                <ul class="list-social">
                    <li><a class="facebook" href="#">facebook</a></li>
                    <li><a class="twitter" href="#">twitter</a></li>
                    <li><a class="googleplus" href="#">googleplus</a></li>
                    <li><a class="pinterest" href="#">pinterest</a></li>
                    <li><a class="instagram" href="#">instagram</a></li>
                </ul>
            </div>
            <div class="col-md-6 right-footer">
                <div class="clearfix">
                    <div class="wrap-select-currency">
                        <select class="custom-select currency-switch">
                            <option value="0">USD</option>
                            <option value="1">Euro</option>
                        </select>
                    </div>
                    <div class="wrap-select-country">
                        <select class="custom-select country-switch">
                            <option value="0" data-icon="us-flag">United States</option>
                            <option value="1" data-icon="fr-flag">France</option>
                            <option value="2" data-icon="de-flag">Germany</option>
                            <option value="3" data-icon="it-flag">Italy</option>
                        </select>
                    </div>
                </div>
                <p class="copyright">© 2014 Designed by <a href="#"><strong>Kidesigner</strong></a>. All rights reserved</p>
            </div>
        </div>
    </div>
</footer>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>