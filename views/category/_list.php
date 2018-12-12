<?php


use yii\helpers\Url;
use yii\helpers\Html;
$img = $model->getImage();
?>

<li class="product-item">
    <div class="wrap-product-img">
        <a href="detail.html"><img src="<?= $img->getUrl('300x300')?>" alt="<?= $model->title ?>" /></a>

       <?php if($model->sale == 1): ?>
        <span class="saleoff style2">Распрадажа</span>
       <?php endif; ?>
    </div>
    <div class="wrap-product-content">
        <h4><a href="detail.html"><?= $model->title ?></a></h4>
        <span class="price">
            <?php
                switch ($model->sale){
                    case 1 :
                        echo '<del><span class="amount">'. $model->price .'</span></del>
                              <ins><span class="amount">'. $model->salePrice .'</span></ins>
                        ';
                        break;

                    case 0 :
                        echo ' <ins><span class="amount">'. $model->price .'</span></ins>';
                        break;
                }
            ?>

            </span>
        <div class="star-rating"></div>
    </div>
    <div class="wrap-links">
        <a href="#">Add to Cart</a>
        <a href="#">Wish List</a>
    </div>
</li>
