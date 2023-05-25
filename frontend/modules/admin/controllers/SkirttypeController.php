<?php

namespace app\modules\admin\controllers;

use app\models\Skirttype;
use frontend\modules\admin\models\Skirttype as SkirttypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SkirttypeController implements the CRUD actions for Skirttype model.
 */
class SkirttypeController extends Controller
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
     * Lists all Skirttype models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SkirttypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Skirttype model.
     * @param int $SkirtTypeId Skirt Type ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($SkirtTypeId)
    {
        return $this->render('view', [
            'model' => $this->findModel($SkirtTypeId),
        ]);
    }

    /**
     * Creates a new Skirttype model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Skirttype();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'SkirtTypeId' => $model->SkirtTypeId]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Skirttype model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $SkirtTypeId Skirt Type ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($SkirtTypeId)
    {
        $model = $this->findModel($SkirtTypeId);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'SkirtTypeId' => $model->SkirtTypeId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Skirttype model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $SkirtTypeId Skirt Type ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($SkirtTypeId)
    {
        $this->findModel($SkirtTypeId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Skirttype model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $SkirtTypeId Skirt Type ID
     * @return Skirttype the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($SkirtTypeId)
    {
        if (($model = Skirttype::findOne(['SkirtTypeId' => $SkirtTypeId])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
