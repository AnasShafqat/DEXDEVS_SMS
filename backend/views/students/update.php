<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */

$this->title = 'Update Students: ' . $model->std_id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->std_id, 'url' => ['view', 'id' => $model->std_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="students-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
