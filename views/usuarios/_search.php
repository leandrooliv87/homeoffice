<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\UsuariosSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nome_usuario') ?>

    <?= $form->field($model, 'funcao_usuario') ?>

    <?= $form->field($model, 'numero_modem') ?>

    <?= $form->field($model, 'patrimonio_monitor') ?>

    <?php // echo $form->field($model, 'patrimonio_cadeira') ?>

    <?php // echo $form->field($model, 'tipo_mesa') ?>

    <?php // echo $form->field($model, 'numero_ramal') ?>

    <?php // echo $form->field($model, 'webcam') ?>

    <?php // echo $form->field($model, 'observacao') ?>

    <?php // echo $form->field($model, 'id_localidade') ?>

    <?php // echo $form->field($model, 'id_computador') ?>

    <?php // echo $form->field($model, 'id_headset') ?>

    <?php // echo $form->field($model, 'id_software') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
