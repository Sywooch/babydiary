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
            [['dct_age_id', 'name', 'type', 'position'], 'required'],
            [['dct_age_id', 'type', 'position'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_age_id' => Yii::t('ui', 'Dct Age ID'),
            'name' => Yii::t('ui', 'Name'),
            'type' => Yii::t('ui', 'Type'),
            'position' => Yii::t('ui', 'Position'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildSolidFoods()
    {
        return $this->hasMany(ChildSolidFood::className(), ['dct_age_id' => 'dct_age_id']);
    }
}
