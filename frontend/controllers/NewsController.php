<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\web\Controller;


/**
 * News Controller
 */

class NewsController extends Controller
{
    Public $layout = 'home';

    /**
     * news  集团中心
     */
    public function actionNews()
    {
        return $this->render('news');
    }

    /**
     * dynamic  最新公告
     */
    public function actionDynamic()
    {
        return $this->render('dynamic');
    }

    /**
     * News_one 越多更多
     */
    public function actionNews_one(){
        return $this->render('news_one');
    }
}