<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_solid_food".
 *
 * @property integer $dct_solid_food_id
 * @property integer $position
 * @property integer $enable
 *
 * @property ChildSolidFood[] $childSolidFoods
 * @property DctSolidFoodLoc[] $dctSolidFoodLocs
 */
class DctSolidFood extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_solid_food';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_solid_food_id', 'position'], 'required'],
            [['dct_solid_food_id', 'position', 'enable'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_solid_food_id' => Yii::t('ui', 'Dct Solid Food ID'),
            'position' => Yii::t('ui', 'Position'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildSolidFoods()
    {
        return $this->hasMany(ChildSolidFood::className(), ['dct_solid_food_id' => 'dct_solid_food_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctSolidFoodLocs()
    {
        return $this->hasMany(DctSolidFoodLoc::className(), ['dct_solid_food_id' => 'dct_solid_food_id']);
    }
}
