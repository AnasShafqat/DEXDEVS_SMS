<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'course_name')->dropDownList([ 'Web Development' => 'Web Development', 'Graphic Designing' => 'Graphic Designing', 'MS Office' => 'MS Office', 'Android Development' => 'Android Development', ], ['prompt' => 'Select Course']) ?>

    <?= $form->field($model, 'course_starting_date')->textInput() ?>
=======
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'course_name')->dropDownList([ 'Web Development' => 'Web Development', 'Graphic Designing' => 'Graphic Designing', 'MS Office' => 'MS Office', 'Android Development' => 'Android Development', ], ['prompt' => 'Select Course']) ?>        
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'course_starting_date')->textInput() ?>            
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'course_ending_date')->textInput() ?>        
        </div>
    </div>
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'course_duration')->dropDownList([ '2 Months' => '2 Months', '3 Months' => '3 Months', '4 Months' => '4 Months', '5 Months' => '5 Months', ], ['prompt' => 'Select Course Duration']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'course_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Select Status']) ?>
        </div>
        <div class="col-md-4">
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

<<<<<<< HEAD
    <?= $form->field($model, 'course_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <!-- Batch form begin -->
    <h3><?= Html::encode('Create Batches') ?></h3>

    <?= $form->field($batch, 'batch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($batch, 'batch_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

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
=======
    
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87

    

    <?php ActiveForm::end(); ?>

</div>
