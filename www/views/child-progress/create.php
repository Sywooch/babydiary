<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChildProgress */

$this->title = Yii::t('ui', 'Create Child Progress');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ui', 'Child Progresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="child-progress-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
