<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DctDoctorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ui', 'Dct Doctors');
$this->params['breadcrumbs'][] = Yii::t('ui', 'Dictionaries');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-9 col-md-9 col-sm-9 right" id="content">
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

            //'dct_doctor_id',
            [
                'attribute' => 'dctDoctorLocs.text',
                'value' => function ($data) {
                    $curLang = app\models\DctLanguage::getCurrent();
                    foreach($data->dctDoctorLocs as $doctor){
                        if($doctor->dct_language_id == $curLang->dct_language_id){
                            return $doctor->text;
                        }
                    }
                },
            ],
            [
                'attribute' => 'enable',
                'format' => ['boolean']
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

        </div>

    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 sidebar left" id="sidebar">
        <?=$this->render('../templates/dictionariesMenu');?>
    </div>
</div>