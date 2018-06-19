<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "batches".
 *
 * @property int $batch_id
 * @property int $batch_course_id
 * @property string $batch_name
 * @property string $batch_status
 *
 * @property Courses $batchCourse
 * @property Sections[] $sections
 * @property Students[] $students
 */
class Batches extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'batches';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['batch_course_id', 'batch_name', 'batch_status'], 'required'],
            [['batch_course_id'], 'integer'],
            [['batch_status'], 'string'],
            [['batch_name'], 'string', 'max' => 32],
            [['batch_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['batch_course_id' => 'course_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'batch_id' => 'Batch ID',
<<<<<<< HEAD
            'batch_course_id' => 'Course Name',
=======
            'batch_course_id' => 'Courses',
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
            'batch_name' => 'Batch Name',
            'batch_status' => 'Batch Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatchCourse()
    {
        return $this->hasOne(Courses::className(), ['course_id' => 'batch_course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Sections::className(), ['section_batch_id' => 'batch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['std_batch_id' => 'batch_id']);
    }
}
