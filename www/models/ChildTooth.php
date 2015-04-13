<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "child_tooth".
 *
 * @property integer $child_tooth_id
 * @property integer $child_id
 * @property integer $dct_tooth_id
 * @property integer $tooth_order
 * @property string $tooth_date
 * @property integer $tooth_age_months
 * @property integer $tooth_age_days
 * @property string $notes
 *
 * @property Child $child
 * @property DctTooth $dctTooth
 */
class ChildTooth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'child_tooth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['child_tooth_id', 'child_id', 'dct_tooth_id', 'tooth_order', 'tooth_date', 'tooth_age_months', 'tooth_age_days'], 'required'],
            [['child_tooth_id', 'child_id', 'dct_tooth_id', 'tooth_order', 'tooth_age_months', 'tooth_age_days'], 'integer'],
            [['notes'], 'string'],
            [['tooth_date'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'child_tooth_id' => Yii::t('ui', 'Child Tooth ID'),
            'child_id' => Yii::t('ui', 'Child ID'),
            'dct_tooth_id' => Yii::t('ui', 'Dct Tooth ID'),
            'tooth_order' => Yii::t('ui', 'Tooth Order'),
            'tooth_date' => Yii::t('ui', 'Tooth Date'),
            'tooth_age_months' => Yii::t('ui', 'Tooth Age Months'),
            'tooth_age_days' => Yii::t('ui', 'Tooth Age Days'),
            'notes' => Yii::t('ui', 'Notes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChild()
    {
        return $this->hasOne(Child::className(), ['child_id' => 'child_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctTooth()
    {
        return $this->hasOne(DctTooth::className(), ['dct_tooth_id' => 'dct_tooth_id']);
    }
}
