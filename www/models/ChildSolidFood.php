<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "child_solid_food".
 *
 * @property integer $child_solid_food_id
 * @property integer $child_id
 * @property integer $dct_age_id
 * @property integer $dct_solid_food_id
 *
 * @property Child $child
 * @property DctAge $dctAge
 * @property DctSolidFood $dctSolidFood
 */
class ChildSolidFood extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'child_solid_food';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['child_solid_food_id', 'child_id', 'dct_age_id', 'dct_solid_food_id'], 'required'],
            [['child_solid_food_id', 'child_id', 'dct_age_id', 'dct_solid_food_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'child_solid_food_id' => Yii::t('ui', 'Child Solid Food ID'),
            'child_id' => Yii::t('ui', 'Child ID'),
            'dct_age_id' => Yii::t('ui', 'Dct Age ID'),
            'dct_solid_food_id' => Yii::t('ui', 'Dct Solid Food ID'),
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
    public function getDctAge()
    {
        return $this->hasOne(DctAge::className(), ['dct_age_id' => 'dct_age_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctSolidFood()
    {
        return $this->hasOne(DctSolidFood::className(), ['dct_solid_food_id' => 'dct_solid_food_id']);
    }
}
