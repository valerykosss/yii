<?php

namespace app\modules\admin\controllers;

use app\models\Neckline;
use frontend\modules\admin\models\Neckline as NecklineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NecklineController implements the CRUD actions for Neckline model.
 */
class NecklineController extends Controller
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
     * Lists all Neckline models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new NecklineSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Neckline model.
     * @param int $NecklineId Neckline ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($NecklineId)
    {
        return $this->render('view', [
            'model' => $this->findModel($NecklineId),
        ]);
    }

    /**
     * Creates a new Neckline model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Neckline();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'NecklineId' => $model->NecklineId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Neckline model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $NecklineId Neckline ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($NecklineId)
    {
        $model = $this->findModel($NecklineId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'NecklineId' => $model->NecklineId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Neckline model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $NecklineId Neckline ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($NecklineId)
    {
        $this->findModel($NecklineId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Neckline model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $NecklineId Neckline ID
     * @return Neckline the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($NecklineId)
    {
        if (($model = Neckline::findOne(['NecklineId' => $NecklineId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
