<div class="row">
    <div class="col-md-3">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" name="feeding" checked /><?=Yii::t('ui', 'Feeding');?>
            </label>
        </div>
    </div>
</div>
<div class="feeding-form">
    <div class="row form-group">
        <div class="col-md-5 col-md-offset-1 col-xs-12">
            <div class="radio">
                <label>
                    <input type="radio" value="0" name="feeding_type" checked /><?=Yii::t('ui', 'Breast milk');?>
                </label>
            </div>
        </div>
        <div class="vert-aling col-md-3 col-xs-12">
            <span>
                <label><?=Yii::t('ui', 'number of feedings per day');?></label>
            </span>
        </div>
        <div class="col-md-2 col-xs-12">
            <input type="text" class="form-control"/>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-5 col-md-offset-1 col-xs-12">
            <div class="radio">
                <label>
                    <input type="radio" value="0" name="feeding_type" /><?=Yii::t('ui', 'Infant formula');?>
                </label>
            </div>
        </div>
        <div class="vert-aling col-md-3 col-xs-12">
            <span>
                <label><?=Yii::t('ui', 'duration of feeding, min');?></label>
            </span>
        </div>
        <div class="col-md-2 col-xs-12">
            <input type="text" class="form-control"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-1 col-xs-12">
            <div class="radio">
                <label>
                    <input type="radio" value="0" name="feeding_type" /><?=Yii::t('ui', 'Mixed');?>
                </label>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-3">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" name="solid_foods" checked /><?=Yii::t('ui', 'Solid foods');?>
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-3 col-xs-12">
        <label><?=Yii::t('ui', 'number of feedings per day');?></label>
    </div>
    <div class="col-md-2 col-xs-12">
        <input type="number" class="form-control"/>
    </div>
</div>
<div class="row solid_foods-form">
    <div class="col-md-offset-1 col-md-11 col-sm-offset-1 col-sm-11 col-xs-offset-1 col-xs-11">
        <div class="row">
            <?php
                $count = count($solidFood);
                $delta = $d = ceil($count / 3);
                ?>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <?php for($i = 0 ; $i < $count; $i++):?>
                <?php if($i == $d):
                $d += $delta;?>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <?php endif; ?>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="" name="sf_<?=$solidFood[$i]['dct_solid_food_id'];?>" checked /><?=Yii::t('ui', $solidFood[$i]['text']);?>
                    </label>
                </div>
            <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row form-group">
    <div class="col-md-12 col-xs-12">
        <label><?=Yii::t('ui', 'Impressions / Notes');?>:</label>
    </div>
    <div class="col-md-12 col-sm-12 col-sx-12">
        <textarea class="form-control" rows="6"></textarea>
    </div>
</div>
