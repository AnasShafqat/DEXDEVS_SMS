<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Courses;
use backend\models\Batches;
/* @var $this yii\web\View */
/* @var $model backend\models\Sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sections-form">

    <?php $form = ActiveForm::begin(); ?>

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
