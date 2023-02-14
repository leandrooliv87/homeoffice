<?php

use PhpParser\Node\VariadicPlaceholder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Localidades $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="localidades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cidade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>
    <br>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
