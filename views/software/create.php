<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Software $model */

$this->title = 'Novo Software';
$this->params['breadcrumbs'][] = ['label' => 'Softwares', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="software-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
