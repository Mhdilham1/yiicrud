<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mahasiswa') ?>

    <?= $form->field($model, 'nama_mahasiswa') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?= $form->field($model, 'id_provinsi') ?>

    <?php // echo $form->field($model, 'id_kota') ?>

    <?php // echo $form->field($model, 'id_jurusan') ?>

    <?php // echo $form->field($model, 'id_prodi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
