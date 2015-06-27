<?php
/* @var $this EnterpriseController */
/* @var $model Enterprise */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bathroom'); ?>
		<?php echo $form->textField($model,'bathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parking'); ?>
		<?php echo $form->textField($model,'parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coffee_shop'); ?>
		<?php echo $form->textField($model,'coffee_shop'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wifi'); ?>
		<?php echo $form->textField($model,'wifi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'beer'); ?>
		<?php echo $form->textField($model,'beer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shower'); ?>
		<?php echo $form->textField($model,'shower'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->