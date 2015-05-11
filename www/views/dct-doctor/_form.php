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

    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%">#</th>
                <th style="width: 30%"><?=Yii::t('ui', 'Language')?></th>
                <th><?=Yii::t('ui', 'Text')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($languages as $index => $lang) :?>
                <tr>
                    <td>
                        <?=$index + 1;?><?=Html::input('hidden', $index . '[dct_doctor_loc_id]', ($modelLoc[$lang['id']]) ? $modelLoc[$lang['id']]['id'] : '');?>
                    </td>
                    <td>
                        <span class="dct_language_id"><?=$lang['name'];?> (<?=$lang['locale'];?>)</span>
                        <?=Html::input('hidden', $index . '[dct_language_id]', $lang['id']);?>
                    </td>
                    <td>
                        <?=Html::input('text', $index . '[text]', ($modelLoc[$lang['id']]) ? $modelLoc[$lang['id']]['text'] : '', ['class' => 'form-control']);?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="text-right">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ui', 'Create') : Yii::t('ui', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
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


