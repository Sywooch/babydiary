<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_progress".
 *
 * @property integer $dct_progress_id
 * @property integer $position
 * @property integer $enable
 *
 * @property ChildProgress[] $childProgresses
 * @property DctProgressLoc[] $dctProgressLocs
 */
class DctProgress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_progress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_progress_id', 'position'], 'required'],
            [['dct_progress_id', 'position', 'enable'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_progress_id' => Yii::t('ui', 'Dct Progress ID'),
            'position' => Yii::t('ui', 'Position'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildProgresses()
    {
        return $this->hasMany(ChildProgress::className(), ['dct_progress_id' => 'dct_progress_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctProgressLocs()
    {
        return $this->hasMany(DctProgressLoc::className(), ['dct_progress_id' => 'dct_progress_id']);
    }
}
