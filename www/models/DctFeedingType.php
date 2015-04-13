<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_feeding_type".
 *
 * @property integer $dct_feeding_type_id
 * @property string $name
 *
 * @property DiaryFeeding[] $diaryFeedings
 */
class DctFeedingType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_feeding_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_feeding_type_id', 'name'], 'required'],
            [['dct_feeding_type_id'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_feeding_type_id' => Yii::t('ui', 'Dct Feeding Type ID'),
            'name' => Yii::t('ui', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiaryFeedings()
    {
        return $this->hasMany(DiaryFeeding::className(), ['dct_feeding_type_id' => 'dct_feeding_type_id']);
    }
}
