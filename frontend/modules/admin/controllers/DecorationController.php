<?php

namespace app\modules\admin\controllers;

use app\models\Decoration;
use frontend\modules\admin\models\Decoration as DecorationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DecorationController implements the CRUD actions for Decoration model.
 */
class DecorationController extends Controller
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
     * Lists all Decoration models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DecorationSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Decoration model.
     * @param int $DecorationId Decoration ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($DecorationId)
    {
        return $this->render('view', [
            'model' => $this->findModel($DecorationId),
        ]);
    }

    /**
     * Creates a new Decoration model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Decoration();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'DecorationId' => $model->DecorationId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Decoration model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $DecorationId Decoration ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($DecorationId)
    {
        $model = $this->findModel($DecorationId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DecorationId' => $model->DecorationId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Decoration model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $DecorationId Decoration ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($DecorationId)
    {
        $this->findModel($DecorationId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Decoration model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $DecorationId Decoration ID
     * @return Decoration the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($DecorationId)
    {
        if (($model = Decoration::findOne(['DecorationId' => $DecorationId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
