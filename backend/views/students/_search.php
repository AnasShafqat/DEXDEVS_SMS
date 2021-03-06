<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\StudentsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'std_id') ?>

    <?= $form->field($model, 'std_course_id') ?>

    <?= $form->field($model, 'std_batch_id') ?>

    <?= $form->field($model, 'std_section_id') ?>

    <?= $form->field($model, 'std_name') ?>

    <?php // echo $form->field($model, 'std_gaurdian_name') ?>

    <?php // echo $form->field($model, 'std_email') ?>

    <?php // echo $form->field($model, 'std_photo') ?>

    <?php // echo $form->field($model, 'std_cnic') ?>

    <?php // echo $form->field($model, 'std_phone') ?>

    <?php // echo $form->field($model, 'std_gaurdian_phone') ?>

    <?php // echo $form->field($model, 'std_address') ?>

    <?php // echo $form->field($model, 'std_gender') ?>

    <?php // echo $form->field($model, 'std_qualification') ?>

    <?php // echo $form->field($model, 'std_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
