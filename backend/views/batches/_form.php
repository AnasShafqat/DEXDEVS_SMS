<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use yii\helpers\ArrayHelper;
=======
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
use backend\models\Courses;

/* @var $this yii\web\View */
/* @var $model backend\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'batch_course_id')->dropDownList(
    		ArrayHelper::map(Courses::find()->all(),'course_id','course_name'),
    		['prompt'=>'Select Course']
    )?>
=======
    <div class="row">
    	<div class="col-md-4">
	    	<?= $form->field($model, 'batch_course_id')->dropDownList(
	        	ArrayHelper::map(Courses::find()->all(), 'course_id', 'course_name'),['prompt'=>'Select Course']
		    ) ?>
    	</div>
    	<div class="col-md-4">
    		<?= $form->field($model, 'batch_name')->textInput(['maxlength' => true]) ?>
    	</div>
    	<div class="col-md-4">
    		<?= $form->field($model, 'batch_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => '']) ?>
    	</div>
    </div>
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87

    <div class="row">
    	<div class="col-md-4">
    		<div class="form-group">
        		<?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    		</div>
    	</div>
    	<div class="col-md-4">

<<<<<<< HEAD
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
=======
    	</div>
    	<div class="col-md-4">
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87

    	</div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
