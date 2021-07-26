<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProvinsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Provinsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provinsi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Provinsi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_provinsi',
            'nama_provinsi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
