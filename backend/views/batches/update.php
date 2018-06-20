<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Batches */

$this->title = 'Update Batches: ' . $model->batch_id;
$this->params['breadcrumbs'][] = ['label' => 'Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->batch_id, 'url' => ['view', 'id' => $model->batch_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="batches-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form2', [
        'model' => $model,
    ]) ?>

</div>
