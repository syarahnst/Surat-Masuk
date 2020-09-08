<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratMasuk */

$this->title = 'Update Surat Masuk: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surat Masuk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="surat-masuk-update">`

    <h1><p style="text-align:center"><?= Html::encode($this->title) ?></p></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
