<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-frmSignIn" id="frmSignIn">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCheckboxTemplate' => "{beginLabel}\n{endLabel}\n{beginWrapper}\n{input}{label}\n{error}\n{endWrapper}\n{hint}",
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
    <?= $form->field($model, 'rememberMe')->checkbox() ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('ui', 'Sign-in'), ['class' => 'btn btn-success', 'id' => 'signInButton']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
