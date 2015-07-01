<?php
/**
 * Created by PhpStorm.
 * User: akovalchuk
 * Date: 01.06.2015
 * Time: 16:57
 */ ?>

<div class="row form-group">
    <div class="col-md-12 col-sm-12 col-xl-12">
        <h4>
            <?=Yii::t('ui', 'Sleep');?>
        </h4>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xl-12">
        <label>
            <?=Yii::t('ui', 'Duration of sleeping during a day, h');?>
        </label>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="time" class="form-control" value="" />
    </div>
    <div class="col-md-3 col-sm-3 col-xl-12">
        <label>
            <?=Yii::t('ui', 'Count of sleeping during a day, ');?>
        </label>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="number" class="form-control" value="" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xl-12">
        <label>
            <?=Yii::t('ui', 'Notes');?>
        </label>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xl-12">
        <textarea class="form-control" rows="6"></textarea>
    </div>
</div>
<hr/>
<div class="row form-group">
    <div class="col-md-12 col-sm-12 col-xl-12">
        <h4>
            <?=Yii::t('ui', 'Walking');?>
        </h4>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xl-12">
        <label>
            <?=Yii::t('ui', 'Duration of walking during a day, h');?>
        </label>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="time" class="form-control" value="" />
    </div>
    <div class="col-md-3 col-sm-3 col-xl-12">
        <label>
            <?=Yii::t('ui', 'The average temperature, C ');?>
        </label>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="number" class="form-control" value="" />
    </div>
</div>
<hr/>
<div class="row form-group">
    <div class="vert-aling col-md-12 col-sm-12 col-xl-12">
        <h4>
            <?=Yii::t('ui', 'Air bathes');?>
        </h4>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xl-12">
        <span>
            <label>
                <?=Yii::t('ui', 'Air temperature, C ');?>
            </label>
        </span>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="number" class="form-control" value="" />
    </div>
    <div class="vert-aling col-md-3 col-sm-3 col-xl-12">
        <span>
            <label>
                <?=Yii::t('ui', 'Count in a day ');?>
            </label>
        </span>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="number" class="form-control" value="" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xl-12">
        <span>
            <label>
                <?=Yii::t('ui', 'Duration, min ');?>
            </label>
        </span>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="time" class="form-control" value="" />
    </div>
</div>
<hr/>
<div class="row form-group">
    <div class="vert-aling col-md-12 col-sm-12 col-xl-12">
        <h4>
            <?=Yii::t('ui', 'Massage');?>
        </h4>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xl-12">
        <span>
            <label>
                <?=Yii::t('ui', 'Count in a day');?>
            </label>
        </span>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="number" class="form-control" value="" />
    </div>
    <div class="vert-aling col-md-3 col-sm-3 col-xl-12">
        <span>
            <label>
                <?=Yii::t('ui', 'Duration, min');?>
            </label>
        </span>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="time" class="form-control" value="" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xl-12">
        <label>
            <?=Yii::t('ui', 'Notes');?>
        </label>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xl-12">
        <textarea class="form-control" rows="6"></textarea>
    </div>
</div>
<hr/>
<div class="row form-group">
    <div class="vert-aling col-md-12 col-sm-12 col-xl-12">
        <h4>
            <?=Yii::t('ui', 'Gymnastics');?>
        </h4>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xl-12">
        <span>
            <label>
                <?=Yii::t('ui', 'Count in a day');?>
            </label>
        </span>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="number" class="form-control" value="" />
    </div>
    <div class="vert-aling col-md-3 col-sm-3 col-xl-12">
        <span>
            <label>
                <?=Yii::t('ui', 'Duration, min');?>
            </label>
        </span>
    </div>
    <div class="col-md-2 col-sm-2">
        <input type="time" class="form-control" value="" />
    </div>
</div>
<div class="row form-group">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xl-12">
        <label>
            <?=Yii::t('ui', 'Notes');?>
        </label>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xl-12">
        <textarea class="form-control" rows="6"></textarea>
    </div>
</div>
