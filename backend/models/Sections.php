<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sections".
 *
 * @property int $section_id
 * @property int $section_course_id
 * @property int $section_batch_id
 * @property string $section_name
 * @property string $section_status
 *
 * @property Batches $sectionBatch
 * @property Courses $sectionCourse
 * @property Students[] $students
 */
class Sections extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sections';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['section_course_id', 'section_batch_id', 'section_name', 'section_status'], 'required'],
            [['section_course_id', 'section_batch_id'], 'integer'],
            [['section_name', 'section_status'], 'string'],
            [['section_batch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Batches::className(), 'targetAttribute' => ['section_batch_id' => 'batch_id']],
            [['section_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['section_course_id' => 'course_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'section_id' => 'Section ID',
<<<<<<< HEAD
            'section_course_id' => 'Course Name',
            'section_batch_id' => 'Batch Name',
            'section_name' => 'Section Name',
            'section_status' => 'Section Status',
=======
            'section_course_id' => 'Courses',
            'section_batch_id' => 'Batches',
            'section_name' => 'Sections',
            'section_status' => 'Status',
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionBatch()
    {
        return $this->hasOne(Batches::className(), ['batch_id' => 'section_batch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionCourse()
    {
        return $this->hasOne(Courses::className(), ['course_id' => 'section_course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['std_section_id' => 'section_id']);
    }
}
