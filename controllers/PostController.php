<?php

namespace app\controllers;

use app\models\Contacto;
use app\models\Post;
use app\models\PostSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
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
     * Lists all Post models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->setSort([
            'defaultOrder' => ['id'=>SORT_DESC],]);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndex2()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    
    
     public function actionMail(){
        // var_dump((Yii::$app->request->post()));die();
        //     $model = new Contacto();
        //     $model->nombre = Yii::$app->request->post()[""]
           
     }
     public function actionCreate()
    {
        $model = new Post();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {


                $image = UploadedFile::getInstance($model, 'foto');
                if (!is_null($image)) {
                  $model->image_src_filename = $image->name;
                  $ext = explode(".", $image->name);
                  //var_dump($ext);die();
                   // generate a unique file name to prevent duplicate filenames
                   $model->foto = Yii::$app->security->generateRandomString().".{$ext[1]}";
                   // the path to save file, you can set an uploadPath
                   // in Yii::$app->params (as used in example below)                       
                   Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/';
                   $path = Yii::$app->params['uploadPath'] . $model->foto;
                    $image->saveAs($path);
                 }
                 if ($model->save()) {             
                     return $this->redirect(['view', 'id' => $model->id]);             
                 }  else {
                     var_dump ($model->getErrors()); die();
                  }


               
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $aux = $model->foto;
        if ($this->request->isPost && $model->load($this->request->post())) {

            if(empty($model->foto)){
                $model->foto = $aux;
                $model->save(true);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
