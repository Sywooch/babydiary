<?php
/**
 * Created by PhpStorm.
 * User: akovalchuk
 * Date: 25.05.2015
 * Time: 15:50
 */
?>
<div id="frmDiaryCommon" class="form">
    <div class="row form-group">
        <div class="col-md-3 col-sm-3 col-sx-12">
            <span>
                <label for="height"><?=Yii::t('ui', 'Height');?>:</label>
            </span>
        </div>
        <div class="col-md-3 col-sm-3 col-sx-12">
            <input type="text" id="height" class="form-control" data-inputmask-regex="^\d{2}((,|\.)\d)?$"/>
        </div>
        <div class="col-md-3 col-sm-3 col-sx-12">
            <span>
                <label for="headCircumference"><?=Yii::t('ui', 'Head circumference');?>:</label>
            </span>
        </div>
        <div class="col-md-3 col-sm-3 col-sx-12">
            <input type="text" id="headCircumference" class="form-control" data-inputmask-regex="^\d{2}((,|\.)\d)?$"/>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-3 col-sm-3 col-sx-12">
            <span>
                <label for="weight"><?=Yii::t('ui', 'Weight');?>:</label>
            </span>
        </div>
        <div class="col-md-3 col-sm-3 col-sx-12">
            <input type="text" id="weight" class="form-control" data-inputmask-regex="^\d{1,2}((,|\.)\d{1,3})?$"/>
        </div>
        <div class="col-md-3 col-sm-3 col-sx-12">
            <span>
                <label for="chestCircumference"><?=Yii::t('ui', 'Chest circumference');?>:</label>
            </span>
        </div>
        <div class="col-md-3 col-sm-3 col-sx-12">
            <input type="text" id="chestCircumference" class="form-control" data-inputmask-regex="^\d{2}((,|\.)\d)?$"/>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-3 col-xs-12">
            <span>
                <label for="other"><?=Yii::t('ui', 'Other');?>:</label>
            </span>
        </div>
        <div class="col-md-9 col-sm-9 col-sx-12">
            <input type="text" id="other" class="form-control"/>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12 col-xs-12">
            <label for="notes"><?=Yii::t('ui', 'Impressions / Notes');?>:</label>
        </div>
        <div class="col-md-12 col-sm-12 col-sx-12">
            <textarea id="notes" class="form-control" rows="6"></textarea>
        </div>
    </div>
        <button id="diaryCommonButton" class="btn btn-success" type="submit"><?=Yii::t('ui', 'Save');?></button>
</div>