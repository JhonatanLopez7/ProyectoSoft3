<?php
/* @var $this PalabrasClaveController */
/* @var $model PalabrasClave */

$this->breadcrumbs=array(
	'Palabras Claves'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List PalabrasClave', 'url'=>array('index')),
	array('label'=>'Create PalabrasClave', 'url'=>array('create')),
	array('label'=>'Update PalabrasClave', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete PalabrasClave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PalabrasClave', 'url'=>array('admin')),
);
?>

<h1>View PalabrasClave #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'descripcion',
	),
)); ?>
