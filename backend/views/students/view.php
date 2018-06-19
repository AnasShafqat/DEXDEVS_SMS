<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Students */

$this->title = $model->std_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Students'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$photoInfo = $model->PhotoInfo;
$photo = Html::img($photoInfo['url'],['alt'=>$photoInfo['alt']]);
$options = ['data-lightbox'=>'profile image','data-title'=>$photoInfo['alt']];
?>
<div class="students-view">

    <h1><?= Html::encode($model->std_name) ?>'s Profile</h1>

    <figure>
        <?= Html::a($photo,$photoInfo['url'],$options); ?>
        <!-- <figcaption>(Click to enlarge)</figcaption> -->
    </figure>
    <br>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->std_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->std_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
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
            'std_photo',
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
