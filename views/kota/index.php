<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KotaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kota-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kota', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kota',
            'nama_kota',
            'id_provinsi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
