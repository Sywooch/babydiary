<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Children');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12" id="content">
        <div class="block">

            <h1><?= Html::encode($this->title) ?></h1>
            <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

            <p>
                <?= Html::a(Yii::t('ui', 'Add'), ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'first_name',
                    'last_name',
                    'surname',
                    'birth_date',
                    //'time_birth',
                    //'birth_place',
                    [
                        'attribute' => 'sex',
                        'value' => function ($data) {
                            return ($data == '0') ? Yii::t('ui', 'Boy') : Yii::t('ui', 'Girl');
                        },
                    ],
                    ['class' => 'yii\grid\ActionColumn'],
                ],
                'pager' => [
                    'pagination' => [
                        'pageSize' => 1,
                    ]
                ],
            ]); ?>

        </div>

    </div>
</div>

