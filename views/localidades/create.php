<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Localidades $model */

$this->title = 'Nova Localidade';
$this->params['breadcrumbs'][] = ['label' => 'Localidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="localidades-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
