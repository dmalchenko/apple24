<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $r_id
 * @property string $name
 * @property string $tel
 * @property string $review
 * @property integer $review_type
 * @property integer $created_at
 * @property integer $updated_at
 */
class Reviews extends \yii\db\ActiveRecord
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
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'tel', 'review'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['name', 'tel', 'review'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_id' => 'R ID',
            'name' => 'Name',
            'tel' => 'Tel',
            'review' => 'Review',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
