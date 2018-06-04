<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FeeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'fee_id') ?>

    <?= $form->field($model, 'fee_std_id') ?>

    <?= $form->field($model, 'fee_amount_received') ?>

    <?= $form->field($model, 'fee_description') ?>

    <?= $form->field($model, 'fee_receiving_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
