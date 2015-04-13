<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChildTooth */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="child-tooth-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'child_tooth_id')->textInput() ?>

    <?= $form->field($model, 'child_id')->textInput() ?>

    <?= $form->field($model, 'dct_tooth_id')->textInput() ?>

    <?= $form->field($model, 'tooth_order')->textInput() ?>

    <?= $form->field($model, 'tooth_date')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'tooth_age_months')->textInput() ?>

    <?= $form->field($model, 'tooth_age_days')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
