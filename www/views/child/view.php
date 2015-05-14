<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model app\models\Child */

$this->title = $model->first_name . ' ' . $model->last_name ;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Children'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="content">
        <div class="block">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a(Yii::t('ui', 'Update'), ['update', 'id' => $model->child_id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a(Yii::t('ui', 'Delete'), ['delete', 'id' => $model->child_id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('ui', 'Are you sure you want to delete this item?'),
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'child_id',
                    'dctUser.login',
                    'first_name',
                    'last_name',
                    'surname',
                    'birth_date',
                    'time_birth',
                    'birth_place',
                    [
                        'attribute' => 'sex',
                        'value' => ($model == '0') ? Yii::t('ui', 'Boy') : Yii::t('ui', 'Girl')
                    ],
                ],
            ]) ?>

        </div>

    </div>
</div>