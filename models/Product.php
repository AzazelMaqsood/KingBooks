<?php

namespace app\models;
use yii\db\ActiveRecord;


class Categories extends ActiveRecord
{
    public static function category()
    {
        return 'product';
    }

    public function getProducts()
    {
        return $tihs->hasOne(Category::className(), ['id' =>'id']);
    }
}