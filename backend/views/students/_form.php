<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use yii\helpers\ArrayHelper;
=======
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
use backend\models\Courses;
use backend\models\Batches;
use backend\models\Sections;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
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
=======
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'std_course_id')->dropDownList(
                ArrayHelper::map(Courses::find()->all(), 'course_id', 'course_name'),['prompt'=>'Select Course...']
            ) ?>
        </div>
        <div class="col-md-4">
           <?= $form->field($model, 'std_batch_id')->dropDownList(
                ArrayHelper::map(Batches::find()->all(), 'batch_id', 'batch_name'),['prompt'=>'Select Batch...']
            ) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_section_id')->dropDownList(
                ArrayHelper::map(Sections::find()->all(), 'section_id', 'section_name'),['prompt'=>'Select Course...']
            ) ?>
        </div>
    </div>
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87

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
            <?= $form->field($model, 'std_address')->textInput(['maxlength' => true]) ?>  
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'std_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Gender...']) ?>
        </div>
        <div class="col-md-4">     
            <?= $form->field($model, 'std_qualification')->textInput(['maxlength' => true]) ?>    
        </div>
    </div>

<<<<<<< HEAD
    <?= $form->field($model, 'std_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
=======
    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'std_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status...']) ?>  
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>  
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
    </div>

        

    <?php ActiveForm::end(); ?>

</div>
