<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rubro', 'url'=>array('index')),
	array('label'=>'Create Rubro', 'url'=>array('create')),
	array('label'=>'View Rubro', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Rubro', 'url'=>array('admin')),
);
?>

<h1>Update Rubro <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>