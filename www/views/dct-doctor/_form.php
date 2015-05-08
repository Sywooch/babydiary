<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DctDoctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dct-doctor-form">

    <?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCheckboxTemplate' => "{beginLabel}\n{endLabel}\n{beginWrapper}\n{input}\n{error}\n{endWrapper}\n{hint}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-3',
                'offset' => 'col-sm-offset-3',
                'wrapper' => 'col-sm-9',
                'error' => '',
                'hint' => '',
            ]
        ],
    ]); ?>

    <?= $form->field($model, 'dct_doctor_id')->textInput(['disabled'=>'disabled']) ?>

    <?= $form->field($model, 'enable')->dropDownList(['1' => Yii::t('ui', 'Yes'), '0' => Yii::t('ui', 'No')]) ?>
    <div class="text-right">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">#</th>
                <th style="width: 30%"><?=Yii::t('ui', 'Language')?></th>
                <th><?=Yii::t('ui', 'Text')?></th>
                <th style="width: 15%"><?=Yii::t('ui', 'Actions')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($modelLoc as $index => $item) :?>
                <tr>
                    <td><?=$index + 1;?><?=Html::input('hidden', 'dctLocId', $item->dct_doctor_loc_id);?></td>
                    <td>
                        <span class="dct_language_id"><?=($item->dctLanguage->name != "") ? $item->dctLanguage->name : '&nbsp;';?></span>
                        <?=Html::dropDownList('dct_language_id', $item->dct_language_id, $langList, ['class' => 'form-control hidden']);?>
                    </td>
                    <td>
                        <span class="name"><?=($item->text != "") ? $item->text : '&nbsp;';?></span>
                        <?=Html::input('text', 'name', $item->text, ['class' => 'form-control hidden']);?>
                        <input class="hidden inline-input" type="text" value="<?=$item->text;?>" />
                    </td>
                    <td>
                        <div class="btn-group edit-group visible" role="group" aria-label="Edit">
                            <button class="btnEdit btn btn-success" onclick="editRow(this)"  title="<?=Yii::t('ui', 'Edit')?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            <button class="btnDelete btn btn-danger"  title="<?=Yii::t('ui', 'Delete')?>">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </div>
                        <div class="btn-group save-group hidden" role="group" aria-label="Save">
                            <button class="btnSave btn btn-success"  title="<?=Yii::t('ui', 'Save')?>">
                                <span class="glyphicon glyphicon-floppy-disk"></span>
                            </button>
                            <button class="btnCancel btn btn-danger" title="<?=Yii::t('ui', 'Cancel')?>">
                                <span class="glyphicon glyphicon-ban-circle"></span>
                            </button>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script type="text/javascript">
    //inline-edit
    function editRow(elem){
        var curRow = $(elem).parents('tr');
        $(curRow).find(".hidden").toggleClass("hidden");

//        console.log($(curRow).find(".hidden"));
    }







/*
    $(".inline-edit").on('click', function(e){
        e.preventDefault();
        $(this).toggle();
        $(this).siblings('input').toggleClass('hidden');
    });
    var setValue = function(elem){
        $(elem).siblings('span').toggle().text($(elem).val());
        $(elem).toggleClass('hidden');
    }

    $(document).on('blur', "input.inline-input", function(){
        setValue(this);
    });
    $('input').on('keyDown', ".inline-input", function(e){
        debugger;
        e.preventDefault();
        if (e.keyCode == 13){
            setValue($(this));
        }
    });*/
</script>


