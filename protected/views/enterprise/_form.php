<?php
/* @var $this EnterpriseController */
/* @var $model Enterprise */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enterprise-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bathroom'); ?>
		<?php echo $form->textField($model,'bathroom'); ?>
		<?php echo $form->error($model,'bathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parking'); ?>
		<?php echo $form->textField($model,'parking'); ?>
		<?php echo $form->error($model,'parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coffee_shop'); ?>
		<?php echo $form->textField($model,'coffee_shop'); ?>
		<?php echo $form->error($model,'coffee_shop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wifi'); ?>
		<?php echo $form->textField($model,'wifi'); ?>
		<?php echo $form->error($model,'wifi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'beer'); ?>
		<?php echo $form->textField($model,'beer'); ?>
		<?php echo $form->error($model,'beer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shower'); ?>
		<?php echo $form->textField($model,'shower'); ?>
		<?php echo $form->error($model,'shower'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->