<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PedagangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedagangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedagang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Pedagang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_jenis_dagang',
            'nama',
            'alamat',
            'email:email',
            //'nomor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
