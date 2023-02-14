<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Computadores $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="computadores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_computador')->textInput(['maxlength' => true]) ?>
    <br>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
