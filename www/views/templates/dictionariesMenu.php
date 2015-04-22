<?php
    use yii\helpers\Html;
?>

<div id="categories-2" class="widget">
    <h3><?=Yii::t('ui', 'Children');?></h3>
    <ul>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Children list'), ['/admin/child'],['title' => Yii::t('ui', 'Children list')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Child Progresses'), ['/admin/child-progress'],['title' => Yii::t('ui', 'Child Progresses')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Child Solid Foods'), ['/admin/child-solid-food'],['title' => Yii::t('ui', 'Child Solid Foods')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Child Teeth'), ['/admin/child-tooth'],['title' => Yii::t('ui', 'Child Teeth')]);?></li>
    </ul>
    <h3><?=Yii::t('ui', 'Diaries');?></h3>
    <ul>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Children'), ['/admin/child'],['title' => Yii::t('ui', 'Child')]);?></li>
    </ul>

    <h3><?=Yii::t('ui', 'Dictionaries');?></h3>
    <ul>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Children'), ['/admin/dictionaries/child'],['title' => Yii::t('ui', 'Child')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Progresses'), ['/admin/dictionaries/dct-progress'],['title' => Yii::t('ui', 'Child')]);?></li>
    </ul>
</div>