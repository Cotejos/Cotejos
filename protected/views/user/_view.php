<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstName')); ?>:</b>
	<?php echo CHtml::encode($data->firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondName')); ?>:</b>
	<?php echo CHtml::encode($data->secondName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surName')); ?>:</b>
	<?php echo CHtml::encode($data->surName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nickName')); ?>:</b>
	<?php echo CHtml::encode($data->nickName); ?>
	<br />


</div>