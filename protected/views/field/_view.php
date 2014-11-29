<?php
/* @var $this FieldController */
/* @var $data Field */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Capacity')); ?>:</b>
	<?php echo CHtml::encode($data->Capacity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ubication')); ?>:</b>
	<?php echo CHtml::encode($data->Ubication); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Size')); ?>:</b>
	<?php echo CHtml::encode($data->Size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Price')); ?>:</b>
	<?php echo CHtml::encode($data->Price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Schedule')); ?>:</b>
	<?php echo CHtml::encode($data->Schedule); ?>
	<br />


</div>