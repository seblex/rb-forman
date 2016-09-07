<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\RbCategories;
use app\models\Articles;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $categories = RbCategories::find()->where(['parent'=>0])->all();

        return $this->render('index',[
            'categories' => $categories
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $id = 1;

        $article = Articles::find()->where(['id'=>$id])->one();

        $model = new ContactForm();

        return $this->render('contact', [
            'model' => $model,
            'article' => $article,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $id = 2;

        $article = Articles::find()->where(['id'=>$id])->one();

        return $this->render('about', [
            'article' => $article,
        ]);
        
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionDostavka()
    {
        $id = 3;

        $article = Articles::find()->where(['id'=>$id])->one();

        return $this->render('dostavka', [
            'article' => $article,
        ]);
        
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAkcii()
    {
        $id = 4;

        $article = Articles::find()->where(['id'=>$id])->one();

       return $this->render('akcii', [
            'article' => $article,
        ]);
        
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionOptom()
    {
        $id = 13;

        $article = Articles::find()->where(['id'=>$id])->one();
        return $this->render('optom',[
            'article' => $article,
        ]);
        
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionArticles()
    {
        $parent = 1;

        $query = Articles::find()->where(['parent' => $parent]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count()
        ]);
        $articles = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        
        return $this->render('articles', [
            'articles' => $articles,
            'active_page' => Yii::$app->request->get("page", 1),
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination
        ]);
        
    }
}
