<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SUser */

$this->title = 'Create S User';
$this->params['breadcrumbs'][] = ['label' => 'S Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
