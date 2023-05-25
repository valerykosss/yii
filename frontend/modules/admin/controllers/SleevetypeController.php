<?php

namespace app\modules\admin\controllers;

use app\models\Sleevetype;
use frontend\modules\admin\models\Sleevetype as SleevetypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SleevetypeController implements the CRUD actions for Sleevetype model.
 */
class SleevetypeController extends Controller
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
     * Lists all Sleevetype models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SleevetypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sleevetype model.
     * @param int $SleeveTypeId Sleeve Type ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($SleeveTypeId)
    {
        return $this->render('view', [
            'model' => $this->findModel($SleeveTypeId),
        ]);
    }

    /**
     * Creates a new Sleevetype model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Sleevetype();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'SleeveTypeId' => $model->SleeveTypeId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Sleevetype model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $SleeveTypeId Sleeve Type ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($SleeveTypeId)
    {
        $model = $this->findModel($SleeveTypeId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'SleeveTypeId' => $model->SleeveTypeId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Sleevetype model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $SleeveTypeId Sleeve Type ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($SleeveTypeId)
    {
        $this->findModel($SleeveTypeId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sleevetype model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $SleeveTypeId Sleeve Type ID
     * @return Sleevetype the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($SleeveTypeId)
    {
        if (($model = Sleevetype::findOne(['SleeveTypeId' => $SleeveTypeId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
