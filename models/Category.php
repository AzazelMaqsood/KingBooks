<?php


namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return 'category';
    }

    // Родитель
    public function getParent()
    {
        return $this->hasOne(Category::className(), ['id' => 'parentid']);
    }

    // Дети
    public function getChildren()
    {
        return $this->hasMany(Category::className(), ['parentid' => 'id']);
    }


    public function rules()
    {
        return [
            [['title', 'description', 'keywords', 'parentid'], 'required'],
            [['title', 'description', 'keywords', 'url'], 'string', 'max' => 255],
            [['parentid'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
          'title' => 'Загаловок',
          'description' => 'Описание',
          'keywords' => 'Ключивые слова',
          'parantid' => 'Категория',
        ];
    }
}