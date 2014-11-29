<?php
/* @var $this FieldController */
/* @var $model Field */

$this->breadcrumbs=array(
	'Fields'=>array('index'),
	$model->Name=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Field', 'url'=>array('index')),
	array('label'=>'Create Field', 'url'=>array('create')),
	array('label'=>'View Field', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Field', 'url'=>array('admin')),
);
?>

<h1>Update Field <?php echo $model->Id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>