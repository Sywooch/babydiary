<?php
    use yii\helpers\Html;
?>

<div id="categories-2" class="widget block">
    <ul>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Ages'), ['/admin/dictionaries/age'],['title' => Yii::t('ui', 'Dct Ages')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Doctors'), ['/admin/dictionaries/doctors'],['title' => Yii::t('ui', 'Dct Doctors')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Progresses'), ['/admin/dictionaries/progress'],['title' => Yii::t('ui', 'Dct Progresses')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Solid Foods'), ['/admin/dictionaries/solidFood'],['title' => Yii::t('ui', 'Dct Solid Foods')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Teeth'), ['/admin/dictionaries/teeth'],['title' => Yii::t('ui', 'Dct Teeth')]);?></li>
        <li class="cat-item cat-item-2"><?=Html::a(Yii::t('ui', 'Dct Vaccinations'), ['/admin/dictionaries/vaccination'],['title' => Yii::t('ui', 'Dct Vaccinations')]);?></li>
    </ul>
</div>