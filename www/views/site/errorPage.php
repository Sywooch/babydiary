<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = "Error page" ;

?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="content">
        <div class="block">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?=$message;?>
            </p>

        </div>

    </div>
</div>