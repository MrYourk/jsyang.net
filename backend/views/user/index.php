<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchUser */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'S Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="suser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create S User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
