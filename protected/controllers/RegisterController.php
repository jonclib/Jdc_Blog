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

				Yii::app()->user->setFlash('register','Gracias por registrarse en la aplicación.');
				// $this->refresh();

				// $this->render('index',array('model'=>$model));


			}
		}

		$this->render('index',array('model'=>$model));		
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