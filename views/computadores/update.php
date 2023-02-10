<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Computadores $model */

$this->title = 'Update Computadores: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Computadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="computadores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
