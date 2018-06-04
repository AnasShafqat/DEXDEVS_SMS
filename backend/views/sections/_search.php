<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SectionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sections-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'section_id') ?>

    <?= $form->field($model, 'section_course_id') ?>

    <?= $form->field($model, 'section_batch_id') ?>

    <?= $form->field($model, 'section_name') ?>

    <?= $form->field($model, 'section_status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
