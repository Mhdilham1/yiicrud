<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Provinsi;

/* @var $this yii\web\View */
/* @var $model app\models\Kota */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kota-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_provinsi')->dropDownList(Provinsi::getProvinsi(),
        ['id' => 'id_provinsi', 'prompt' => 'Pilih Provinsi']) 
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
