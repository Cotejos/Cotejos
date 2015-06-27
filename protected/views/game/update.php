<?php
/* @var $this GameController */
/* @var $model Game */

$this->breadcrumbs=array(
	'Games'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Game', 'url'=>array('index')),
	array('label'=>'Create Game', 'url'=>array('create')),
	array('label'=>'View Game', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Game', 'url'=>array('admin')),
);
?>

<h1>Update Game <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>