<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sections */

$this->title = 'Update Sections: ' . $model->section_id;
$this->params['breadcrumbs'][] = ['label' => 'Sections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->section_id, 'url' => ['view', 'id' => $model->section_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sections-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
