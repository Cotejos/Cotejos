<?php
/* @var $this EnterpriseController */
/* @var $data Enterprise */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bathroom')); ?>:</b>
	<?php echo CHtml::encode($data->bathroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parking')); ?>:</b>
	<?php echo CHtml::encode($data->parking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coffee_shop')); ?>:</b>
	<?php echo CHtml::encode($data->coffee_shop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wifi')); ?>:</b>
	<?php echo CHtml::encode($data->wifi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('beer')); ?>:</b>
	<?php echo CHtml::encode($data->beer); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shower')); ?>:</b>
	<?php echo CHtml::encode($data->shower); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	*/ ?>

</div>