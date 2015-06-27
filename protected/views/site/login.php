	<?php
	/* @var $this SiteController */
	/* @var $model LoginForm */
	/* @var $form CActiveForm  */

	Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl."/css/login.css");

	$this->pageTitle=Yii::app()->name . ' - Login';
	$this->breadcrumbs=array(
		'Login',
		);
		?>

		<div class="row">

			<div class="col-xs-0 col-sm-0 col-md-5">
				<div class="row">
					<img class="displayed img-responsive" src="<?php echo Yii::app()->request->baseUrl; ?>/images/Logo-Cotejos.png">
				</div>
			</div>

			<div class="col-xs-2 col-sm-2 col-md-2">
				<div class="row"></div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-5">
			<div class="row">
				<div class="panel panel-default login-background">

					<h1>! Bienvenido ¡</h1>
					<div class="">
						<div class="">
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'login-form',

								'enableClientValidation'=>true,
								'clientOptions'=>array(
									'validateOnSubmit'=>true,

									),
									)); ?>

									<p class="note">Fields with <span class="required">*</span> are required.</p>
										<div class="row">
											<div class="form-group input-group login-fields col-xs-12 col-sm-12 col-md-9">
												<?php //echo $form->labelEx($model,'username'); ?>
												<span class="input-group-addon glyphicon glyphicon-user" id="sizing-addon1"></span>
												<?php echo $form->textField($model,'username',array('class'=>'form-control',"aria-describedby"=>"sizigng-addon1")); ?>
												<?php echo $form->error($model,'username'); ?>
											</div>
											<br>
										</div>
										<div class="row">

										<div class="form-group input-group login-fields col-xs-12 col-sm-12 col-md-9">
											<?php //echo $form->labelEx($model,'password'); ?>
											<span class="input-group-addon glyphicon glyphicon-pencil" id="sizing-addon1"></span>
											<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
											<?php echo $form->error($model,'password'); ?>
										</div>
										</div>
										<br>
									<!--
										<p class="form-group hint">
											Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
										</p>
									-->
									
									<!--
									<div class="form-group rememberMe">
										<?php echo $form->checkBox($model,'rememberMe'); ?>
										<?php echo $form->label($model,'rememberMe'); ?>
										<?php echo $form->error($model,'rememberMe'); ?>
									</div>
									-->

									<div class="form-group input-group login-fields col-xs-12 col-sm-12 col-md-9">
										<?php echo CHtml::submitButton('Ingresa',array('class'=>'btn btn-default btn-rojo')); ?>
									</div>
									<br>
<!--
								<div
									class="fb-like"
									data-share="true"
									data-width="450"
									data-show-faces="true">
								</div>
-->
							</div>
							<?php $this->endWidget(); ?>

							<?php
							/*
							*@autor: Juan Carvajal
							*@descripcion: Importa el JS que contiene la logica para gestionar
							*el login de Facebook
							*/
							$cs = Yii::app()->getClientScript();
							$cs->registerCssFile(Yii::app()->request->baseUrl. "/css/full.css");
							$loginUrl = Yii::app()->createUrl('site/login');
							$indexUrl = Yii::app()->createUrl('site/index');
							$cs->registerScript('registerUrl','sitesUrl = { '."loginUrl:".'"'.$loginUrl.'",'.'indexUrl:'.'"'.$indexUrl.'"'.'}');
							$cs->registerScriptFile(Yii::app()->request->baseUrl. "/js/facebookLogin.js");
							?>
					<a id='fb-login' href='#' onclick='openLoginDialog()'><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/FB-login.png"></a>
					<!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>-->
			</div><!-- form -->
		</div>
	</div>
	</div>
</div>