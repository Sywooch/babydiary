<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = Yii::t('ui','Email confirmed title') ;

?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="content">
        <div class="block">

            <p>
                <?=$message;?>
            </p>
            <p>
                <a href="/sign-in">Форма авторизации</a>
            </p>

        </div>

    </div>
</div>