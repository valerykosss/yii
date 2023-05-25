<?php

namespace app\modules\admin\controllers;

use app\models\Dresstype;
use frontend\modules\admin\models\Dresstype as DresstypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DresstypeController implements the CRUD actions for Dresstype model.
 */
class DresstypeController extends Controller
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
     * Lists all Dresstype models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DresstypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dresstype model.
     * @param int $DressTypeId Dress Type ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($DressTypeId)
    {
        return $this->render('view', [
            'model' => $this->findModel($DressTypeId),
        ]);
    }

    /**
     * Creates a new Dresstype model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dresstype();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'DressTypeId' => $model->DressTypeId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dresstype model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $DressTypeId Dress Type ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($DressTypeId)
    {
        $model = $this->findModel($DressTypeId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DressTypeId' => $model->DressTypeId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dresstype model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $DressTypeId Dress Type ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($DressTypeId)
    {
        $this->findModel($DressTypeId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dresstype model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $DressTypeId Dress Type ID
     * @return Dresstype the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($DressTypeId)
    {
        if (($model = Dresstype::findOne(['DressTypeId' => $DressTypeId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
