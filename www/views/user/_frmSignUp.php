<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form" id="frmSignUp">
        <div class="form-group">
            <label for="email" class="control-label col-sm-3"><?=Yii::t('ui', 'Email');?></label>
            <div class="col-sm-9">
                <input type="text" maxlength="100" name="email" class="form-control" id="email" title="">
                <div class="help-block help-block-error "></div>
            </div>
        </div>
        <div class="form-group">
            <label for="login" class="control-label col-sm-3"><?=Yii::t('ui', 'Login');?></label>
            <div class="col-sm-9">
                <input type="text" maxlength="100" name="login" class="form-control" id="login" title="">
                <div class="help-block help-block-error "></div>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label col-sm-3"><?=Yii::t('ui', 'Password');?></label>
            <div class="col-sm-9">
                <input type="password" maxlength="255" name="password" class="form-control" id="password" title="">
                <div class="help-block help-block-error "></div>
            </div>
        </div>
        <div class="form-group">
            <label for="confirmPassword" class="control-label col-sm-3"><?=Yii::t('ui', 'Confirm Password');?></label>
            <div class="col-sm-9">
                <input type="password" maxlength="255" name="confirmPassword" class="form-control" id="confirmPassword" title="">
                <div class="help-block help-block-error "></div>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-success" id="signUpButton" type="submit"><?=Yii::t('ui', 'Sign-up');?></button>
        </div>

</div>
