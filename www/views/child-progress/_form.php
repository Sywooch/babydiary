<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChildProgress */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="child-progress-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'child_progress_id')->textInput() ?>

    <?= $form->field($model, 'child_id')->textInput() ?>

    <?= $form->field($model, 'dct_progress_id')->textInput() ?>

    <?= $form->field($model, 'event_date')->textInput() ?>

    <?= $form->field($model, 'event_age_month')->textInput() ?>

    <?= $form->field($model, 'event_age_days')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
