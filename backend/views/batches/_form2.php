<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Courses;

/* @var $this yii\web\View */
/* @var $model backend\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>

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
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
