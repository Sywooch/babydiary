<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div id="widgetLogin" class="widget block">
    <?php if(Yii::$app->user->isGuest) :?>
        <h4><?=Yii::t('ui', 'Authorization');?></h4>
        <form name="loginForm" class="form-horizontal" novalidate="novalidate" ng-submit="wLogin.doLogin()">
            <div class="form-group">
                <div class="col-sm-12">
                    <input ng-model="wLogin.auth.email" type="email" class="form-control" placeholder="<?=Yii::t('ui', 'Email');?>" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input ng-model="wLogin.auth.password" type="password" class="form-control" laceholder="<?=Yii::t('ui', 'Password');?>" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="checkbox">
                        <label>
                            <input ng-model="wLogin.auth.remember" type="checkbox"  ng-disabled="!loginForm.$valid"> <?=Yii::t('ui', 'Remember me');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary" ng-disabled="!loginForm.$valid"><?=Yii::t('ui', 'Sign in');?></button>
                </div>
            </div>
        </form>
    <?php else :?>
        <a href="site/logout">Logout</a>
    <?php endif;?>
</div>