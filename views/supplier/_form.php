<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
?>
<div class="supplier-form" style="margin-top:20px">
<div class="col-md-6">
<?php $form = ActiveForm::begin(); ?>
    <?= $form -> field($model,'nama_supplier')->textInput() ?>
    <?= $form -> field($model,'notelp')->textInput() ?>
    <?= $form -> field($model,'email')->textInput() ?>
    <?= $form -> field($model,'alamat')->textInput() ?> 
    <div class="form-group">
    <?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
    </div>
</div>
</div> 
<?php ActiveForm::end(); ?>