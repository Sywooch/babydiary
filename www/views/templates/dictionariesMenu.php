<?php
    use yii\helpers\Html;
?>

<div id="categories-2" class="widget"><h3><?=Yii::t('ui', 'Dictionaries');?></h3> <ul>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Children'), ['/admin/dictionaries/child'],['title' => Yii::t('ui', 'Child')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Progresses'), ['/admin/dictionaries/dct-progress'],['title' => Yii::t('ui', 'Child')]);?></li>
    </ul>
</div>