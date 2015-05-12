<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_age".
 *
 * @property integer $dct_age_id
 * @property string $name
 * @property integer $type
 * @property integer $position
 *
 * @property ChildSolidFood[] $childSolidFoods
 * @property DctAgeLoc[] $dctAgeLocs
 */
class DctAge extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_age';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_age_id', 'type', 'position', 'enable'], 'required'],
            [['dct_age_id', 'type', 'position'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_age_id' => Yii::t('ui', 'Dct Age ID'),
            'type' => Yii::t('ui', 'Type'),
            'position' => Yii::t('ui', 'Position'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildSolidFoods()
    {
        return $this->hasMany(ChildSolidFood::className(), ['dct_age_id' => 'dct_age_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctAgeLocs()
    {
        return $this->hasMany(DctAgeLoc::className(), ['dct_age_id' => 'dct_age_id']);
    }
}
