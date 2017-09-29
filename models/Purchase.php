<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "purchase".
 *
 * @property integer $p_id
 * @property string $name
 * @property string $tel
 * @property string $prod
 * @property integer $created_at
 * @property integer $updated_at
 */
class Purchase extends \yii\db\ActiveRecord
{
	public function behaviors()
	{
		return [
			TimestampBehavior::className(),
		];
	}

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'purchase';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'tel', 'prod'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'tel', 'prod'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'name' => 'Name',
            'tel' => 'Tel',
            'prod' => 'Prod',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
