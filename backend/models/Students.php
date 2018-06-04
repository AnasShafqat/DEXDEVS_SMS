<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $std_id
 * @property int $std_course_id
 * @property int $std_batch_id
 * @property int $std_section_id
 * @property string $std_name
 * @property string $std_gaurdian_name
 * @property string $std_email
 * @property string $std_cnic
 * @property string $std_phone
 * @property string $std_gaurdian_phone
 * @property string $std_address
 * @property string $std_gender
 * @property string $std_qualification
 * @property string $std_status
 *
 * @property Fee[] $fees
 * @property Sections $stdSection
 * @property Courses $stdCourse
 * @property Batches $stdBatch
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['std_course_id', 'std_batch_id', 'std_section_id', 'std_name', 'std_gaurdian_name', 'std_email', 'std_cnic', 'std_phone', 'std_gaurdian_phone', 'std_address', 'std_gender', 'std_qualification', 'std_status'], 'required'],
            [['std_course_id', 'std_batch_id', 'std_section_id'], 'integer'],
            [['std_gender', 'std_status'], 'string'],
            [['std_name', 'std_gaurdian_name'], 'string', 'max' => 32],
            [['std_email'], 'string', 'max' => 60],
            [['std_cnic', 'std_phone', 'std_gaurdian_phone'], 'string', 'max' => 15],
            [['std_address'], 'string', 'max' => 256],
            [['std_qualification'], 'string', 'max' => 128],
            [['std_section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sections::className(), 'targetAttribute' => ['std_section_id' => 'section_id']],
            [['std_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['std_course_id' => 'course_id']],
            [['std_batch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Batches::className(), 'targetAttribute' => ['std_batch_id' => 'batch_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'std_id' => 'Std ID',
            'std_course_id' => 'Std Course ID',
            'std_batch_id' => 'Std Batch ID',
            'std_section_id' => 'Std Section ID',
            'std_name' => 'Std Name',
            'std_gaurdian_name' => 'Std Gaurdian Name',
            'std_email' => 'Std Email',
            'std_cnic' => 'Std Cnic',
            'std_phone' => 'Std Phone',
            'std_gaurdian_phone' => 'Std Gaurdian Phone',
            'std_address' => 'Std Address',
            'std_gender' => 'Std Gender',
            'std_qualification' => 'Std Qualification',
            'std_status' => 'Std Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFees()
    {
        return $this->hasMany(Fee::className(), ['fee_std_id' => 'std_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStdSection()
    {
        return $this->hasOne(Sections::className(), ['section_id' => 'std_section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStdCourse()
    {
        return $this->hasOne(Courses::className(), ['course_id' => 'std_course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStdBatch()
    {
        return $this->hasOne(Batches::className(), ['batch_id' => 'std_batch_id']);
    }
}
