<?php

class PostController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			// 'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to access 'index' and 'view' actions.
				'actions'=>array('index','view','search','search1','tagpost','place'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated users to access all actions
				'actions'=>array('create','update','delete','postprofile','viewtraodoi'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	// public function actionPostprofile()
	// {
	// 	$iduser = Yii::app()->User->id;
	// 	$criteria=new CDbCriteria ();
	// 	$criteria->compare('author_id',$iduser);
	// 	$criteria=Post::model()->findAll($criteria);

	// 	$id_palce=$criteria->
	// 	$place = new CDbCriteria();
	// 	$place->compare

	// 	$this->render('postProfile', array(
	// 		'criteria'=>$criteria,			
	// 	));
	// }
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),

		));
	}
	public function actionPlace($id){
		$criteria = new CDbCriteria();
		$criteria->compare('place_id',$id);
		$criteria=User::model()->findAll($criteria);


		foreach($criteria as $data){
			$place=new CDbCriteria();
			$place->compare('author_id',$data->id);
			$place=Post::model()->findAll($place);
		}


		$this->render('place', array(
			'criteria'=>$criteria,	
			'place'=>$place,			
		));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionTagpost($Tagpost)
	{
		$criteria = new CDbCriteria();
		$criteria->addCondition('tags LIKE :str','OR');
		
			$criteria->params[':str'] = '%'.$Tagpost.'%';
			$dataProvider=new CActiveDataProvider('Post', array(
				'pagination'=>array(
				'pageSize'=>10,
				),
				'criteria'=>$criteria,
			));
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
	
	}
	public function actionViewtraodoi($id,$idreport){
		$this->render('viewtraodoi',array(
			'model'=>$this->loadModel($id),
			'idreport'=>$idreport,
		));
	}
	public function actionCreate()
	{
		$model=new Post;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Post']))
		{
			$model->attributes=$_POST['Post'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Post');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Post('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Post']))
			$model->attributes=$_GET['Post'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Post the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Post::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Post $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='post-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionSuggestTags()
	{
		if(isset($_GET['q']) && ($keyword=trim($_GET['q']))!=='')
		{
			$tags=Tag::model()->suggestTags($keyword);
			if($tags!==array())
				echo implode("\n",$tags);
		}
	}


	// search
	public function actionSearch1()
	{
		 $criteria= new CDbCriteria();
		 // $criteria->addCondition('nxb LIKE :str');
		 // $criteria->addCondition('title LIKE :str','OR');
		 $criteria->addCondition('title LIKE :str','OR');
		 $criteria->addCondition('content LIKE :str','OR');
		 $criteria->addCondition('tags LIKE :str','OR');
		 // $criteria->addCondition(' LIKE :str','OR');
		 $criteria->params[':str']='%'.$_POST['search_str'].'%';
		 $dataProvider=new CActiveDataProvider('Post', array(
			'pagination'=>array(
				'pageSize'=>10,
				),
			'criteria'=>$criteria,
			));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}
}
