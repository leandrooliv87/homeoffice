<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Headset $model */

$this->title = 'Create Headset';
$this->params['breadcrumbs'][] = ['label' => 'Headsets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="headset-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
