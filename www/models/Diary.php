<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diary".
 *
 * @property integer $diary_id
 * @property integer $child_id
 * @property integer $dct_age_id
 *
 * @property DiaryCommon[] $diaryCommons
 * @property DiaryFeeding[] $diaryFeedings
 * @property DiaryNursing[] $diaryNursings
 */
class Diary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diary_id', 'child_id', 'dct_age_id'], 'required'],
            [['diary_id', 'child_id', 'dct_age_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'diary_id' => Yii::t('ui', 'Diary ID'),
            'child_id' => Yii::t('ui', 'Child ID'),
            'dct_age_id' => Yii::t('ui', 'Dct Age ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiaryCommons()
    {
        return $this->hasMany(DiaryCommon::className(), ['diary_id' => 'diary_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiaryFeedings()
    {
        return $this->hasMany(DiaryFeeding::className(), ['diary_id' => 'diary_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiaryNursings()
    {
        return $this->hasMany(DiaryNursing::className(), ['diary_id' => 'diary_id']);
    }
}
