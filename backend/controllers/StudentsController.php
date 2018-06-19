<?php

namespace backend\controllers;

use Yii;
use backend\models\Students;
use backend\models\StudentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * StudentsController implements the CRUD actions for Students model.
 */
class StudentsController extends Controller
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
     * Lists all Students models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Students model.
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
     * Creates a new Students model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Students();

        if ($model->load(Yii::$app->request->post())) {
                //get the instance of the upload file
                $model->std_photo = UploadedFile::getInstance($model,'std_photo');
                if(!empty($model->std_photo)){
                    $imageName = $model->std_name.'_photo'; 
                    $model->std_photo->saveAs('uploads/'.$imageName.'.'.$model->std_photo->extension);
                    //save the path in the db column
                    $model->std_photo = 'uploads/'.$imageName.'.'.$model->std_photo->extension;
                } else {
                   $model->std_photo = '0'; 
                }
            $model->save();
            return $this->redirect(['view', 'id' => $model->std_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Students model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $student = Yii::$app->db->createCommand("SELECT * FROM students where std_id = $id")->queryAll();
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
                //get the instance of the upload file
                $model->std_photo = UploadedFile::getInstance($model,'std_photo');
                if(!empty($model->std_photo)){
                    $imageName = $model->std_name.'_photo'; 
                    $model->std_photo->saveAs('uploads/'.$imageName.'.'.$model->std_photo->extension);
                    //save the path in the db column
                    $model->std_photo = 'uploads/'.$imageName.'.'.$model->std_photo->extension;
                } else {
                   $model->std_photo = $student[0]['std_photo']; 
                }
            $model->save();
            return $this->redirect(['view', 'id' => $model->std_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Students model.
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
     * Finds the Students model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Students the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Students::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
