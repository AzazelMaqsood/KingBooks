<?php


namespace app\controllers;
use app\controllers\CustomController;
use app\models\Category;
use Yii;

class CategoryController extends CustomController
{
    public function actionView()
    {

        $id = Yii::$app->request->get('id');

        CustomController::printr($id);
        exit;

       // $id = end($id);



        $model = Category::find()->where(['id' => $id])->with('children')->all();





        return $this->render('view', compact('model'));
    }

    //--------------------------------------------------------------------------


}