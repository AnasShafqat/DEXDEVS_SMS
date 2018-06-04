<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sections */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sections-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'section_course_id')->textInput() ?>

    <?= $form->field($model, 'section_batch_id')->textInput() ?>

    <?= $form->field($model, 'section_name')->dropDownList([ 'Morning' => 'Morning', 'Evening' => 'Evening', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'section_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
