<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\web\Controller;


/**
 * BusinessController   业务范围
 */
class BusinessController extends Controller
{
    /**
     * index    地产开发
     */
    public $layout = 'home';

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * medicine    医药
     */
    public function actionMedicine()
    {
        return $this->render('medicine');
    }

    /**
     *
     */
}