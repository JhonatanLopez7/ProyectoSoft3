<?php
/* @var $this ConvocatoriaController */
/* @var $model Convocatoria */

$this->breadcrumbs=array(
	'Convocatorias'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Convocatoria', 'url'=>array('index')),
	array('label'=>'Create Convocatoria', 'url'=>array('create')),
	array('label'=>'Update Convocatoria', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Convocatoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Convocatoria', 'url'=>array('admin')),
);
?>

<h1>View Convocatoria #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nombre',
		'objetivo',
		'tipo',
		'estilo',
		'fecha_creacion',
		'fecha_ultima_modificacion',
	),
)); ?>
