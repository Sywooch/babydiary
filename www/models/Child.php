<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "child".
 *
 * @property integer $child_id
 * @property integer $dct_user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $surname
 * @property string $birth_date
 * @property string $time_birth
 * @property string $birth_place
 * @property integer $sex
 *
 * @property ChildProgress[] $childProgresses
 * @property ChildSolidFood[] $childSolidFoods
 * @property ChildTooth[] $childTeeth
 */
class Child extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'child';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['child_id', 'user_id', 'first_name', 'last_name', 'surname', 'birth_date', 'time_birth', 'birth_place', 'sex'], 'required'],
            [['child_id', 'user_id', 'sex'], 'integer'],
            [['birth_date', 'time_birth'], 'safe'],
            [['first_name', 'last_name', 'surname'], 'string', 'max' => 100],
            [['birth_place'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'child_id' => Yii::t('ui', 'Child ID'),
            'user_id' => Yii::t('ui', 'User ID'),
            'first_name' => Yii::t('ui', 'First Name'),
            'last_name' => Yii::t('ui', 'Last Name'),
            'surname' => Yii::t('ui', 'Surname'),
            'birth_date' => Yii::t('ui', 'Birth Date'),
            'time_birth' => Yii::t('ui', 'Time Birth'),
            'birth_place' => Yii::t('ui', 'Birth Place'),
            'sex' => Yii::t('ui', 'Sex'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildProgresses()
    {
        return $this->hasMany(ChildProgress::className(), ['child_id' => 'child_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildSolidFoods()
    {
        return $this->hasMany(ChildSolidFood::className(), ['child_id' => 'child_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChildTeeth()
    {
        return $this->hasMany(ChildTooth::className(), ['child_id' => 'child_id']);
    }

    public function getDctUser()
    {
        return $this->hasOne(DctUser::className(), ['user_id' => 'user_id']);
    }
}
