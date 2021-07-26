<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<div class="barang-form" style="margin-top:20px">
<div class="col-md-6">
<?php $form = ActiveForm::begin(); ?>
    <?= $form -> field($model,'nama_jenis')->textInput() ?>
    <?= $form -> field($model,'keterangan')->textInput() ?> 
    <div class="form-group">
    <?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
    </div>
</div>
</div> 
<?php ActiveForm::end(); ?>