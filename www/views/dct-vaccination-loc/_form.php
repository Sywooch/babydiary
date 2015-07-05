<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DctVaccinationLoc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dct-vaccination-loc-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dct_vaccination_id')->textInput() ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'genitive_text')->textInput(['maxlength' => 250]) ?>

    <?= $form->field($model, 'dct_language_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
