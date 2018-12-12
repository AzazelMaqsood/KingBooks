<?php
/**
 * Created by PhpStorm.
 * User: ilyamikhalev
 * Date: 27.12.2017
 * Time: 11:04
 */

namespace app\components;

use app\controllers\CustomController;
use app\models\Category;
use yii\helpers\ArrayHelper;
use yii\web\UrlRuleInterface;
use yii\base\BaseObject;

class urlManagerRule extends BaseObject implements UrlRuleInterface
{


    //Формирует ссылки в заданном виде
    public function createUrl($manager, $route, $params)
    {
        if ($route === 'category/view')
        {
            $url = 'category/' . implode('/', $params);

            return $url;
        }

        return false;
    }

    //Разбирает входящий URL запрос, преобразует ссылки произвольного вида  в нужный для Yii2
    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();

        $urls = explode("/", $pathInfo);

        if ($urls[0] == 'category')
        {
            unset($urls[0]);
            /*CustomController::printr($urls);
            exit;*/
            $model = Category::find()
                ->where(['url' => $urls])
                ->asArray()
                ->all();

            $id = [];

            foreach ($model as $categoryId)
            {
                if ($categoryId['parentid'] == $model[0]['id'] || $categoryId['parentid'] == 0)
                {
                    $id['id'][] = $categoryId['id'];
                }
            }
            return ['category/view' , $id];
        }

        CustomController::printr($urls);
        exit;
    }
}
