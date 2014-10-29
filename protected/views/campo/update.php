<?php
/* @var $this CampoController */
/* @var $model Campo */

$this->breadcrumbs=array(
	'Campos'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Campo', 'url'=>array('index')),
	array('label'=>'Create Campo', 'url'=>array('create')),
	array('label'=>'View Campo', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Campo', 'url'=>array('admin')),
);
?>

<h1>Update Campo <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>