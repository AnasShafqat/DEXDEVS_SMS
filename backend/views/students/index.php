<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Students');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Students'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            //'std_id',
            [
                'attribute' => 'std_course_id',
                'value' => 'stdCourse.course_name',
            ],
            [
                'attribute' => 'std_batch_id',
                'value' => 'stdBatch.batch_name',
            ],
            [
                'attribute' => 'std_section_id',
                'value' => 'stdSection.section_name',
            ],
            'std_name',
            //'std_gaurdian_name',
            'std_email:email',
            //'std_photo',
=======
        //    'std_id',
        //    'std_batch_id',
        //    'std_section_id',
            'std_name',    
            'std_course_id',
            //'std_gaurdian_name',
            //'std_email:email',
>>>>>>> e93bc8a7a355a2e014afa8bf66e334bbe8585b87
            'std_cnic',
            'std_phone',
            //'std_gaurdian_phone',
            //'std_address',
            //'std_gender',
            //'std_qualification',
            //'std_status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
