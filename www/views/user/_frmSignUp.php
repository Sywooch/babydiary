<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-frmSignUp" id="frmSignUp">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}<span class='validation-icon icon-spin4 animate-spin'></span>\n{hint}\n{error}\n{endWrapper}",
            'horizontalCheckboxTemplate' => "{beginLabel}\n{endLabel}\n{beginWrapper}\n{input}\n{error}\n{endWrapper}\n{hint}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-3',
                'offset' => 'col-sm-offset-3',
                'wrapper' => 'col-sm-9',
                'error' => '',
                'hint' => '',
                'state' => ''
            ],
            'enableClientValidation'=>false
        ],
    ]); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 255]) ?>
    <?= $form->field($model, 'confirmPassword')->passwordInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => 100]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('ui', 'Create'), ['class' => 'btn btn-success', 'id' => 'signUpButton']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
