<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiaryFeeding */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diary-feeding-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'diary_feeding_id')->textInput() ?>

    <?= $form->field($model, 'diary_id')->textInput() ?>

    <?= $form->field($model, 'feeding')->textInput() ?>

    <?= $form->field($model, 'dct_feeding_type_id')->textInput() ?>

    <?= $form->field($model, 'feeding_count')->textInput() ?>

    <?= $form->field($model, 'feeding_duration')->textInput() ?>

    <?= $form->field($model, 'solid_food')->textInput() ?>

    <?= $form->field($model, 'solid_food_count')->textInput() ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
