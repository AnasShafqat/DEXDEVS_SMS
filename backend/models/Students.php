<?php

namespace backend\models;

use Yii;
use yii\helpers\Url;

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
 * @property string $std_photo
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
            [['std_photo'],'safe'],
            [['std_gender', 'std_status'], 'string'],
            [['std_name', 'std_gaurdian_name'], 'string', 'max' => 32],
            [['std_email'], 'string', 'max' => 60],
            [['std_photo'], 'string', 'max' => 200],
            [['std_cnic', 'std_phone', 'std_gaurdian_phone'], 'string', 'max' => 15],
            [['std_address'], 'string', 'max' => 256],
            [['std_qualification'], 'string', 'max' => 128],
            [['std_section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sections::className(), 'targetAttribute' => ['std_section_id' => 'section_id']],
            [['std_course_id'], 'exist', 'skipOnError' => true, 'targetClass' => Courses::className(), 'targetAttribute' => ['std_course_id' => 'course_id']],
            [['std_batch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Batches::className(), 'targetAttribute' => ['std_batch_id' => 'batch_id']],
            [['std_photo'], 'image', 'extensions' => 'jpg',
                 'minWidth' => 100, 'maxWidth' => 200,
                 'minHeight' => 100, 'maxHeight' => 300,],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
<<<<<<< HEAD
            'std_id' => Yii::t('app', 'Std ID'),
            'std_course_id' => Yii::t('app', 'Course Name'),
            'std_batch_id' => Yii::t('app', 'Batch Name'),
            'std_section_id' => Yii::t('app', 'Section Name'),
            'std_name' => Yii::t('app', 'Std Name'),
            'std_gaurdian_name' => Yii::t('app', 'Std Gaurdian Name'),
            'std_email' => Yii::t('app', 'Std Email'),
            'std_photo' => Yii::t('app', 'Std Photo'),
            'std_cnic' => Yii::t('app', 'Std Cnic'),
            'std_phone' => Yii::t('app', 'Std Phone'),
            'std_gaurdian_phone' => Yii::t('app', 'Std Gaurdian Phone'),
            'std_address' => Yii::t('app', 'Std Address'),
            'std_gender' => Yii::t('app', 'Std Gender'),
            'std_qualification' => Yii::t('app', 'Std Qualification'),
            'std_status' => Yii::t('app', 'Std Status'),
=======
            'std_id' => 'Std ID',
            'std_course_id' => 'Course',
            'std_batch_id' => 'Batch',
            'std_section_id' => 'Section',
            'std_name' => 'Name',
            'std_gaurdian_name' => 'Gaurdian Name',
            'std_email' => 'Email',
            'std_cnic' => 'Cnic',
            'std_phone' => 'Phone',
            'std_gaurdian_phone' => 'Gaurdian Phone',
            'std_address' => 'Address',
            'std_gender' => 'Gender',
            'std_qualification' => 'Qualification',
            'std_status' => 'Status',
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
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

    public function getPhotoInfo(){
        $path = Url::to('@webroot/uploads/');
        $url = Url::to('@web/uploads/');
        $filename = strtolower($this->std_name).'_photo'.'.jpg';
        $alt = $this->std_name."'s Profile Picture";

        $imageInfo = ['alt'=>$alt];

        if(file_exists($path.$filename)){
            $imageInfo['url'] = $url.$filename; 
        }  else {
            $imageInfo['url'] = $url.'default.jpg';
        }
        return $imageInfo;
    }

}
