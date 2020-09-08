<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratMasuk */

$this->title = 'Tambah Surat Masuk';
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-masuk-create">

    <h1><p style="text-align:center"><?= Html::encode($this->title) ?></h1></p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
