<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SuratMasukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Masuk';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-masuk-index">

    <h1><p style="text-align:center"><?= Html::encode($this->title) ?></p></h1>

    <p>
        <?= Html::a('Tambah Surat Masuk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'pengirim',
            'no_surat',
            'tanggal_surat',
            //'tanggal_diteruskan',
            'perihal',
            'isi_ringkas:ntext',
            //'catatan:ntext',
            'sifat',
            //'file:ntext',
            //'state',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

