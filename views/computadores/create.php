<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Computadores $model */

$this->title = 'Novos Computadores';
$this->params['breadcrumbs'][] = ['label' => 'Computadores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="computadores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
