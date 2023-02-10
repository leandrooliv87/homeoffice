<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Localidades $model */

$this->title = 'Create Localidades';
$this->params['breadcrumbs'][] = ['label' => 'Localidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localidades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
