<?php
/* @var $this EnterpriseController */
/* @var $model Enterprise */

$this->breadcrumbs=array(
	'Enterprises'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Enterprise', 'url'=>array('index')),
	array('label'=>'Create Enterprise', 'url'=>array('create')),
	array('label'=>'Update Enterprise', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Enterprise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enterprise', 'url'=>array('admin')),
);
?>

<h1>View Enterprise #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'name',
		'bathroom',
		'parking',
		'coffee_shop',
		'wifi',
		'beer',
		'shower',
		'description',
	),
)); ?>
