<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryDoctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diary-doctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'diary_id')->textInput() ?>

    <?= $form->field($model, 'dct_doctor_id')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
