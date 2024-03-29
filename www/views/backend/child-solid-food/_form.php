<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChildSolidFood */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="child-solid-food-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'child_solid_food_id')->textInput() ?>

    <?= $form->field($model, 'child_id')->textInput() ?>

    <?= $form->field($model, 'dct_age_id')->textInput() ?>

    <?= $form->field($model, 'dct_solid_food_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
