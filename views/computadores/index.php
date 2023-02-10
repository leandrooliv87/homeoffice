<?php

use app\models\Computadores;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ComputadoresSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Computadores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computadores-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Computadores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipo_computador',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Computadores $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>