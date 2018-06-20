<?php

namespace backend\controllers;

use Yii;
use backend\models\Batches;
use backend\models\Sections;
use backend\models\BatchesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BatchesController implements the CRUD actions for Batches model.
 */
class BatchesController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Batches models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BatchesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Batches model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Batches model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Batches();
        $section = new Sections();

        if ($model->load(Yii::$app->request->post()) && $section->load(Yii::$app->request->post())){
            $model->save();

            $section->section_course_id = $model->batch_course_id;
            $section->section_batch_id = $model->batch_id;
            $section->save();

            return $this->redirect(['view', 'id' => $model->batch_id]);
        }

        return $this->render('create', [
            'model' => $model,
            'section' => $section,
        ]);
    }

    /**
     * Updates an existing Batches model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->batch_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionLists($id){

        $countBatches = Batches::find()
            ->where(['batch_course_id' => $id])
            ->count();

        $batches = Batches::find()
            ->where(['batch_course_id' => $id])
            ->all();

        if($countBatches > 0){
            foreach ($batches as $batch) {
                echo "<option value='".$batch->batch_id."'>".$batch->batch_name."</option>";
            }
        }else{
            echo "<option> - </option>";
        }
    } 

    /**
     * Deletes an existing Batches model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Batches model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Batches the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Batches::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
