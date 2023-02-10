<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usuarios $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'funcao_usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_modem')->textInput() ?>

    <?= $form->field($model, 'patrimonio_monitor')->textInput() ?>

    <?= $form->field($model, 'patrimonio_cadeira')->textInput() ?>

    <?= $form->field($model, 'tipo_mesa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numero_ramal')->textInput() ?>

    <?= $form->field($model, 'webcam')->textInput() ?>

    <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_localidade')->textInput() ?>

    <?= $form->field($model, 'id_computador')->textInput() ?>

    <?= $form->field($model, 'id_headset')->textInput() ?>

    <?= $form->field($model, 'id_software')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
