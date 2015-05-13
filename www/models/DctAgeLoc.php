<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_age_loc".
 *
 * @property integer $dct_age_loc_id
 * @property integer $dct_age_id
 * @property integer $dct_language_id
 * @property string $text
 *
 * @property DctLanguage $dctLanguage
 * @property DctAge $dctAge
 */
class DctAgeLoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_age_loc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_age_id', 'dct_language_id', 'text'], 'required'],
            [['dct_age_id', 'dct_language_id'], 'integer'],
            [['text'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_age_loc_id' => Yii::t('ui', 'Dct Age Loc ID'),
            'dct_age_id' => Yii::t('ui', 'Dct Age ID'),
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
            'text' => Yii::t('ui', 'Text'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctLanguage()
    {
        return $this->hasOne(DctLanguage::className(), ['dct_language_id' => 'dct_language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctAge()
    {
        return $this->hasOne(DctAge::className(), ['dct_age_id' => 'dct_age_id']);
    }

    public function getLocalizationData($id){
        $data = DctAgeLoc::find()->with('dctLanguage')->where(['dct_age_id' => $id])->asArray()->all();
        $modelLoc = [];
        foreach($data as $age){
            $modelLoc[$age['dct_language_id']] = ['text' => $age['text'], 'id' => $age['dct_age_loc_id']];
        }

        return $modelLoc;
    }

    public function saveLocalizationData($model, $params, $languageCount){
        for($i = 0; $i < $languageCount; $i++){
            if ($model->dct_age_id > -1){
                $childModel = new DctAgeLoc();
                $childModel->dct_age_id = $model->dct_age_id;
                $childModel->dct_language_id = $params[$i]['dct_language_id'];
            } else {
                $childModel = DctAgeLoc::findOne($params[$i]['dct_age_loc_id']);
            }
            $childModel->text = (!empty($params[$i]['text'])) ? $params[$i]['text'] : '';
            $childModel->save();
        }
    }
}
