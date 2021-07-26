<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Jenis;
use app\models\Supplier;
?>
<div class="barang-form">
<div class="col-md-6">
<?php $form = ActiveForm::begin(); ?>
    <?= $form -> field($model,'kode_barang')->textInput() ?>
    <?= $form -> field($model,'nama_barang')->textInput() ?>
    <?= $form -> field($model,'satuan')->textInput() ?>
    <!-- Drop down list , get list of 'jenis' and 'suplier' from table-->
    <?= $form -> field($model,'id_jenis')->dropDownList(
        ArrayHelper::map(Jenis::find()->all(),'id','nama_jenis'),
        ['prompt'=>'Pilih']) ->label('Jenis Barang'); ?>
     <?= $form -> field($model,'id_supplier')->dropDownList(
        ArrayHelper::map(Supplier::find()->all(),'id','nama_supplier'),
        ['prompt'=>'Pilih']) ->label('Supplier'); ?>
    <!-- here is end of drop down list -->
    <?= $form -> field($model,'harga')->textInput() ?>
    <?= $form -> field($model,'stok')->textInput() ?>
    <?= $form->field($model, 'tanggalMasuk')->widget(\yii\jui\DatePicker::className(), [
    'options' => ['class' => 'form-control'], ]) ?>
    
    <div class="form-group">
    <?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
    </div>
</div>
</div> 
<?php ActiveForm::end(); ?>