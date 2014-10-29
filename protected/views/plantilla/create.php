<?php
/* @var $this PlantillaController */
/* @var $model Plantilla */

$this->breadcrumbs=array(
	'Plantillas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Plantilla', 'url'=>array('index')),
	array('label'=>'Manage Plantilla', 'url'=>array('admin')),
);
?>

<h1>Create Plantilla</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>