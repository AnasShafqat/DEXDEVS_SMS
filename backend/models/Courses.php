<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $course_id
 * @property string $course_name
 * @property string $course_starting_date
 * @property string $course_ending_date
 * @property string $course_duration
 * @property string $course_status
 *
 * @property Batches[] $batches
 * @property Sections[] $sections
 * @property Students[] $students
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_name', 'course_starting_date', 'course_ending_date', 'course_duration', 'course_status'], 'required'],
            [['course_name', 'course_duration', 'course_status'], 'string'],
            [['course_starting_date', 'course_ending_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'course_name' => 'Course Name',
            'course_starting_date' => 'Course Starting Date',
            'course_ending_date' => 'Course Ending Date',
            'course_duration' => 'Course Duration',
            'course_status' => 'Course Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBatches()
    {
        return $this->hasMany(Batches::className(), ['batch_course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Sections::className(), ['section_course_id' => 'course_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Students::className(), ['std_course_id' => 'course_id']);
    }
}
