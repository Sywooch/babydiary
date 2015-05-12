<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DctAgeLoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dct-age-loc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dct_age_id')->textInput() ?>

    <?= $form->field($model, 'dct_language_id')->textInput() ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
