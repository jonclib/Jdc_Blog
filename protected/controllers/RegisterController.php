<?php

class RegisterController extends Controller
{

	// public function actions()
	// {
	// 	return array(
	// 		// captcha action renders the CAPTCHA image displayed on the contact page
	// 		'captcha'=>array(
	// 			'class'=>'CCaptchaAction',
	// 			'backColor'=>0xFFFFFF,
	// 		),
	// 		// page action renders "static" pages stored under 'protected/views/site/pages'
	// 		// They can be accessed via: index.php?r=site/page&view=FileName
	// 		'page'=>array(
	// 			'class'=>'CViewAction',
	// 		),
	// 	);
	// }

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// crear una instancia del modelo, para poder validar el formulario, si no no puedo
		$model=new RegisterForm;

		// $data=new User;	

		// le paso model a la vista
		// $this->render('index',array('model'=>$model));	
		// $this->render('index');
		// echo "blog";

		if(isset($_POST['RegisterForm']))
		{
			// verificacion de los atributos del modelo
			$model->attributes=$_POST['RegisterForm'];
			if($model->validate())
			{

				// echo "correcto";

				// print_r($_POST);
				// print_r($_POST['RegisterForm']['first_name']);
				// $data = $model;

				// print_r($data);
				// guardo en la variable pass que cree la data del password
				$pass = $_POST['RegisterForm']['password'];
				// creo una instancia del modelo, para usar sus metodos etc
				$user=new Register;
				$user->first_name = $_POST['RegisterForm']['first_name'];
				$user->last_name = $_POST['RegisterForm']['last_name'];
				$user->email = $_POST['RegisterForm']['email'];
				// $user->password = $_POST['RegisterForm']['password'];
				$user->password = password_hash($pass,PASSWORD_BCRYPT);
				$user->save();

				// if($user->save())
				// 	$this->redirect(array('test'));

				// if($data->save())

				Yii::app()->user->setFlash('register','Gracias por registrarse en la aplicación.');

				// este metodo refresca los input, ingresados en los input
				$this->refresh();

				// $this->render('index',array('model'=>$model));

				// redirects en yii
				// $this->redirect(['index'])


			}
		}

		$this->render('index',array('model'=>$model));		
	}


	public function actionTest()
	{

		echo "ok";

	}


	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_user));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	// public function actionError()
	// {
	// 	if($error=Yii::app()->errorHandler->error)
	// 	{
	// 		if(Yii::app()->request->isAjaxRequest)
	// 			echo $error['message'];
	// 		else
	// 			$this->render('error', $error);
	// 	}
	// }

	public function actionAdd()
	{
		$model=new RegisterForm;

		// verifico que mando por post todo lo de RegisterForm, que no este vacio
		if(isset($_POST['RegisterForm']))
		{
			// verificacion de los atributos del modelo
			$model->attributes=$_POST['RegisterForm'];
			if($model->validate())
			{

				// echo "correcto";

				echo $_POST;
				// $name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				// $subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				// $headers="From: $name <{$model->email}>\r\n".
				// 	"Reply-To: {$model->email}\r\n".
				// 	"MIME-Version: 1.0\r\n".
				// 	"Content-Type: text/plain; charset=UTF-8";

				// mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				// Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				// $this->refresh();
			}
		}
		// $this->render('contact',array('model'=>$model));
	}
	

	
}