<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryCommon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diary-common-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'diary_common_id')->textInput() ?>

    <?= $form->field($model, 'diary_id')->textInput() ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => 5]) ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'head_circumference')->textInput() ?>

    <?= $form->field($model, 'chest_circumference')->textInput() ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'spelling')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
