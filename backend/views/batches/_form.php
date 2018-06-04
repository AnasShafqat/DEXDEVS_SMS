<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Batches */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="batches-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'batch_course_id')->textInput() ?>

    <?= $form->field($model, 'batch_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'batch_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
