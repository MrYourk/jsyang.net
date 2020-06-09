<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;


use frontend\models\ContactForm;

/**
 * Class ContactController 联系我们
 * @package frontend\controllers
 *
 */
class ContactController extends Controller
{
    public $layout = 'home';
    /**
     * contact  联系方式
     */
    public function actionContact()
    {
        return $this->render('contact');
    }

    /**
     * position 地理位置
     */
    public function actionPosition()
    {
        return $this->render('position');
    }

}