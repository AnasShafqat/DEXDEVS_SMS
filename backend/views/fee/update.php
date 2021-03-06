<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Fee */

$this->title = 'Update Fee: ' . $model->fee_id;
$this->params['breadcrumbs'][] = ['label' => 'Fees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fee_id, 'url' => ['view', 'id' => $model->fee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
