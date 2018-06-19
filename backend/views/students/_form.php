<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Courses;
use backend\models\Batches;
use backend\models\Sections;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'std_course_id')->dropDownList(
            ArrayHelper::map(Courses::find()->all(),'course_id','course_name'),
            ['prompt'=>'Select Course']
    )?>

    <?= $form->field($model, 'std_batch_id')->dropDownList(
            ArrayHelper::map(Batches::find()->all(),'batch_id','batch_name'),
            ['prompt'=>'Select Batch']
    )?>

    <?= $form->field($model, 'std_section_id')->dropDownList(
            ArrayHelper::map(Sections::find()->all(),'section_id','section_name'),
            ['prompt'=>'Select Section']
    )?>

    <?= $form->field($model, 'std_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_gaurdian_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_photo')->fileInput() ?>

    <?= $form->field($model, 'std_cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_gaurdian_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'std_qualification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
