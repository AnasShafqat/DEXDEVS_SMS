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


    <!-- Batch form begin -->
    <h3><?= Html::encode('Create Batches') ?></h3>

    <?= $form->field($batch, 'batch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($batch, 'batch_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <!-- Section form begin -->
    <h3><?= Html::encode('Create Section') ?></h3>
    
    <?= $form->field($section, 'section_name')->dropDownList([ 'Morning' => 'Morning', 'Evening' => 'Evening', ], ['prompt' => 'Select Section']) ?>

    <?= $form->field($section, 'section_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>


    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    

    <?php ActiveForm::end(); ?>

</div>
