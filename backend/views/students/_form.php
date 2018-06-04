<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'std_course_id')->textInput() ?>

    <?= $form->field($model, 'std_batch_id')->textInput() ?>

    <?= $form->field($model, 'std_section_id')->textInput() ?>

    <?= $form->field($model, 'std_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_gaurdian_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_cnic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_gaurdian_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'std_qualification')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'std_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
