<?php

namespace app\modules\admin\controllers;

use app\models\SkirtLength;
use frontend\modules\admin\models\SkirtLength as SkirtLengthSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkirtlengthController implements the CRUD actions for SkirtLength model.
 */
class SkirtlengthController extends Controller
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
     * Lists all SkirtLength models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SkirtLengthSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SkirtLength model.
     * @param int $SkirtLengthId Skirt Length ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($SkirtLengthId)
    {
        return $this->render('view', [
            'model' => $this->findModel($SkirtLengthId),
        ]);
    }

    /**
     * Creates a new SkirtLength model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SkirtLength();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'SkirtLengthId' => $model->SkirtLengthId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SkirtLength model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $SkirtLengthId Skirt Length ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($SkirtLengthId)
    {
        $model = $this->findModel($SkirtLengthId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'SkirtLengthId' => $model->SkirtLengthId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SkirtLength model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $SkirtLengthId Skirt Length ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($SkirtLengthId)
    {
        $this->findModel($SkirtLengthId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SkirtLength model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $SkirtLengthId Skirt Length ID
     * @return SkirtLength the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($SkirtLengthId)
    {
        if (($model = SkirtLength::findOne(['SkirtLengthId' => $SkirtLengthId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
