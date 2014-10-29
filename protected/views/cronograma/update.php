<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cronograma', 'url'=>array('index')),
	array('label'=>'Create Cronograma', 'url'=>array('create')),
	array('label'=>'View Cronograma', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Cronograma', 'url'=>array('admin')),
);
?>

<h1>Update Cronograma <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>