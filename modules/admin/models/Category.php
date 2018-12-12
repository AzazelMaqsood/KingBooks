<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $parantId
 * @property string $title Заголовок
 * @property string $description Описание
 * @property string $keywords Ключевые слова
 * @property string $url
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parentid', 'title', 'description', 'keywords'], 'required'],
            [['parentid'], 'integer'],
            [[ 'keywords'], 'string'],
            [['title', 'url', 'description',], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'parentid' => 'parentid',
            'title' => 'Title',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'url' => 'Url',
        ];
    }
}
