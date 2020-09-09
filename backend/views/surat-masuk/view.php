<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratMasuk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="surat-masuk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pengirim',
            'no_surat',
            'tanggal_surat',
            'tanggal_diteruskan',
            'perihal',
            'isi_ringkas:ntext',
            'catatan:ntext',
            'sifat',
            [
                'attribute' => 'file',
                'value' => function($model){
                    $baseUrl = Yii::getAlias('@web/');
                    return $baseUrl.$model->file;
                },
                'format' => ['image', ['width' => '500', 'height' => '400']],
            ],
            // [
            //     'attribute' => 'file',
            //     'format'    => 'raw',
            //     'value' => function ($model) {
            //         if ($model->file) {
            //             $baseUrl = Yii::getAlias('@web/');
            //             return Html::a(
            //                 'Lihat Berkas',
            //                 $baseUrl . $model->file,
            //                 [
            //                     'title' => 'Go!',
            //                     'target' => '_blank'
            //                 ]
            //             );
            //         }
            //     }
            // ],

            // 'state',
        ],
    ]) ?>

</div>
