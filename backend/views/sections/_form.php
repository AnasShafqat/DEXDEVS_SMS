<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use yii\helpers\ArrayHelper;
use backend\models\Courses;
use backend\models\Batches;

=======
use backend\models\Courses;
use backend\models\Batches;
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
/* @var $this yii\web\View */
/* @var $model backend\models\Sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sections-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'section_course_id')->dropDownList(
    		ArrayHelper::map(Courses::find()->all(),'course_id','course_name'),
    		['prompt'=>'Select Course']
    )?>

    <?= $form->field($model, 'section_batch_id')->dropDownList(
    		ArrayHelper::map(Batches::find()->all(),'batch_id','batch_name'),
    		['prompt'=>'Select Batch']
    )?>

    <?= $form->field($model, 'section_name')->dropDownList([ 'Morning' => 'Morning', 'Evening' => 'Evening', ], ['prompt' => 'Select Section']) ?>

    <?= $form->field($model, 'section_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
=======
    <div class="row">
    	<div class="col-md-4">
    		<?= $form->field($model, 'section_course_id')->dropDownList(
	        	ArrayHelper::map(Courses::find()->all(), 'course_id', 'course_name'),['prompt'=>'Select Course...']
		    ) ?>
    	</div>
    	<div class="col-md-4">
    		<?= $form->field($model, 'section_batch_id')->dropDownList(
	        	ArrayHelper::map(Batches::find()->all(), 'batch_id', 'batch_name'),['prompt'=>'Select Batch...']
		    ) ?>
    	</div>
    	<div class="col-md-4">
    		<?= $form->field($model, 'section_name')->dropDownList([ 'Morning' => 'Morning', 'Evening' => 'Evening', ], ['prompt' => 'Section Name...']) ?>
    	</div>
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
    </div>

    <div class="row">
    	<div class="col-md-4">
    		<?= $form->field($model, 'section_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Status...']) ?>    		
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
    </div>  

    <?php ActiveForm::end(); ?>

</div>
