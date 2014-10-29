<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List Rubro', 'url'=>array('index')),
	array('label'=>'Create Rubro', 'url'=>array('create')),
	array('label'=>'Update Rubro', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete Rubro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rubro', 'url'=>array('admin')),
);
?>

<h1>View Rubro #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nombre',
		'descripcion',
		'tipo',
		'rubro_especial',
	),
)); ?>
