<?php

namespace app\controllers;

use Yii;
use app\models\RbCategories;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$request = Yii::$app->request;

		$alias = $request->get('category');

    	$categories = RbCategories::find()->where(['alias'=>$alias])->one();

        return $this->render('index', [
        	'categories' => $categories
        ]);
    }

}
