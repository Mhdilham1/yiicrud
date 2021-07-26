<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kota */

$this->title = 'Update Kota: ' . $model->id_kota;
$this->params['breadcrumbs'][] = ['label' => 'Kotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kota, 'url' => ['view', 'id' => $model->id_kota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kota-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
