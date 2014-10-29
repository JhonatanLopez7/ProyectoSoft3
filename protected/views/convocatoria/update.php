<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Convocatoria', 'url'=>array('index')),
	array('label'=>'Create Convocatoria', 'url'=>array('create')),
	array('label'=>'View Convocatoria', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Convocatoria', 'url'=>array('admin')),
);
?>

<h1>Update Convocatoria <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>