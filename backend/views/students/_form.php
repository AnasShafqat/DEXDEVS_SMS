<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Courses;
use backend\models\Batches;
use backend\models\Sections;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'std_course_id')->dropDownList(
                ArrayHelper::map(Courses::find()->all(), 'course_id', 'course_name'),
                [   
                    'prompt'=>'Select Course...',
                    'onchange'=>
                        '$.post("index.php?r=batches/lists&id='.'"+$(this).val(), function( data ){
                            $("select#students-std_batch_id").html(data);
                        });'
                ]); ?>
        </div>
        <div class="col-md-4">
           <?= $form->field($model, 'std_batch_id')->dropDownList(
                ArrayHelper::map(Batches::find(), 'batch_id', 'batch_name'),
                [
                    'prompt'=>'Select Batch...',
                    'onchange'=>
                        '$.post("index.php?r=sections/sec&id='.'"+$(this).val(), function( data ){
                            $("select#students-std_section_id").html(data);
                        });'
                ]); ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_section_id')->dropDownList(
                ArrayHelper::map(Sections::find()->all(), 'section_id', 'section_name'),['prompt'=>'Select Section...']
            ) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'std_name')->textInput(['maxlength' => true]) ?>  
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_gaurdian_name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">     
            <?= $form->field($model, 'std_email')->textInput(['maxlength' => true]) ?>    
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
           <?= $form->field($model, 'std_cnic')->widget(yii\widgets\MaskedInput::class, [
                'mask' => '99999-9999999-9',
                ]) ?>
        </div>
        <div class="col-md-4">
           <?= $form->field($model, 'std_phone')->widget(yii\widgets\MaskedInput::class, [
                'mask' => '+99-999-9999999',
                ]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_gaurdian_phone')->widget(yii\widgets\MaskedInput::class, [
                'mask' => '+99-999-9999999',
                ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">     
            <?= $form->field($model, 'std_photo')->fileInput() ?>    
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_address')->textInput(['maxlength' => true]) ?>  
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Gender...']) ?>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-4">     
            <?= $form->field($model, 'std_qualification')->textInput(['maxlength' => true]) ?>    
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status...']) ?>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>  
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
