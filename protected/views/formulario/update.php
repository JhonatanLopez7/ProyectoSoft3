<?php
/* @var $this FormularioController */
/* @var $model Formulario */

$this->breadcrumbs=array(
	'Formularios'=>array('index'),
	$model->codigo=>array('view','id'=>$model->codigo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Formulario', 'url'=>array('index')),
	array('label'=>'Create Formulario', 'url'=>array('create')),
	array('label'=>'View Formulario', 'url'=>array('view', 'id'=>$model->codigo)),
	array('label'=>'Manage Formulario', 'url'=>array('admin')),
);
?>

<h1>Update Formulario <?php echo $model->codigo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>