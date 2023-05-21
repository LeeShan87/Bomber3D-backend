<?php

class GameController extends Controller
{
    public $layout='gamelayout';
	public function actionIndex()
	{
		$this->render('index');
	}
  public function actionGetlanguage($language=""){
            if($language!="")Yii::app()->language =$language;
             $this->renderPartial('getlanguage');
        }      
        public function actionIn()
	{
		$this->renderPartial('in');
	}
  
    public function actionLeaderboard($order="level"){
		// Seeing an SQL injection vulnerability in one of my old code makes me laugh. :D
		// This game is not availble any more online.
            $result=Yii::app()->db->createCommand("Select user.username, playerdata.* from user, playerdata where user.id=playerdata.user_id order by ".$order." desc limit 10")->queryAll();
            $this->renderPartial('leaderboard',array('result'=>$result));
        }    
        public function actionGetdata(){
            $model=  User::model()->findByPk(Yii::app()->user->id);
            if(!$model)$model= User::model()->findByPk(7);
            $this->renderPartial('data',array('model'=>$model));
        }
        public function actionSavedata($record,$value){
            $model=  Playerdata::model()->findByAttributes(array("user_id"=>  Yii::app()->user->id));
            if(!Yii::app()->user->id) $model=Playerdata::model()->findByAttributes(array("user_id"=>  '7'));
            echo "id=".$id.' record='.$record.' value='.$value.'<br><pre>';
            $model->$record=$value;
            var_dump(!Yii::app()->user->id);
            var_dump($model->$record);
            var_dump($model);
            
            $model->update();
        }

        public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('getdata','in','getlanguage','savedata','leaderboard','index'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','getdata','getlanguage','leaderboard','savedata'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('index','admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}