<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Fee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fee-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'fee_std_id')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'fee_amount_received')->textInput() ?>
        </div>
        <div class="col-md-4">     
            <?= $form->field($model, 'fee_description')->dropDownList([ 'Registration' => 'Registration', '1st Installment' => '1st Installment', '2nd Installment' => '2nd Installment', '3rd Installment' => '3rd Installment', ], ['prompt' => 'Description...']) ?>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?= $form->field($model, 'fee_receiving_date')->textInput() ?>
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
