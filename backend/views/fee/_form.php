<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Fee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fee_std_id')->textInput() ?>

    <?= $form->field($model, 'fee_amount_received')->textInput() ?>

    <?= $form->field($model, 'fee_description')->dropDownList([ 'Registration' => 'Registration', '1st Installment' => '1st Installment', '2nd Installment' => '2nd Installment', '3rd Installment' => '3rd Installment', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'fee_receiving_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
