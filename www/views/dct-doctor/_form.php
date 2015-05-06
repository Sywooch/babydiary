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
                <th>#</th>
                <th><?=Yii::t('ui', 'Language')?></th>
                <th><?=Yii::t('ui', 'Text')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($modelLoc as $index => $item) :?>
                <tr>
                    <td style="width: 5%"><?=$index + 1;?></td>
                    <td style="width: 10%"><?=$item->dctLanguage->locale;?></td>
                    <td record-id="<?=$item->dct_doctor_loc_id;?>">
                        <span class="inline-edit"><?=($item->text != "") ? $item->text : '&nbsp;';?></span>
                        <input class="hidden inline-input" type="text" value="<?=$item->text;?>" />
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


