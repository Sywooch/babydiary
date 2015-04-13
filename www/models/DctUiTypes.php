<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_ui_types".
 *
 * @property integer $dct_ui_types_id
 * @property string $name
 *
 * @property DctUi[] $dctUis
 */
class DctUiTypes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_ui_types';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_ui_types_id' => Yii::t('ui', 'Dct Ui Types ID'),
            'name' => Yii::t('ui', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctUis()
    {
        return $this->hasMany(DctUi::className(), ['dct_ui_types_id' => 'dct_ui_types_id']);
    }
}
