<?php
/* @var $this PlantillaController */
/* @var $model Plantilla */

$this->breadcrumbs=array(
	'Plantillas'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Plantilla', 'url'=>array('index')),
	array('label'=>'Create Plantilla', 'url'=>array('create')),
	array('label'=>'Update Plantilla', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Plantilla', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Plantilla', 'url'=>array('admin')),
);
?>

<h1>View Plantilla #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nombre',
		'tipo',
		'fecha_creacion',
		'fecha_modificacion',
	),
)); ?>
