<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Localidades $model */

$this->title = 'Update Localidades: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Localidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="localidades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
