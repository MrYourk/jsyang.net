<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\web\Controller;


/**
 * BusinessController   业务板块
 */
class BusinessController extends Controller
{
    /**
     * index    上市板块
     */
    public $layout = 'home';

    public function actionIndex()
    {
        return $this->render('index');
    }
    
    /**
     * index    科技
     */

    public function actionIndex_1()
    {
        return $this->render('index_1');
    }
    
    /**
     * index    烟配
     */

    public function actionIndex_2()
    {
        return $this->render('index_2');
    }
    
    /**
     * index    教育
     */

    public function actionIndex_3()
    {
        return $this->render('index_3');
    }

    
    /**
     * index    康养
     */

    public function actionIndex_4()
    {
        return $this->render('index_4');
    }

    /**
     * medicine    非上市板块
     */
    public function actionMedicine()
    {
        return $this->render('medicine');
    }
    
    /**
     * medicine    金融
     */
    public function actionMedicine1()
    {
        return $this->render('medicine1');
    }
     /**
     * medicine    房地产
     */
    public function actionMedicine2()
    {
        return $this->render('medicine2');
    }
    /**
     * medicine    物业管理
     */
    public function actionMedicine3()
    {
        return $this->render('medicine3');
    }   
    /**
     * medicine    康养
     */
    public function actionMedicine4()
    {
        return $this->render('medicine4');
    }
    /**
     * medicine    慈善基金
     */
    public function actionMedicine5()
    {
        return $this->render('medicine5');
    }
}