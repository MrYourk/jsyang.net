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
     * News_one 新闻
     */
    public function actionNews_1(){
        return $this->render('news_1');
    }
    
    /**
     * News_one 信息
     */
    public function actionNews_2(){
        return $this->render('news_2');
    }
    
    /**
     * News_one 信息
     */
    public function actionNews_3(){
        return $this->render('news_3');
    }
    
    /**
     * News_one 信息
     */
    public function actionNews_4(){
        return $this->render('news_4');
    }
    
     /**
     * News_one 信息
     */
    public function actionNews_5(){
        return $this->render('news_5');
    }
}