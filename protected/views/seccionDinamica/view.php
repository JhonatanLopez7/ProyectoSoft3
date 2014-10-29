<?php
/* @var $this SeccionDinamicaController */
/* @var $model SeccionDinamica */

$this->breadcrumbs=array(
	'Seccion Dinamicas'=>array('index'),
	$model->codigo,
);

$this->menu=array(
	array('label'=>'List SeccionDinamica', 'url'=>array('index')),
	array('label'=>'Create SeccionDinamica', 'url'=>array('create')),
	array('label'=>'Update SeccionDinamica', 'url'=>array('update', 'id'=>$model->codigo)),
	array('label'=>'Delete SeccionDinamica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->codigo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SeccionDinamica', 'url'=>array('admin')),
);
?>

<h1>View SeccionDinamica #<?php echo $model->codigo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'codigo',
		'nombre',
		'descripcion',
		'estado',
	),
)); ?>
