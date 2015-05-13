<?php
    use yii\helpers\Html;
?>

<div id="categories-2" class="widget block">
    <h4><?=Yii::t('ui', 'Dictionaries');?></h4>
    <ul>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Ages'), ['/admin/dictionaries/age'],['title' => Yii::t('ui', 'Dct Ages')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Doctors'), ['/admin/dictionaries/doctors'],['title' => Yii::t('ui', 'Dct Doctors')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Progresses'), ['/admin/dictionaries/dct-progress'],['title' => Yii::t('ui', 'Dct Progresses')]);?></li>
    </ul>
</div>