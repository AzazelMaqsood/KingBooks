<?php
/**

 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return [
            [['title', 'description', 'keywords'], 'required'],
            [['title', 'description', 'keywords'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
          'title' => 'Загаловок',
          'description' => 'Описание',
          'keywords' => 'Ключивые слова',
        ];
    }
}