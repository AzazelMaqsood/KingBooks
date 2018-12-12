<?php


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
            [['title', 'description', 'keywords', 'parentId'], 'required'],
            [['title', 'description', 'keywords', 'url'], 'string', 'max' => 255],
            [['parentId'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
          'title' => 'Загаловок',
          'description' => 'Описание',
          'keywords' => 'Ключивые слова',
          'parantId' => 'Категория',
        ];
    }
}