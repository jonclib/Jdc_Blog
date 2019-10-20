<?php

class LoginController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

			// collect user input data
		if(isset($_POST['LoginForm']))
		{
			// $model->attributes=$_POST['LoginForm'];
			// // validate user input and redirect to the previous page if valid
			// if($model->validate() && $model->login())
			// 	$this->redirect(Yii::app()->user->returnUrl);

			// print_r($_POST);

			$user=User::model()->find('email=?',array($_POST['LoginForm']['email']));

			// $user->password;

			// print_r($user->password);

			$user->verifyHash($_POST['LoginForm']['password'],$user->password);

			print_r($user->verifyHash($_POST['LoginForm']['password'],$user->password));

		}


		$this->render('index',array('model'=>$model));
		// $this->render('index');

	}

	/**
	 * Displays the login page
	 */
	public function actionSignIn()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			// $model->attributes=$_POST['LoginForm'];
			// // validate user input and redirect to the previous page if valid
			// if($model->validate() && $model->login())
			// 	$this->redirect(Yii::app()->user->returnUrl);

			// print_r($_POST);

			$user=User::model()->find('email=?',array($_POST['LoginForm']['email']));

			// $user->password;

			// print_r($user->password);

			$user->verifyHash($_POST['LoginForm']['password'],$user->password);

			print_r($user->verifyHash($_POST['LoginForm']['password'],$user->password));

		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}