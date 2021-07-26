<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Jurusan;

/* @var $this yii\web\View */
/* @var $model app\models\Prodi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_jurusan')->dropDownList(Jurusan::getJurusanList(),
        ['id' => 'id_jurusan', 'prompt' => 'Pilih Jurusan']) 
    ?>

    <?= $form->field($model, 'nama_prodi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
