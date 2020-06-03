<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\web\Controller;


/**
 * HrController
 */

class HrController extends Controller
{
    public $layout = 'home';
    /**
     * hr_Recruitment position
     */

    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * hr_Idea
     */
    public function actionIdea()
    {
        return $this->render('idea');
    }
}