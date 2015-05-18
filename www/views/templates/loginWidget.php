<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<div id="categories-2" class="widget block">
    <?php if(Yii::$app->user->isGuest) :?>
        <h4><?=Yii::t('ui', 'Authorization');?></h4>
        <form class="form-horizontal">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="<?=Yii::t('ui', 'Email');?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="<?=Yii::t('ui', 'Password');?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> <?=Yii::t('ui', 'Remember me');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-default"><?=Yii::t('ui', 'Sign in');?></button>
                </div>
            </div>
        </form>
    <?php else :?>

    <?php endif;?>
</div>
