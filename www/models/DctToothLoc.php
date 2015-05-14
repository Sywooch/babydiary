<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_tooth_loc".
 *
 * @property integer $dtc_tooth_loc_id
 * @property integer $dct_tooth_id
 * @property string $text
 * @property integer $dct_language_id
 *
 * @property DctTooth $dctTooth
 * @property DctLanguage $dctLanguage
 */
class DctToothLoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_tooth_loc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_tooth_id', 'text', 'dct_language_id'], 'required'],
            [['dct_tooth_id', 'dct_language_id'], 'integer'],
            [['text'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dtc_tooth_loc_id' => Yii::t('ui', 'Dtc Tooth Loc ID'),
            'dct_tooth_id' => Yii::t('ui', 'Dct Tooth ID'),
            'text' => Yii::t('ui', 'Text'),
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctTooth()
    {
        return $this->hasOne(DctTooth::className(), ['dct_tooth_id' => 'dct_tooth_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctLanguage()
    {
        return $this->hasOne(DctLanguage::className(), ['dct_language_id' => 'dct_language_id']);
    }

    public function getLocalizationData($id){
        $data = DctToothLoc::find()->with('dctLanguage')->where(['dct_tooth_id' => $id])->asArray()->all();
        $modelLoc = [];
        foreach($data as $tooth){
            $modelLoc[$tooth['dct_language_id']] = ['text' => $tooth['text'], 'id' => $tooth['dct_tooth_id']];
        }

        return $modelLoc;
    }

    public function saveLocalizationData($model, $params, $languageCount){
        for($i = 0; $i < $languageCount; $i++){
            if ($model->dct_tooth_id > -1){
                $childModel = new DctToothLoc();
                $childModel->dct_tooth_id = $model->dct_tooth_id;
                $childModel->dct_language_id = $params[$i]['dct_language_id'];
            } else {
                $childModel = DctToothLoc::findOne($params[$i]['dct_tooth_loc_id']);
            }
            $childModel->text = (!empty($params[$i]['text'])) ? $params[$i]['text'] : '';
            $childModel->save();
        }
    }
}
