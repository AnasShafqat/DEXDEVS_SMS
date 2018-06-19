<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Batches */

$this->title = 'Create Batches';
$this->params['breadcrumbs'][] = ['label' => 'Batches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="batches-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'section' => $section,
        'student' => $student,
    ]) ?>

</div>
