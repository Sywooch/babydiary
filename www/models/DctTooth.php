<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_tooth".
 *
 * @property integer $dct_tooth_id
 * @property integer $position
 * @property integer $enable
 *
 * @property ChildTooth[] $childTeeth
 * @property DctToothLoc[] $dctToothLocs
 */
class DctTooth extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_tooth';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_tooth_id', 'position'], 'required'],
            [['dct_tooth_id', 'position', 'enable'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_tooth_id' => Yii::t('ui', 'Dct Tooth ID'),
            'position' => Yii::t('ui', 'Position'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildTeeth()
    {
        return $this->hasMany(ChildTooth::className(), ['dct_tooth_id' => 'dct_tooth_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctToothLocs()
    {
        return $this->hasMany(DctToothLoc::className(), ['dct_tooth_id' => 'dct_tooth_id']);
    }
}
