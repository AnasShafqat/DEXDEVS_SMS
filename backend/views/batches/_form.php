<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Courses;

/* @var $this yii\web\View */
/* @var $model backend\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'batch_course_id')->dropDownList(
    		ArrayHelper::map(Courses::find()->all(),'course_id','course_name'),
    		['prompt'=>'Select Course']
    )?>

    <?= $form->field($model, 'batch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batch_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>
    <!-- Section form begin -->
    <h3><?= Html::encode('Create Section') ?></h3>
    
    <?= $form->field($section, 'section_name')->dropDownList([ 'Morning' => 'Morning', 'Evening' => 'Evening', ], ['prompt' => 'Select Section']) ?>

    <?= $form->field($section, 'section_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <!-- Student form begin -->
    <h3><?= Html::encode('Create Student') ?></h3>

    <?= $form->field($student, 'std_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_gaurdian_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_photo')->fileInput() ?>

    <?= $form->field($student, 'std_cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_gaurdian_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($student, 'std_qualification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($student, 'std_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
