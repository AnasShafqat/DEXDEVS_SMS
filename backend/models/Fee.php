<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fee".
 *
 * @property int $fee_id
 * @property int $fee_std_id
 * @property int $fee_amount_received
 * @property string $fee_description
 * @property string $fee_receiving_date
 *
 * @property Students $feeStd
 */
class Fee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fee_std_id', 'fee_amount_received', 'fee_description', 'fee_receiving_date'], 'required'],
            [['fee_std_id', 'fee_amount_received'], 'integer'],
            [['fee_description'], 'string'],
            [['fee_receiving_date'], 'safe'],
            [['fee_std_id'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['fee_std_id' => 'std_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fee_id' => 'Fee ID',
            'fee_std_id' => 'Fee Std ID',
            'fee_amount_received' => 'Fee Amount Received',
            'fee_description' => 'Fee Description',
            'fee_receiving_date' => 'Fee Receiving Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFeeStd()
    {
        return $this->hasOne(Students::className(), ['std_id' => 'fee_std_id']);
    }
}
