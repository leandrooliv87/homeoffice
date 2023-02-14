<?php

use app\models\Localidades;
use app\models\Usuarios;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Usuarios $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">

        <div class="col-lg-4">
            <?= $form->field($model, 'nome_usuario')->textInput(['maxlength' => true,]) ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'funcao_usuario')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'numero_modem')->textInput() ?>
        </div>

    </div>

    <br>

    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'patrimonio_monitor')->textInput() ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'patrimonio_cadeira')->textInput() ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'tipo_mesa')->textInput(['maxlength' => true]) ?>
        </div>

    </div>

    <br>

    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'numero_ramal')->textInput() ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'webcam')->textInput() ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'id_localidade')->dropDownList(Usuarios::getLocalidades(), ['prompt' => '::Selecione::']) ?>
        </div>

    </div>

    <br>

    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'id_computador')->dropDownList(Usuarios::getComputadores(), ['prompt' => '::Selecione::']) ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'id_headset')->dropDownList(Usuarios::getHeadsets(), ['prompt' => '::Selecione::']) ?>
        </div>

        <div class="col-lg-4">
            <?= $form->field($model, 'id_software')->dropDownList(Usuarios::getSoftwares(), ['prompt' => '::Selecione::']) ?>
        </div>

    </div>

    <br>

    <div class="row">
        <div class="col-lg-12">
            <?= $form->field($model, 'observacao')->textarea(['rows' => 6]) ?>

        </div>
    </div>

</div>

<br>

<div class="form-group">
    <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>