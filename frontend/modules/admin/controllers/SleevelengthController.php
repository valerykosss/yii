<?php

namespace app\modules\admin\controllers;

use app\models\Sleevelength;
use frontend\modules\admin\models\Sleevelength as SleevelengthSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SleevelengthController implements the CRUD actions for Sleevelength model.
 */
class SleevelengthController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Sleevelength models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SleevelengthSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sleevelength model.
     * @param int $SleeveLengthId Sleeve Length ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($SleeveLengthId)
    {
        return $this->render('view', [
            'model' => $this->findModel($SleeveLengthId),
        ]);
    }

    /**
     * Creates a new Sleevelength model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Sleevelength();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'SleeveLengthId' => $model->SleeveLengthId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sleevelength model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $SleeveLengthId Sleeve Length ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($SleeveLengthId)
    {
        $model = $this->findModel($SleeveLengthId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'SleeveLengthId' => $model->SleeveLengthId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sleevelength model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $SleeveLengthId Sleeve Length ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($SleeveLengthId)
    {
        $this->findModel($SleeveLengthId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sleevelength model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $SleeveLengthId Sleeve Length ID
     * @return Sleevelength the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($SleeveLengthId)
    {
        if (($model = Sleevelength::findOne(['SleeveLengthId' => $SleeveLengthId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
