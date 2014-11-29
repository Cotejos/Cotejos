<?php
/* @var $this FieldController */
/* @var $model Field */

$this->breadcrumbs=array(
	'Fields'=>array('index'),
	$model->Name,
);

$this->menu=array(
	array('label'=>'List Field', 'url'=>array('index')),
	array('label'=>'Create Field', 'url'=>array('create')),
	array('label'=>'Update Field', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Field', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Field', 'url'=>array('admin')),
);
?>

<h1>View Field #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Capacity',
		'Name',
		'Ubication',
		'Size',
		'Price',
		'Schedule',
	),
)); ?>
