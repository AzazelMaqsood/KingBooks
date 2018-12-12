<?php

use app\widgets\CategoryMenu;
use app\controllers\CustomController;
use yii\widgets\ListView;
use yii\helpers\Url;
?>
<div class="main">
    <div class="page-header">
        <div class="wrap-page-title">
            <div class="bottom">
                <div>
                    <div class="container">
                        <div class="page-title">
                            <h4>Find your favorites dresses</h4>
                            <h2>ACCESSORIES</h2>
                        </div>
                    </div>
                    <!-- /.page-title -->
                </div>
            </div>
        </div>
        <!-- /.wrap-page-title -->
        <div class="wrap-breadcrumb">
            <div class="middle">
                <div>
                    <div class="container">
                        <nav class="breadcrumb">
                            <a href="#">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">Accessories</a>&nbsp;&nbsp;/&nbsp;&nbsp;<span>Summer Bags</span>
                        </nav>
                        <!-- /.breadcrumb -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.wrap-breadcrumb -->
        <div class="wrap-viewby">
            <div class="bottom">
                <div>
                    <div class="container">
                        <div class="viewby">
                            <h4>View:</h4>
                            <a href="#" class="bygrid active"></a>
                            <a href="#" class="bylist"></a>
                        </div>
                    </div>
                    <!-- /.viewby -->
                </div>
            </div>
        </div>
        <!-- /.wrap-viewby -->
    </div>
    <!-- /.page-header -->
    <!-- /.wrap-page-header -->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="widget">
                        <div id="accordian">
                            <ul>
                                <?= CategoryMenu::widget(['view' => 'catalogMenu']) ?>
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget widget-size">
                        <h3 class="widget-title">Size</h3>
                        <div class="options-size">
                            <div class="size-input">
                                <input type="checkbox" name="size" id="size-m" class="css-checkbox" checked="checked" />
                                <label for="size-m" class="css-label">M (5)</label>
                            </div>
                            <div class="size-input">
                                <input type="checkbox" name="size" id="size-l" class="css-checkbox" />
                                <label for="size-l" class="css-label">L (1)</label>
                            </div>
                            <div class="size-input">
                                <input type="checkbox" name="size" id="size-s" class="css-checkbox" />
                                <label for="size-s" class="css-label">S (1)</label>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-compositions">
                        <h3 class="widget-title">Compositions</h3>
                        <div class="options-compositions">
                            <div class="compositions-input">
                                <input type="checkbox" name="compositions" id="compositions-cotton" class="css-checkbox" checked="checked" />
                                <label for="compositions-cotton" class="css-label">Cotton (1)</label>
                            </div>
                            <div class="compositions-input">
                                <input type="checkbox" name="compositions" id="compositions-polyester" class="css-checkbox" />
                                <label for="compositions-polyester" class="css-label">Polyester (2)</label>
                            </div>
                            <div class="compositions-input">
                                <input type="checkbox" name="compositions" id="compositions-viscose" class="css-checkbox" />
                                <label for="compositions-viscose" class="css-label">Viscose (2)</label>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-colors">
                        <h3 class="widget-title">Colors</h3>
                        <div class="options-color">
                            <div class="color-input">
                                <input type="radio" name="options-color" checked="checked" value="orange" id="orange">
                                <label style="background-color:#e8a650;" for="orange">Orange (1)</label>
                            </div>
                            <div class="color-input">
                                <input type="radio" name="options-color" value="black" id="black">
                                <label style="background-color:#363636;" for="black">Black (2)</label>
                            </div>
                            <div class="color-input">
                                <input type="radio" name="options-color" value="red" id="red">
                                <label style="background-color:#cf475b;" for="red">Red (2)</label>
                            </div>
                            <div class="color-input">
                                <input type="radio" name="options-color" value="green" id="green">
                                <label style="background-color:#3c6e69;" for="green">Green (2)</label>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget-price">
                        <h3 class="widget-title">Price</h3>
                        <div class="options-price">
                            <p class="price-range">
                                <label for="amount">RANGE:</label>
                                <input type="text" id="amount"  />
                            </p>
                            <div id="price-slider"></div>
                        </div>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="top-products">
                        <div class="sortby">
                            <h4>Sort by</h4>
                            <select class="custom-select">
                                <option value="1">Price: Lowest First</option>
                                <option value="2">Price: Highest First</option>
                            </select>
                        </div>
                        <a href="#" class="compare-btn">COMPARE (3)<i class="fa fa-chevron-right"></i></a>
                    </div>

                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_list',
                        'layout' => "<ul class='products gridview'>{summary}\n{items}\n</ul> <nav class='woocommerce-pagination'>{pager}</nav>",
                        'summary' => 'Показано  {count} из {totalCount}',
                        'emptyText' => 'В этой категории товар отсутствует',
                        'emptyTextOptions' => ['tag' => 'p'],
                        'pager' => [

                                'options' => [
                                        'tag' => 'ul',
                                        'class' => 'page-numbers'
                                ],
                                /*'prevPageCssClass' => 'prev',
                                'nextPageCssClass' => 'next',*/
                                'activePageCssClass' => 'current',
                                'nextPageLabel' => '→',
                                'prevPageLabel' => '←',
                                'maxButtonCount' => 5,
                        ],
                    ]); ?>


                </div>
            </div>
            <div class="related-bags">
                <div class="container">
                    <h3 class="border-caption with-dots">RELATED BAGS</h3>
                    <div class="jcarousel-wrapper">
                        <div class="jcarousel">
                            <ul>
                                <li class="product-item">
                                    <div class="wrap-product-img">
                                        <a href="detail.html"><img src="assets/images/bag-1.jpg" alt="img" /></a>
                                        <span class="saleoff style1">sale off</span>
                                    </div>
                                    <div class="wrap-product-content">
                                        <h4><a href="detail.html">Minim Veniam</a></h4>
                                        <span class="price">
                                            <del><span class="amount">200.00</span></del>
                                            <ins><span class="amount">159.00</span></ins>
                                            </span>
                                        <div class="star-rating"></div>
                                    </div>
                                    <div class="wrap-links">
                                        <a href="#">Add to Cart</a>
                                        <a href="#">Wish List</a>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="wrap-product-img">
                                        <a href="detail.html"><img src="assets/images/bag-2.jpg" alt="img" /></a>
                                        <span class="saleoff style2">sale off</span>
                                    </div>
                                    <div class="wrap-product-content">
                                        <h4><a href="detail.html">Coccaecat</a></h4>
                                        <span class="price">
                                            <del><span class="amount">200.00</span></del>
                                            <ins><span class="amount">159.00</span></ins>
                                            </span>
                                        <div class="star-rating"></div>
                                    </div>
                                    <div class="wrap-links">
                                        <a href="#">Add to Cart</a>
                                        <a href="#">Wish List</a>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="wrap-product-img">
                                        <a href="detail.html"><img src="assets/images/bag-1.jpg" alt="img" /></a>
                                        <span class="saleoff style1">sale off</span>
                                    </div>
                                    <div class="wrap-product-content">
                                        <h4><a href="detail.html">Mollit Anim</a></h4>
                                        <span class="price">
                                            <del><span class="amount">200.00</span></del>
                                            <ins><span class="amount">159.00</span></ins>
                                            </span>
                                        <div class="star-rating"></div>
                                    </div>
                                    <div class="wrap-links">
                                        <a href="#">Add to Cart</a>
                                        <a href="#">Wish List</a>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="wrap-product-img">
                                        <a href="detail.html"><img src="assets/images/bag-2.jpg" alt="img" /></a>
                                        <span class="saleoff style2">sale off</span>
                                    </div>
                                    <div class="wrap-product-content">
                                        <h4><a href="detail.html">Minim Veniam</a></h4>
                                        <span class="price">
                                            <del><span class="amount">200.00</span></del>
                                            <ins><span class="amount">159.00</span></ins>
                                            </span>
                                        <div class="star-rating"></div>
                                    </div>
                                    <div class="wrap-links">
                                        <a href="#">Add to Cart</a>
                                        <a href="#">Wish List</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                        <p class="pages">Page 01/10</p>
                        <p class="test"></p>
                    </div>
                </div>
            </div>
            <!-- /.related-bags -->
        </div>
    </div>
    <!-- /.main-content -->
</div>
    </div>
</div>
