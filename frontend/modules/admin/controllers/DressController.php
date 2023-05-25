<?php

namespace app\modules\admin\controllers;

use app\models\Dress;
use frontend\modules\admin\models\Dress as DressSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DressController implements the CRUD actions for Dress model.
 */
class DressController extends Controller
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
     * Lists all Dress models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DressSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Dress model.
     * @param int $DressId Dress ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($DressId)
    {
        return $this->render('view', [
            'model' => $this->findModel($DressId),
        ]);
    }

    /**
     * Creates a new Dress model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Dress();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'DressId' => $model->DressId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Dress model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $DressId Dress ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($DressId)
    {
        $model = $this->findModel($DressId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'DressId' => $model->DressId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Dress model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $DressId Dress ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($DressId)
    {
        $this->findModel($DressId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Dress model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $DressId Dress ID
     * @return Dress the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($DressId)
    {
        if (($model = Dress::findOne(['DressId' => $DressId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
