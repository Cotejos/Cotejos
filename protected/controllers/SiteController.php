<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
    
    /*
     * @Author: Juan Carvajal <juanesteban100@gmail.com>
     * @Description: Define filtro para que valide permisos con reglas del metodo accessRules
     * @Return: void
     * */
    public function filters()
    {
        return array(
            'accessControl'
        );
        
    }
    
        /*
     * @Author: Juan Carvajal <juanesteban100@gmail.com>
     * @Description: Define reglas de autorizacion de las acciones
     * @Return: void
     * */
    public function accessRules(){
        return array(
        //Permite el ingreso de login a usuarios anonimos
        array('allow','actions'=>array('login'),'users'=>array('?')),
        array('allow','actions'=>array('about'),'users'=>array('*')),
        );
    }

	public function actionUnderConstruction(){
		$this->layout = "/";
		$this->render('construction');
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		if(Yii::app()->user->isGuest){
			$model = new LoginForm();
			$this->render('login',array('model'=>$model));
		}else{
			$this->render('index');
		}
	}

	public function actionMatch()
	{
		$this->render('match');
	}


	public function actionTeam()
	{
		$this->render('team');
	}

		public function actionTournament()
	{
		$this->render('tournament');
	}


	public function actionField()
	{
		$this->render('field');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	/**
	 *@autor: Mauro Soto
	 *@descripcion: Revisa que el usuario este loguedo para entrar a la vista about
	 *@retorna:void
	 */

	public function actionAbout()
	{
	    $this->render('about');
        /*
		if(Yii::app()->user->isGuest){
			$model = new LoginForm();
			$this->render('login',array('model'=>$model));
		}else{
			$this->render('about');
		}
         * */
	}

	/**
	 *@autor: Mauro Soto
	 *@descripcion: valida si el usuario esta logueado para ingresar a la vista de contactos
	 *@retorna:void
	 */
	public function actionContact()
	{
		if(Yii::app()->user->isGuest){
			$model = new LoginForm();
			$this->render('login',array('model'=>$model));
		}else{
			
			$model=new ContactForm;
			if(isset($_POST['ContactForm']))
			{
				$model->attributes=$_POST['ContactForm'];
				if($model->validate())
				{
					$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
					$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
					$headers="From: $name <{$model->email}>\r\n".
						"Reply-To: {$model->email}\r\n".
						"MIME-Version: 1.0\r\n".
						"Content-Type: text/plain; charset=UTF-8";

					mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
					Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
					$this->refresh();
				} 
			}
			$this->render('contact',array('model'=>$model));
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
		
		if(Yii::app()->request->isAjaxRequest){
			$result = array('message'=>'Recibido');
			//var_dump($_POST);
			$model->username = $_POST['nombre'];
			$model->password = $_POST['password'];
			$model->rememberMe = true;
			if($model->validate() && $model->login()){
				//$this->render('index');
			}
			
			//$this->redirect(Yii::app()->request->baseUrl);
			echo CJSON::encode($result);
			Yii::app()->end();
		}



		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
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