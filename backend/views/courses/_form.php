<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Courses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'course_name')->dropDownList([ 'Web Development' => 'Web Development', 'Graphic Designing' => 'Graphic Designing', 'MS Office' => 'MS Office', 'Android Development' => 'Android Development', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'course_starting_date')->textInput() ?>

    <?= $form->field($model, 'course_ending_date')->textInput() ?>

    <?= $form->field($model, 'course_duration')->dropDownList([ '2 Months' => '2 Months', '3 Months' => '3 Months', '4 Months' => '4 Months', '5 Months' => '5 Months', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'course_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
