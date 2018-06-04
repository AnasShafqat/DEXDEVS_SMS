<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */

$this->title = $model->std_id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->std_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->std_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'std_id',
            'std_course_id',
            'std_batch_id',
            'std_section_id',
            'std_name',
            'std_gaurdian_name',
            'std_email:email',
            'std_cnic',
            'std_phone',
            'std_gaurdian_phone',
            'std_address',
            'std_gender',
            'std_qualification',
            'std_status',
        ],
    ]) ?>

</div>
