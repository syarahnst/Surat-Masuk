<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\SuratMasuk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-masuk-form">

    <?php $form = ActiveForm::begin(['options' => ['autocomplete' => 'off','enctype' => 'multipart/form-data']]); ?>
    <div class="col-md-12">
        <div class="col-md-6">
            <?= $form->field($model, 'pengirim')->textInput(['maxlength' => true]) ?>
        </div>
    
        <div class="col-md-6">
            <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    

    <div class="col-md-12">
        <div class="col-md-6">
            <?= $form->field($model, 'perihal')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'sifat')->dropDownList(
                    ['penting' => 'Penting', 'biasa' => 'Biasa'], ['prompt'=>'Pilih Sifat Surat']
                );
            ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="col-md-6">
            <?= $form->field($model, 'tanggal_surat')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                    'inline' => false, 
                    // modify template for custom rendering
                    // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-mm-yyyy'
                    ]
            ]);?>
        </div>
    
        <div class="col-md-6">
            <?= $form->field($model, 'tanggal_diteruskan')->widget(
                DatePicker::className(), [
                    // inline too, not bad
                    'inline' => false, 
                    // modify template for custom rendering
                    // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                    'clientOptions' => [
                        'autoclose' => true,
                        'format' => 'dd-mm-yyyy'
                    ]
            ]);?>
        </div>
    </div>

    <div class="col-md-12">
    <div class="col-md-12">
        <?= $form->field($model, 'isi_ringkas')->textarea(['rows' => 6]) ?>
    </div>
    </div>

    <div class="col-md-12">
    <div class="col-md-12">
        <?= $form->field($model, 'catatan')->textarea(['rows' => 6]) ?>
    </div>
    </div> 

    <div class="col-md-12">
    <div class="col-md-12">
        <?= $form->field($model, 'file')->fileInput() ?>
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
