<?php
/* @var $this FieldController */
/* @var $model Field */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'field-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
		<?php echo $form->error($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Capacity'); ?>
		<?php echo $form->textField($model,'Capacity'); ?>
		<?php echo $form->error($model,'Capacity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Name'); ?>
		<?php echo $form->textField($model,'Name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ubication'); ?>
		<?php echo $form->textField($model,'Ubication',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Ubication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Size'); ?>
		<?php echo $form->textField($model,'Size',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Price'); ?>
		<?php echo $form->textField($model,'Price'); ?>
		<?php echo $form->error($model,'Price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Schedule'); ?>
		<?php echo $form->textField($model,'Schedule'); ?>
		<?php echo $form->error($model,'Schedule'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->